@props(['align' => 'right', 'widthClasses' => 'w-80 lg:w-120'])

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open" class="cursor-pointer">
        {{ $trigger }}
    </div>

    <div x-bind:class="open ? '!translate-x-0' : ''"
        class="fixed top-16 right-0 translate-x-full z-40 {{ $widthClasses }} pb-16 h-screen transition-transform shadow-sm"
        @click="open = false">
        <div class="h-full overflow-y-auto bg-background-secondary">
            {{ $content }}
        </div>
    </div>
</div>
