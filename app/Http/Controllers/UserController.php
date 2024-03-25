<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\EditUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('users.index', ["users"=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        DB::table('users')->insert([
            "username" => $request->username,
            "password" => $request->password,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('users.edit', ["user"=> $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditUserRequest $request, string $id)
    {
        DB::table('users')->where('id', $id)->update([
            "username" => $request->username,
            "password" => $request->password,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
