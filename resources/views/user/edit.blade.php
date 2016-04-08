@extends('layouts.app')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        </br><input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
        </br><input type="text" class="form-control" name="fullname" value="{{ Auth::user()->fullname }}">
        </br><input type="date" class="form-control" name="bday" value="{{ Auth::user()->bday }}">
        </br><input type="file" name="image" id="file">
        </br><input type="hidden" value="{{ csrf_token() }}" name="_token">
        </br><input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
        </br><input type="password" class="form-control" name="password">
        </br><input type="submit" name="save">
    </form>
@endsection