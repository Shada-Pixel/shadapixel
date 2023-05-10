@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-nblue']) }}>
    {{ $value ?? $slot }}
</label>
