<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Api Rest</title>
        <style>
            .info{
                margin: 30px;
                text-decoration-line:inherit;
            }
        </style>
    </head>
    <body>
        <div class="main">
            @foreach($response as $post)
                <div class="info">
                    <b>#:</b> {{ $post->id }} <br>
                    <b>ID Usuario:</b>{{ $post->userId }}<br>
                    <b>Titulo:</b> {{ $post->title }}<br>
                    <b>Descripcion:</b> {{ $post->body }}
                </div>
                <hr>
            @endforeach
        </div>
    </body>
</html>
