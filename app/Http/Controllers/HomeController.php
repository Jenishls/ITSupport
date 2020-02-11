<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\User;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Ticket::where('status','<>','Closed')->get();
        return view('dashboard',compact('datas'));
    }

    public function createUser(){
        return view('user.create');
    }

    public function listUser(){
        $lists = User::all();
        return view('user.list',compact('lists'));
    }

    public function storeUser(Request $request){
        dd($request->toArray());
        User::create([
            'branch_code' => $request->branch_code,
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'designation' => $request->designation,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/user/list');
    }

    public function editUser(User $user){
        return view('user.edit',compact('user'));
    }

    public function updateUser(Request $request){
        // dd($request->toArray());
        User::where('id',$request->id)
            ->update([
            'branch_code' => $request->branch_code,
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'designation' => $request->designation,
        ]);
        return redirect('/user/list');
    }

    public function resetPassword(Request $request){
        // dd($request->toArray());
        User::where('id',$request->id)
            ->update([
            'password' => Hash::make('password'),
        ]);
        return redirect('/user/list');
    }
}
