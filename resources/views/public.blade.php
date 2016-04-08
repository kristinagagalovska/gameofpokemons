@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{route('user.edit', Auth::user()->id)}}">Edit Profile</a>
                </div>
                <div class="panel-body">
                    @if(Auth::user()->admin==1)
                    <a href="{{route('admin', Auth::user()->id)}}">Admin</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
