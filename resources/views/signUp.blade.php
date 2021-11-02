@extends('app.master')


@section('content')

    @include('includes.messages')

    <form action="/signUp" method="post" class="form-control" enctype = "multipart/form-data">
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
            file <input type="file" name="img">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>

    </body>
    </html>

@endsection
