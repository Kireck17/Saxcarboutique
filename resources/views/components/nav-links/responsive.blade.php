@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-100 py-3 px-6 flex justify-between items-center font-bold text-base text-yellow-dark border-l-8 border-yellow-dark'
            : 'bg-white py-3 px-6 flex justify-between items-center font-bold text-base';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>