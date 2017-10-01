@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if(count($tickets))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>period</th>
                                    <th>adults</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->name }}</td>
                                    <td>{{ $ticket->phone }}</td>
                                    <td>{{ $ticket->checkin }} - {{ $ticket->checkout }}</td>
                                    <td>{{ $ticket->adults }}</td>
                                    <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No new tickets</h4>
                    @endif

                    <ul>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
