@props(['disabled' => false])
<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-b-[1px] border-nblue bg-transparent']) !!}></textarea>
