@props(['active'])

@php
    $classes = $active ?? false
                ? 'text-blue-600 font-semibold'
                : 'text-gray-600 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
