@extends('app.master')

@section('content')




    <form action="/users" method="POST" style="display: flex;justify-content: right;">
        @method('put')
        @csrf
        <div>
            <input type="name" name="name" value="{{$user->name}}">
        </div>
        <div>
            <input type="email" name="email" value="{{$user->email}}">
        </div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Update">
        </div>
    </form>

@endsection
