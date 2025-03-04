<?php

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Volt\Component;

new class () extends Component {
    public Collection $posts;
    public bool $hasNewPosts;

    public function mount()
    {
        $this->posts = Post::all();
        $this->checkForNewPosts();
    }

    public function checkForNewPosts()
    {
        $this->hasNewPosts = Post::where('is_new', true)->exists();
    }

    public function toggleIsNew($postId)
    {
        $post = Post::find($postId);

        if (!$post) {
            return;
        }

        if (!$post->is_new) {
            return;
        }

        $post->is_new = !$post->is_new;
        $post->save();

        $this->checkForNewPosts();

        $this->posts = Post::all();

        $this->dispatch('postUpdated', $post->id, $post->is_new);
    }
}; ?>

<x-dropdown-sidebar align="right">
    <x-slot name="trigger">
        <div class="relative">
            <x-heroicon-o-newspaper height="25" width="25" class="text-font-primary" />
            <div
                class="{{ $hasNewPosts ? 'rounded-full bg-notification block' : 'hidden' }} h-3 w-3 mt-1 mr-1 absolute -top-1 right-0">
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="divide-y divide-divide-primary">
            <x-dropdown-title>
                {{ __('L\'actualité récente') }}
            </x-dropdown-title>
            @foreach ($posts as $post)
                <x-dropdown-link wire:click="toggleIsNew({{ $post->id }})">
                    <x-news-item :post="$post" />
                </x-dropdown-link>
            @endforeach
        </div>
    </x-slot>
</x-dropdown-sidebar>
