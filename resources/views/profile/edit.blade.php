<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
        <div class="flex justify-center w-full -mt-4 mb-8 relative z-10">
            <nav class="bg-white px-8 py-3 rounded-full shadow-lg flex items-center gap-6 border border-gray-100">
                
                {{-- Home --}}
                <a href="{{ url('/') }}" 
                class="flex items-center gap-2 text-gray-500 hover:text-gray-900 font-medium transition-colors duration-200">
                    <i class="fa-solid fa-house text-sm"></i>
                    <span>Home</span>
                </a>

                {{-- Separador Vertical --}}
                <div class="h-4 w-px bg-gray-300"></div>
                
                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}" 
                class="flex items-center gap-2 text-gray-500 hover:text-gray-900 font-medium transition-colors duration-200">
                    <i class="fa-solid fa-gauge-high text-sm"></i>
                    <span>Dashboard</span>
                </a>

                {{-- Separador Vertical --}}
                <div class="h-4 w-px bg-gray-300"></div>

                {{-- Profile (ACTIVO) --}}
                <a href="{{ route('profile.edit') }}" 
                class="flex items-center gap-2 text-indigo-600 font-bold bg-indigo-50 px-4 py-1.5 rounded-full transition-all">
                    <i class="fa-solid fa-user text-sm"></i>
                    <span>Profile</span>
                </a>

                {{-- Separador Vertical --}}
                <div class="h-4 w-px bg-gray-300"></div>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}" class="m-0 flex items-center">
                    @csrf
                    <button type="submit" 
                            class="flex items-center gap-2 text-gray-500 hover:text-red-600 font-medium transition-colors duration-200 cursor-pointer">
                        <span>Log Out</span>
                        <i class="fa-solid fa-right-from-bracket text-sm"></i>
                    </button>
                </form>

            </nav>
        </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>