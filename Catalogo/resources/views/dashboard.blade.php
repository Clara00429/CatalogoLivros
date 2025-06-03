<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#642764] dark:text-[#d8bfd8] leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#e8def6] dark:bg-[#3b1c4c]">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#642764] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-[#642764] dark:text-[#d8bfd8]">
                    {{ __("Você está logado!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

