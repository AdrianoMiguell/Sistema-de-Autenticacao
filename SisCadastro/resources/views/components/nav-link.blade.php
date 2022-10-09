@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-block m-2 fs-5 btn btn-light'
            : 'd-block m-2 fs-5 btn btn-light';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
