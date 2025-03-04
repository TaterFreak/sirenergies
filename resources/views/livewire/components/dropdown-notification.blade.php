<?php

use App\Models\Notification;
use App\Services\DateFormatterService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Volt\Component;

new class () extends Component {
    public Collection $notifications;
    public bool $hasNewNotification;

    public function mount()
    {
        $this->notifications = Notification::all();
        $this->checkForNewNotifications();
    }

    public function checkForNewNotifications()
    {
        $this->hasNewNotification = Notification::where('is_new', true)->exists();
    }

    public function toggleIsNew(string $notificationId)
    {
        $notification = Notification::find($notificationId);

        if (!$notification) {
            return;
        }

        if (!$notification->is_new) {
            return;
        }

        $notification->is_new = !$notification->is_new;
        $notification->save();

        $this->checkForNewNotifications();

        $this->notifications = Notification::all();

        $this->dispatch('postUpdated', $notification->id, $notification->is_new);
    }
}; ?>


<x-dropdown-sidebar align="right" width-classes="w-80">
    <x-slot name="trigger">
        <div class="relative">
            <x-heroicon-o-bell height="25" width="25" class="text-font-primary" />
            <div
                class="{{ $hasNewNotification ? 'rounded-full bg-notification block' : 'hidden' }} h-3 w-3 mt-1 mr-1 absolute -top-1 right-0">
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="divide-y divide-divide-primary">
            <x-dropdown-title>
                {{ __('Les dernières notifications') }}
            </x-dropdown-title>
            @foreach ($notifications as $notification)
                <x-dropdown-link wire:click="toggleIsNew({{ $notification->id }})">
                    <x-notification-item :notification="$notification" />
                </x-dropdown-link>
            @endforeach
        </div>
    </x-slot>
    </x-dropdown>
