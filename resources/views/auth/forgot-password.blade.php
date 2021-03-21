@extends('layouts.app')

@section('title')
{{ __('Password Reset') }}
@endsection

@section('content')
<div class="flex items-center justify-center w-full">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">
                    {{ __('Email') }}
                </label>

                <input id="email" class="block mt-1 w-full py-1 bg-gray-100" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="bg-blue-500 hover:bg-blue-700 rounded px-3 py-2 text-white">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
