@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-border-primary focus:border-border-highlight rounded-md shadow-xs focus:ring-border-highlight']) }}>
