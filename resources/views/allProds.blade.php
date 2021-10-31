<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All products</title>
</head>
<body>
@if(Session::has('success'))
    <div>
        {{Session::get('success')}}
    </div>
@endif

<h1>All products list</h1>

@foreach($prods as $prod)
    <div>
        <ul>
            <li>{{$prod->name}}</li>
            <li>{{$prod->price}}</li>
        </ul>
    </div>

@endforeach

</body>
</html>
