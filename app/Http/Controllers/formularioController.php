<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Valor;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function mensajeEditable($id)
    {
        $message = Message::findOrFail($id);
        $valores = Valor::orderBy('id') ->get()->toArray();
        return view('edicionMensaje', ['message' => $message,'id' => $id, 'valores' => $valores]);
    }

    public function editarMensaje(Request $request)
    {
        if(!isset($request->text)){
            $errores['text'] = 'Este campo no puede estar vacío';
        }

        if(!isset($request->negrita)){
            $errores['negrita'] = 'Este campo no puede estar vacío';
        }else if($request->negrita != true || $request->negrita != false){
            $errores['negrita']="El valor introducido debe ser booleano";
        };

        if(!isset($request->subrayado)){
            $errores['subrayado'] = 'Este campo no puede estar vacío';
        }else if($request->subrayado != true || $request->subrayado != false){
            $errores['subrayado']="El valor introducido debe ser booleano";
        };

        if(count($errores) > 0){
            return view('edicionMensaje', ['errores' => $errores, 'request' => $request, 'valores'=>$valores]);
        }

        $text = $request->text;
        $negrita = $request->negrita;
        $subrayado = $request->subrayado;

        $message = Message::findOrFail($id);
        $message->text = $text;
        $message->negrita = $negrita;
        $message->subrayado = $subrayado;

        $message->save();
    
        return Redirect::to('/messages'); 
    }
}
