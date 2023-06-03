<x-guest-layout>
    <x-navbg/>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 mt-24" :status="session('status')" />
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 flex justify-center items-center">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="border-nblue dark:border-nblue text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800 accent-seagreen" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-nblue">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-end justify-end mt-4">
                <div class="flex flex-col">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-nblue hover:text-seagreen focus:outline-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <p class="text-sm mt-2">Dont Have account? <a class="underline text-sm text-gray-600 dark:text-nblue hover:text-seagreen focus:outline-none" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a></p>

                    @endif
                </div>

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</x-guest-layout>
