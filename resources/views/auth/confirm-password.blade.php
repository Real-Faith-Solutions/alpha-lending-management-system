@extends('layouts.guest')
@section('content')
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mt-4 flex justify-end">
            <button class="w-40 py-3 px-4  text-center bg-indigo-600 rounded-md text-white text-sm hover:bg-indigo-500">
                {{ __('Confirm') }}
            </button>

        </div>
    </form>
@endsection
