<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="text-center text-gray-900 my-4">Enter your email to generate registration code.</div>
        <form method="POST" action="{{ route('getRegCode') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->


            <!-- Remember Me -->

            <div class="flex items-center justify-end mt-4">
 

                <x-button class="ml-3">
                    {{ __('Generate code') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
