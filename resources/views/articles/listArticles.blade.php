<?php
<html>
    <head>
        <title>List Articles</title>
    </head>
    <body>
        <div style = "margin-left:15px;">
            @foreach ($articles as $key => $value)
                <p><a href = "{{route('article', ['id' => $key])}}" >
                        {{$key}} - {{$value}}
                    </a></p>
            @endforeach
        </div>
    </body>
</html>
?>
