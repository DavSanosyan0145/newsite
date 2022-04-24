<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toarray();
        return view('admin/users/index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users/create');
        
    }

    /**
     * Store a newly created resource in storage.   
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
       $data['usertype'] = $request->input('usertype');
        $data['password'] = $request->input('password');
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'usertype' => $data['usertype'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('users');

        
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
         $user = User::find($id)->toarray();
        return view('admin/users/edit',['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $id = $request->input('id');
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
       $data['usertype'] = $request->input('usertype');
        $data['password'] = $request->input('password');

        User::find($id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'usertype' => $data['usertype'],

            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(User::destroy($id)){
            return redirect()->route('users');
        }

    }
}
