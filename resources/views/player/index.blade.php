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
                <table>
                  <thead>
                    <th>編集</th>
                    <th>名前</th>
                    <th>画像</th>
                    <th>ポジション</th>
                    <th>投</th>
                    <th>打</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="{{route('player.edit',['player'=>$player->id])}}">編集</a></td>
                      <td>{{$player->name}}</td>
                      <td>
                        @php
                        $path = 'storage/images/';
                        @endphp
                        @if (empty($player->image))
                        <img src="{{asset('images/noimage.png')}}" alt="image" style="height: 200px;width:200px;">
                        @else
                        <img src="{{asset($path . $player->image)}}" alt="image" style="height: 200px;width:200px;">
                        @endif
                      </td>
                      <td>{{$player->position}}</td>
                      <td>{{$player->throw}}</td>
                      <td>{{$player->hitting}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>


</x-app-layout>
