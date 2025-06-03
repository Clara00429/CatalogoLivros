<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-center text-[#642764] mb-6">Entrar na sua conta</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-[#642764]" />
                <x-text-input id="email" class="block mt-1 w-full border-[#d1bcd6] focus:border-[#642764] focus:ring-[#642764]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" class="text-[#642764]" />
                <x-text-input id="password" class="block mt-1 w-full border-[#d1bcd6] focus:border-[#642764] focus:ring-[#642764]"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#642764] shadow-sm focus:ring-[#642764]" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-[#642764] hover:text-[#4e1d51]" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3 bg-[#642764] hover:bg-[#4e1d51]">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
