<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = \DB::table('tickets')->get();
        $users = \DB::table('users')->get();

        return view('home', compact('tickets', 'users'));
    }

    public function show($user_id)
    {
        $user = \App\User::find($user_id);

        return view('user', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id' => 'required|numeric'
        ]);

        $user = \App\User::find($request->input('id'));
        $notifications = $request->input('notifications');

        if ($notifications === 'on') {
            $user->notifications = true;
        } else {
            $user->notifications = false;
        }

        $user->save();

        return redirect('/home');
    }
}
