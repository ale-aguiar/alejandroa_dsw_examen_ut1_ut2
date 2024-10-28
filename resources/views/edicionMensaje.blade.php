<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de mensaje</title>
</head>
<body>
        @if(isset($errores) && $errores > 0 && isset($errores['text']))
            <span>{{$errores['text']}}</span>
        @endif
        @if(isset($errores) && $errores > 0 && isset($errores['negrita']))
            <span>{{$errores['negrita']}}</span>
        @endif
        @if(isset($errores) && $errores > 0 && isset($errores['subrayado']))
            <span>{{$errores['subrayado']}}</span>
        @endif
        <form action="/editar-mensaje/{id}" method="POST">
            @csrf
            @if(isset($id))
                <input type="hidden" id="id" name="id" value="{{$id}}">
            @endif
            <p>
                <label for="text">Texto</label>
                <input type="text" id="text" name="text" @if(isset($id))value="{{$message['text']}}"@endif>
            </p>
            <p>
                <label for="negrita">Negrita</label>
                <select id="negrita" name="negrita">
                        @if(isset($valores))
                            @foreach($valores as $valor)
                                <option id="{{$valor['valor']}}" name="{{$valor['valor']}}" value="{{$valor['valor']}}" @if($valor['valor'] === $message->negrita) selected @endif>{{$valor['valor']}}</option>
                            @endforeach
                        @endif
                </select>
            </p>
            <p>
                <label for="subrayado">Subrayado</label>
                <select id="subrayado" name="subrayado">
                        @if(isset($valores))
                            @foreach($valores as $valor)
                                <option id="{{$valor['valor']}}" name="{{$valor['valor']}}" value="{{$valor['valor']}}" @if($valor['valor'] === $message->subrayado) selected @endif>{{$valor['valor']}}</option>
                            @endforeach
                        @endif
                </select>
            </p>
            <input type="submit" value="Enviar">
            <br>
            <input type="reset" value="Restablecer">
        </form>
    </div>
</body>
</html>