<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 m-4 btn btn-danger']) }}>
    {{ $slot }}
</button>
