<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div ul li {
        color: greenyellow;
        font-family: sans-serif;
        font-size: 24px;
    }
</style>
<body style="background-color: bisque;"
>

<h1 style="text-align: center; color: black; font-family: sans-serif; font-size: 48px"><p style="font-family:Algerian";>ALL PRODUCT LIST</p></h1>

@foreach($products as $value)
    <div>
        <ul style="list-style: none;border:3px solid black;border-radius: 15px;border-width: 7px;margin-left:250px;margin-right: 250px">
            <li><p style="font-family:Algerian;color: black;text-align: center;">Product --> [{{$value->product}}]</p></li>
            <li><p style="font-family:Algerian;color: black;text-align: center;">Price --> [{{$value->price}}]</p></li>
            <li><p style="font-family:Algerian;color: black;text-align: center;">[{{$value->created_at}}]</p></li>
        </ul>
    </div>
@endforeach
</body>
</html>
