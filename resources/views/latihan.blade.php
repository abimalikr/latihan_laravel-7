<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan.blade.php</title>
</head>
<body>
    <p>
        {{$panggil}}
    </p>


    <p>
        {!!$panggil!!}
    </p>


    <p>
        {{ nl2br($panggil) }}
    </p>


    <p>
        {!! nl2br($panggil)!!}
    </p>

</body>
</html>

