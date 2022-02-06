<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{

    function index(){
        $team = DB::table('teams')->get();
        return view('team',compact('team'));
    }

    function create(){
        return view('teamCreate');
    }

    function store(TeamRequest $request,Team $team){
        $team->admin_id = auth()->id();
        $team->team_name = $request->team_name;
        $team->homepage = $request->homepage;
        $team->save();
        return redirect()->route('team.index');
    }

}
