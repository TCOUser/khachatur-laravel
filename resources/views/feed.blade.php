@extends('app.master')

@section('title', 'Login')

@section('content')



@include('includes.messages')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
<h1>Hello {{Auth::user()->name}}</h1>
</div>
@foreach($products as $product)
    <div>
        <ul>
            <li>{{$product->name}}</li>
            <li>{{$product->price}}</li>

        </ul>
    </div>

@endforeach

<form action ="/logout" method = "post">
    @csrf
    <input type ="submit" value ="Logout">

</form>


</body>
</html>
