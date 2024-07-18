@extends('layouts.index')
@section('content')
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('site.verify_email') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium fw-light text-sm text-green-600" style="color: #2e992e;">
                {{ __('site.send_verify_email') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between"
            style="justify-content: space-between;
        align-items: center; text-align: center; display: flex;">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button class="btn btn-secondary" type="submit">
                        {{ __('site.resend_verify_email') }}
                    </button>
                </div>
            </form>

            <div class="d-flex flex-row align-items-center">
                <a href="{{ route('profile.show') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="btn btn-link underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('site.logout') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
@endsection
