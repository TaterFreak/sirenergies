@props(['notification'])

<div class="flex relative">
    <div class="flex flex-col">
        <span class="text-font-primary">{{ $notification->title }}</span>
        <span class="text-xs text-font-secondary">{{ format_date_to_diff($notification->created_at) }}</span>
    </div>
    <div
        class="{{ $notification->is_new ? 'rounded-full bg-notification' : '' }} absolute top-0 right-0 h-3 w-3 mt-1 mr-1">
    </div>
</div>
