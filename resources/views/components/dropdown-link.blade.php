@props(['href', 'active' => false])

@php
    $classes = ($active ?? false)
        ? 'block px-4 py-2 text-sm text-gray-900 bg-gray-100'
        : 'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
