@props(['name', 'value', 'status'])

<x-form.label :name="$name" />
<textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="10" class="form-input" {{ $status ?? '' }}>{{ $value ?? old($name) }}</textarea>
