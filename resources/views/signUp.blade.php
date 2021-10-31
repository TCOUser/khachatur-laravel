@extends('app.master')

@section('title', 'Sign Up')

@section('content')

    @include('includes.messages')

    <form action="/signUp" method="post">
        @csrf

        <div>
            name <input type="text" name="name">
        </div>
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

    </body>
    </html>

@endsection
