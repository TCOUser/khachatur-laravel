<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

@include('includes.messages')

<form action="/addProd" method="post">

    @csrf

    <div>
        Name <input type="text" name="Name">
    </div>
    <div>
        Price <input type="number" name="price">
    </div>
    <div>
        <select name="category_id" id="">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

        </select>
    </div>
    <div>
        <input type="submit" value="Add">
    </div>
</form>
</body>
</html>
