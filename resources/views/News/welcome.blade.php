<!DOCTYPE html>
<html>
<head>
    <link href="news_line.css" rel="stylesheet">
    <title>Лента новостей</title>
</head>
<body>
<div class="container">
    <nav>
        <ul class="menu">
            <li><a href="">Главная</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="">Контакты</a></li>
        </ul>
    </nav>
    <header>
        <div class="header">
            <h1>Лента новостей</h1>
        </div>
    </header>
    <div class="main">
        <p>Добро пожаловать!</p>
        <p>Очень рады, что вы выбрали нашу "Ленту новостей".</p>
        <p>Здесь вы найдете самые свежие новости!</p>
        @foreach($news as $key => $value)
            <p><a href="{{route('news', ['id' => $key])}}">{{$key}}-{{$value}}</a></p>>
        @endforeach
    </div>
    <footer>
        <div class="footer">
            <p>&copy Все права защищены Федорякова Наталья 2020</p>
        </div>
    </footer>
</div>
</body>
</html>
