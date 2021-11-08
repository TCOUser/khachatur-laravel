@extends('app.master')
@section('title' , 'Login')
@section('content')
    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
    @endif

    @if(Session::has('success'))
        <div style="display: flex; justify-content: center">
            {{Session::get('success')}}
        </div>
        <div style="display: flex; justify-content: right">
            <a href="{{route('products.list')}}" style="text-decoration: none">Go to Products-list</a>
        </div>
        <div style="display: flex; justify-content: right">
            <a href="{{route('users.list')}}" style="text-decoration: none">Go to Users-list</a>
        </div>
        <div style="display: flex; justify-content: right">
            <a href="{{route('products')}}" style="text-decoration: none">Go to Add Products</a>
        </div>
        <div style="display: flex; justify-content: right">
            <a href="{{route('cars-list')}}" style="text-decoration: none">Go to Cars list</a>
        </div>
        <div style="display: flex; justify-content: right">
            <a href="{{route('cars')}}" style="text-decoration: none">Go to Cars</a>
        </div>
{{--        <div style="display: flex; justify-content: right">--}}
{{--            <a href="{{route('files')}}" style="text-decoration: none">Go to Files</a>--}}
{{--        </div>--}}
        <br>
    @endif
    <a href="sign-up" style="justify-content: flex-start; margin-left: 20px; text-decoration: none">Go to sign up</a>
    <form action="/login" method="POST" style="display: flex;justify-content: right;">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Your Email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Your Password">
        </div>
        <div>
            <input type="submit" value="LOG IN">
        </div>
    </form>

@endsection
