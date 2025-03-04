@props(['post'])

<div class="flex flex-col lg:flex-row relative">
    <div class="{{ $post->is_new ? 'rounded-full bg-notification' : '' }} absolute h-3 w-3 top-0 right-0"></div>
    <div class="shrink-0 lg:w-25 lg:mr-4 mb-2 lg:mb-0">
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
    </div>
    <div class="flex flex-col">
        <span class="text-font-primary font-bold">{{ $post->title }}</span>
        <span class="text-font-primary">{{ Str::limit($post->content, 100) }}</span>
        <span class="text-xs text-font-secondary">{{ format_date_to_diff($post->created_at) }}</span>
    </div>
</div>
