@props(['name', 'value', 'status', 'type' => 'text'])

@php
    $label = Str::of($name)
        ->replace('_', ' ')
        ->title();
@endphp

<div {{ $attributes->merge(['class' => '']) }}>
    <x-form.label :name="$name" />
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-input {{ $type == 'color' ? 'h-10' : '' }}"
        placeholder="{{ __('Input') . ' ' . $label }}" value="{{ $value ?? old($name) }}" {{ $status ?? '' }}>
</div>
