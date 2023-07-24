<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('id') && $request->id){
            $updateData = $request->validate([
                'name' => 'required|max:255',
                'email' => "required|unique:users,email,{$request->id}|max:255",
                'last_name' =>'required|max:255',
                'password' => 'nullable|confirmed|max:255',
            ]);
            if(!$updateData['password'])
                unset($updateData['password']);
            User::whereId($request->id)->update($updateData);
            return  redirect()->route('users.index')->with('success', 'User has been updated');
        }
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'last_name' =>'required|max:255',
            'password' => 'required|confirmed|max:255',
        ]);
        $User = User::create($storeData);
        return redirect()->route('users.index')->with('success', 'User has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.create', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User has been deleted');
    }
}
