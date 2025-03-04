<?php

use App\Livewire\Actions\Logout;
use App\Models\Post;
use Livewire\Volt\Component;

new class () extends Component {}; ?>

<nav class="bg-background-secondary">
    <div class="flex justify-between px-6 items-center h-16 lgjustify-start relative">
        <div class="lg:hidden w-26"></div>

        <a href="{{ route('dashboard') }}" class="lg:w-76 uppercase text-2xl text-font-primary">
            PILOTT
        </a>

        <div class="flex items-center">
            <div
                class="fixed bottom-0 left-0 right-0 flex justify-around items-center bg-background-secondary h-14 lg:static">
                <div class="lg:mr-5">
                    <livewire:components.dropdown-company />
                </div>
                <div class="lg:pr-5">
                    <livewire:components.dropdown-news />
                </div>
                <div class="lg:pr-5">
                    <livewire:components.dropdown-notification />
                </div>
            </div>
            <div class="flex items-center">
                <div x-data="{ theme: $store.theme }" class="pr-5 flex items-center">
                    <x-input-toggle ::model="theme.current" @change="theme.changeTheme()" ::checked="theme.current === 'dark'">
                        <x-heroicon-o-sun height="16" width="16"
                            class="absolute left-1 top-1 text-background-primary" />
                        <x-heroicon-o-moon height="16" width="16"
                            class="absolute right-1 top-1 text-font-primary" />
                    </x-input-toggle>
                </div>
                <livewire:components.sidebar-profile />
            </div>
        </div>
    </div>
</nav>
