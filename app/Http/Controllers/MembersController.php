<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MemberRequest;
use App\Models\Members;

class MembersController extends Controller
{
    function index(){
        $members = DB::table('members')->get();
        return view('members',compact('members'));
    }

    function create(){
        return view('memberCreate');
    }

    function store(MemberRequest $request){
        $members = new Members();
        $members->admin_id = auth()->id();
        $members->name = $request->name;
        $members->back_number = $request->back_number;
        $members->position = $request->position;
        $members->dominant = $request->dominant;
        $members->role = $request->role;
        $members->save();
        return redirect()->route('members.index');

    }
}
