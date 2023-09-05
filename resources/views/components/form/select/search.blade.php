@props(['name', 'slot'])

<select id="search-select" class="search-select" name="{{ $name }}">
    {!! $slot !!}
</select>
