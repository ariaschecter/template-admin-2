@props(['name', 'type' => 'basic', 'value'])

@php
    $label = Str::of($name)
        ->replace('_', ' ')
        ->title();
@endphp

<div {{ $attributes->merge(['class' => '']) }}>
    <x-form.label :name="$name" />
    <input type="text" class="form-input" id="datepicker-{{ $type }}" name="{{ $name }}" value="{{ $value ?? old($name) }}" {{ $status ?? '' }}>
</div>



