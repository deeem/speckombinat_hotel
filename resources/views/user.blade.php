@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/home/user/store">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="form-group">
                            <label for="name" class="col-sm-5">Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-5">Email</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-7">
                                <div class="checkbox">
                                    <label>
                                        @if($user->notifications)
                                            <input type="checkbox" name="notifications" checked> Notify me
                                        @else
                                            <input type="checkbox" name="notifications"> Notify me
                                        @endif
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <a class="btn btn-danger" href="#">delete</a>
                    </form>
                </div><!-- panel-body -->
            </div><!-- panel -->
        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->
@endsection
