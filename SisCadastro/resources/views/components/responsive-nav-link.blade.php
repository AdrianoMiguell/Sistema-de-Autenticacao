@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-center fw-semibold fs-5 text-white text-decoration-none'
            : 'text-center fw-semibold fs-5 text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <div class="bg-danger border rounded">
        {{ $slot }}
    </div>
</a>
