<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:4',
            'phone' => 'required|min:5|max:15',
            'checkin' => 'required',
            'chekout' => 'required',
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

        return redirect('/');
    }
}
