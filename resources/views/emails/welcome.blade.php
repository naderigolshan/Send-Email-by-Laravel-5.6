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
    Hey {{$name}}, Welcome to our website. <br>

    Please click <a href="{!! url('/verify', ['code'=>$verification_code]) !!}"> Here</a> to confirm email
</body>
</html>
