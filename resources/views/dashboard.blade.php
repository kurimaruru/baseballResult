<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <nav class="navbar navbar-expand navbar-dark blue-gradient">
            @auth
            <a href="{{route('player.create')}}"
                class="px-2 py-1 bg-blue-400 text-xs text-black font-semibold rounded hover:bg-blue-500">プロフィールを作成する</a>
            <a href="{{route('player.index')}}"
                class="px-2 py-1 bg-blue-400 text-xs text-black font-semibold rounded hover:bg-blue-500">プロフィール</a>
            @endauth
        </nav>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Login
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
