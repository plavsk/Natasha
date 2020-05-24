<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<div style="margin-left: 15px;">
    @foreach ($testCont as $key => $value)
        <p><a href="">{{$key}} - {{$value}}
            </a></p>
    @endforeach
</div>
</body>
</html>

