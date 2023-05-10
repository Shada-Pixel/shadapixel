@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-b-[1px] border-nblue bg-transparent']) !!}>
