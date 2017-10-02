<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Mail\NewTicket;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'delete']);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:4',
            'phone' => 'required|min:5|max:15',
            'checkin' => 'required',
            'checkout' => 'required',
            'adults' => 'required|numeric'
        ]);

        $name = $request->input('name');
        $phone = $request->input('phone');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $adults = $request->input('adults');

        $ticket = new Ticket();
        $ticket->name = $name;
        $ticket->phone = $phone;
        $ticket->checkin = $checkin;
        $ticket->checkout = $checkout;
        $ticket->adults = $adults;
        $ticket->save();

        $users = \App\User::where('notifications', 1)->get();
        foreach($users as $user) {
            \Mail::to($user)->send(new NewTicket($ticket));
        }

        session()->flash('message', 'Thanks so much for reserving room!');

        return redirect('/');
    }

    public function delete(Ticket $ticket)
    {
        $ticket->delete();

        return redirect('/home');
    }
}
