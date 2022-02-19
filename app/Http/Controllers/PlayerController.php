<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PlayerRequest;
use Illuminate\Support\Facades\Log;
use Throwable;
use App\Models\player;
use App\Services\ImageService;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = DB::table('players')->find(Auth::id());
        if($player !== null){
            return view('player.index',compact('player'));
        }else{
            return view('player.create',compact('player'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('player.create',compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request)
    {

        try{

            DB::transaction(function() use($request){
            $imageFile = $request->file('image');
            $imageToStore = ImageService::upload($imageFile,'images');
            player::create([
            'player_id'=>Auth::id(),
            'name' => $request->name,
            'image' => $imageToStore,
            'position' => $request->position,
            'throw' => $request->throw,
            'hitting' => $request->hitting,
            ]);
            },2);
        }catch(Throwable $e){
            Log::error($e);
            throw $e;
        }



        return redirect()->route('player.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = DB::table('players')->find($id);
        return view('player.edit',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerRequest $request, $id)
    {
        $imageFile = $request->file('image');
        $imageToStore = ImageService::upload($imageFile,'images');
        $player = player::findOrFail($id);
        $player->name = $request->name;
        $player->image = $imageToStore;
        $player->position = $request->position;
        $player->throw = $request->throw;
        $player->hitting = $request->hitting;
        $player->save();
        return redirect()->route('player.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
