<?php

use App\Livewire\Actions\Logout;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Volt\Component;

new class () extends Component {
    public $links = [
        0 => [
            0 => [
                'name' => 'Profile',
                'icon' => 'user-circle',
                '_blank' => false,
            ],
            1 => [
                'name' => 'Parametres',
                'icon' => 'cog-6-tooth',
                '_blank' => false,
            ],
            2 => [
                'name' => 'Jetons API',
                'icon' => 'circle-stack',
                '_blank' => false,
            ],
            3 => [
                'name' => 'Backoffice',
                'icon' => 'building-library',
                '_blank' => true,
            ],
            4 => [
                'name' => 'Mailer',
                'icon' => 'envelope',
                '_blank' => true,
            ],
            5 => [
                'name' => 'Pulse',
                'icon' => 'viewfinder-circle',
                '_blank' => true,
            ],
            6 => [
                'name' => 'Tower',
                'icon' => 'building-office',
                '_blank' => true,
            ],
            7 => [
                'name' => 'Horizon',
                'icon' => 'globe-alt',
                '_blank' => true,
            ],
            8 => [
                'name' => 'Téléscope',
                'icon' => 'star',
                '_blank' => true,
            ],
            9 => [
                'name' => 'Santé du système',
                'icon' => 'heart',
                '_blank' => true,
            ],
            10 => [
                'name' => 'Documentation',
                'icon' => 'clipboard-document-list',
                '_blank' => true,
            ],
            11 => [
                'name' => 'Aide',
                'icon' => 'lifebuoy',
                '_blank' => false,
            ],
        ],
    ];

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<x-dropdown-sidebar align="right" width-classes="w-80">
    <x-slot name="trigger">
        <div class="rounded-full overflow-hidden h-10 w-10 cursor-pointer">
            <img src="{{ auth()->user()->image }}" alt="{{ auth()->user()->name }}">
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="divide-y divide-divide-primary">
            <div class="px-4 py-2">
                <div class="text-font-primary font-bold">
                    <span>{{ auth()->user()->name }}</span>
                    <x-heroicon-o-sparkles class="text-yellow-500" />
                </div>
                <div class="text-font-primary text-xs">{{ auth()->user()->email }}</div>
            </div>
            @foreach ($links as $key => $link)
                <ul>
                    @foreach ($link as $key => $sublink)
                        <li>
                            <x-dropdown-link wire:navigate>
                                <x-dynamic-component :component="'heroicon-o-' . $sublink['icon']" height="20" width="20" class="mr-1" />
                                {{ $sublink['name'] }}
                                @if ($sublink['_blank'])
                                    <x-heroicon-o-arrow-top-right-on-square height="15" width="15"
                                        class="align-text-top ml-1" />
                                @endif
                            </x-dropdown-link>
                        </li>
                    @endforeach
                </ul>
            @endforeach
            <div>
                <button class="w-full text-start" wire:click="logout">
                    <x-dropdown-link>
                        {{ __('Deconnexion') }}
                    </x-dropdown-link>
                </button>
            </div>
        </div>
    </x-slot>
</x-dropdown-sidebar>
