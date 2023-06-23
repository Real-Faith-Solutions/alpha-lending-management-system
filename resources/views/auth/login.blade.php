@extends('layouts.guest')
@section('content')
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-2 mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" value="{{ old('password') }}" required autofocus autocomplete="username">
            @error('password')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="flex items-start mt-4 mb-6">
            <div class="flex items-center h-5">
                <input name="remember" id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
        </div>

        <div class="mb-3 flex items-center justify-end">
            <button class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500" type="submit">
                Sign in
            </button>
        </div>

        <div class="ml-2 text-sm font-medium text-gray-900 mt-4 flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="rounded-md text-sm font-medium text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>

        <div class="ml-2 text-sm font-medium text-gray-900 mt-2 flex items-center justify-end">
        <a class="rounded-md text-sm font-medium text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    href="#">
                   Create an account?
                </a>
            </div>

    </form>
@endsection
