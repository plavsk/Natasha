<!DOCTYPE html>
<html>
<head>
    <link href="/sass/news_line.css" rel="stylesheet">
    <title>Лента новостей</title>
</head>
<body>
<div class="container">
    <nav>
        <ul class="menu">
            <li><a href="{{route('direct')}}">Главная</a></li>
            <li><a href="{{route('about')}}">О нас</a></li>
            <li><a href="{{route('contacts')}}">Контакты</a></li>
        </ul>
    </nav>
    <header>
        <div class="header">
            <h1>Лента новостей</h1>
        </div>
    </header>
    <div class="main">
        <h3>{{$news}}</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
    </div>
    <footer>
        <div class="footer">
            <p>&copy Все права защищены Федорякова Наталья 2020</p>
        </div>
    </footer>
</div>
</body>
</html>
