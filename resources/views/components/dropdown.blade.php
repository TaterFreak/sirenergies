@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'bg-background-secondary'])

@php
    $alignmentClasses = match ($align) {
        'left' => 'lg:ltr:origin-top-left lg:rtl:origin-top-right lg:start-0',
        'top' => 'lg:origin-top',
        default => 'lg:ltr:origin-top-right lg:rtl:origin-top-left lg:end-0',
    };

    $width = match ($width) {
        '48' => 'lg:w-48',
        default => $width,
    };
@endphp

<div class="relative" x-data="{ opendd: false }" @click.outside="opendd = false" @close.stop="opendd = false">
    <div @click="opendd = ! opendd" class="cursor-pointer">
        {{ $trigger }}
    </div>

    <div x-bind:class="opendd ? '!translate-x-0 !block' : ''"
        class="fixed top-16 right-0 z-40 w-80 h-screen transition-transform translate-x-full lg:rounded-md lg:hidden lg:translate-x-0 lg:absolute lg:pb-0 lg:top-9 lg:h-auto lg:z-50 lg:mt-2 w-{{ $width }} shadow-sm {{ $alignmentClasses }}"
        @click="opendd = false">
        <div class="{{ $contentClasses }} h-full overflow-y-auto lg:h-auto lg:overflow-hidden lg:rounded-md ">
            {{ $content }}
        </div>
    </div>
</div>
