<div class="min-h-screen d-flex flex-col md:justify-center items-center pt-6 sm:pt-0 m-5">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full md:max-w-md mt-6 px-6 py-4 bg-primary bg-opacity-25 p-5 border border-4 rounded border-warning shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
