@props(['type' => '', 'style' => ''])

@php
    $buttonStyle = match ($style) {
        'primary'
            => 'bg-button-primary text-button-primary-font hover:bg-button-primary-hover text-center inline-flex items-center',
        'secondary' => 'bg-button-secondary',
        'link' => 'text-font-primary',
        'danger'
            => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-hidden focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150',
        default
            => 'bg-button-primary text-button-primary-font hover:bg-button-primary-hover  text-center inline-flex items-center',
    };

    $buttonType = match ($type) {
        'submit' => 'submit',
        default => 'button',
    };
@endphp

<button
    {{ $attributes->merge(['type' => 'buttonType', 'class' => 'cursor-pointer font-medium rounded-lg text-sm px-5 py-2.5 ' . $buttonStyle]) }}>
    {{ $slot }}
</button>
