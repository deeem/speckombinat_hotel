@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tickets</div>

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
                                    <td><a href="/ticket/delete/{{ $ticket->id }}" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No new tickets</h4>
                    @endif

                </div><!-- panel-body -->
            </div><!-- panel -->
        </div><!-- col -->

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>notifications</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->notifications)
                                            <i class="fa fa-check-square-o"></i>
                                        @else
                                            <i class="fa fa-square-o"></i>
                                        @endif
                                    </td>
                                    <td><a href="/home/user/{{ $user->id }}"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- panel-body -->

            </div><!-- panel -->
        </div><!-- col -->

    </div>
</div>
@endsection
