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
<form action="/gumarum" method="post">
    @csrf

    <input type="number" name="numberOne" placeholder="numberOne">
    <input type="number" name="numberTwo" placeholder="numberTwe">
    <input type="submit" value="SIGN UP">
</form>

</body>
</html>
