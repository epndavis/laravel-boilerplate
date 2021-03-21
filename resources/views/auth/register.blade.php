@extends('layouts.app')

@section('title')
    {{ __('Register') }}
@endsection

@section('content')
<div class="flex items-center justify-center w-full">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name">
                    {{ __('Name') }}
                </label>

                <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">
                    {{ __('Email') }}
                </label>

                <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">
                    {{ __('Password') }}
                </label>

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">
                    {{ __('Confirm Password') }}
                </label>

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-3 bg-blue-500 hover:bg-blue-700 rounded px-3 py-2 text-white">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
