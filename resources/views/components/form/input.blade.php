@props(['name', 'value', 'disable', 'readonly', 'type' => 'text'])

@php
    $label = Str::of($name)->replace('_', ' ')->title();
@endphp
<div {{ $attributes->merge(['class' => '']) }}>
    <label for="{{ $name }}" class = "text-gray-800 text-sm font-medium inline-block mb-2">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-input" placeholder="{{ __('Input') . ' ' . $label }}">
</div>
