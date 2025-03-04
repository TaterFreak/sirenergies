@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-font-primary']) }}>
    {{ $value ?? $slot }}
</label>
