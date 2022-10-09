<nav x-data="{ open: false }" class="bg-warning bg-opacity-50 col-12 mb-2 d-flex justify-content-start px-5">
    <!-- Primary Navigation Menu -->
    <div class="row col-6 h-75 d-flex flex-column">
            <div>
                <!-- Logo -->
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="d-block row col-12" />
                    </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex my-1 row col-6">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="d-flex flex-column align-items-end mx-4 mb-2">
               <!-- Responsive Settings Options -->
        <div class="pt-2 pb-1">
            <div class="px-4 mt-4">
                <span class="fs-3 fw-semibold text-black"> Dados: </span>
                <div class="fs-4 fw-semibold text-success text-center">{{ Auth::user()->name }}</div>
                <div class="fs-4 fw-semibold text-success text-center">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
