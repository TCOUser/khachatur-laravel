@extends('app.master')

@section('title', 'LoginProd')

@section('content')



    @include('includes.messages')

    <form action="/loginProd" method="post">

        @csrf

        <div>
            email <input type="email" name="email">
        </div>
        <div>
            password <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>

    <div>
        Copyright {{ $date }}
    </div>

    <div>
        <a href="{{route('user.signup')}}">Sign Up</a>
    </div>

    @if($status)
        <button>Create</button>
    @endif

@endsection
