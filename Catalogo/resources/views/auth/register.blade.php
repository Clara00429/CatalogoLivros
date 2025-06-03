<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-center text-[#642764] mb-6">Criar uma conta</h1>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nome')" class="text-[#642764]" />
                <x-text-input id="name" class="block mt-1 w-full border-[#d1bcd6] focus:border-[#642764] focus:ring-[#642764]" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-[#642764]" />
                <x-text-input id="email" class="block mt-1 w-full border-[#d1bcd6] focus:border-[#642764] focus:ring-[#642764]" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" class="text-[#642764]" />
                <x-text-input id="password" class="block mt-1 w-full border-[#d1bcd6] focus:border-[#642764] focus:ring-[#642764]"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirme a senha')" class="text-[#642764]" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-[#d1bcd6] focus:border-[#642764] focus:ring-[#642764]"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="underline text-sm text-[#642764] hover:text-[#4e1d51]" href="{{ route('login') }}">
                    {{ __('Já registrado? Entrar') }}
                </a>

                <x-primary-button class="ms-3 bg-[#642764] hover:bg-[#4e1d51]">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
