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
<form action="/sign-up" method="POST">
    @csrf
    <input type="name" name="name" placeholder="product Name">
    <input type="number" name="price" placeholder="product Price">
{{--    <input type="email" name="email" placeholder="Your Email">--}}
{{--    <input type="password" name="password" placeholder="Your Password">--}}
    <input type="submit" value="SIGN UP">
</form>
</body>
</html>

