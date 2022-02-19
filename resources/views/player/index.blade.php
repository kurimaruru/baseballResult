<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <div>
    <nav class="navbar navbar-expand navbar-dark blue-gradient">
      @auth

      @endauth
    </nav>
  </div>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @if ($player->player_id !== null)
          <div class="w-1/2 p-4">
            <div class="border rounded-md p-4">
              <div class="mb-4">
                <p>{{$player->name}}</p>
                <p>{{$player->position}}</p>
                <p>{{$player->throw}}</p>
                <p>{{$player->hitting}}</p>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>


</x-app-layout>
