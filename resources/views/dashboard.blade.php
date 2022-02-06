<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <nav class="navbar navbar-expand navbar-dark blue-gradient">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('members.create') }}">選手登録する</a>
                <a href="{{route('team.create')}}">チームを登録する</a>
                {{--この行のhref属性を変更--}}
            </li>
            @endauth
        </nav>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
