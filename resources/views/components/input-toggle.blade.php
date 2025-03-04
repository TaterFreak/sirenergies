@props(['on'])

<label class="inline-flex items-center cursor-pointer">
    <input type="checkbox" {{ $attributes }} class="sr-only peer">
    <div
        class="relative w-11 h-6 bg-button-toggle peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] peer-checked:after:bg-button-toggled-after after:bg-button-toggle-after after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-button-toggled">
        {{ $slot }}
    </div>
</label>
