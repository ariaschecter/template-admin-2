@props(['name'])

@php
    $label = Str::of($name)
        ->replace('_', ' ')
        ->title();
@endphp

<label for="{{ $name }}"
    {{ $attributes->merge(['class' => 'text-gray-800 text-sm font-medium inline-block mb-2']) }}>{{ $label }}</label>
