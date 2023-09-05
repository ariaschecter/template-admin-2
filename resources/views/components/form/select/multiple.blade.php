@props(['name', 'slot'])

<select class="selectize" name="{{ $name }}" multiple="multiple">
    {!! $slot !!}
</select>
