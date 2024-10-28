<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    @if($messages['negrita'] == true && $messages['subrayado'] == true)
                        <li><b><u>{{ $message->text }}</u></b></li>
                    @elseif($messages['negrita'] == false && $messages['subrayado'] == true)
                        <li><u>{{ $message->text }}</u></li>
                    @elseif($messages['negrita'] == true && $messages['subrayado'] == false)
                        <li><b>{{ $message->text }}</b></li>
                    @else
                        <li>{{ $message->text }}</li>
                    @endif
                    <li><a href="/editar-mensaje/{{$message['id']}}">Editar mensaje</a></li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>