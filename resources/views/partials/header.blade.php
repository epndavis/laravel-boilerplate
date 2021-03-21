<header class="z-50">
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Home</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="text-sm text-gray-700 underline cursor-pointer">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
</header>
