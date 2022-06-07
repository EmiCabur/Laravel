<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Mensajes;

class PageController extends Controller
{
    public function home (){
        //return 'Hola Hermosa'; //estos return me devuelven solo un texto en este caso, por lo que es una web estática
        return view('home'); //estos retunr me devuelven una vusta, pestaña
    }
    public function quienessomos(){
        //return 'quienes somos';
        return view('quienessomos');

    }
    public function contacto(){
        //return 'contacto';
        return view('contacto');

    }
    public function storeMensaje(){
        $mensaje = Mensajes::create([
            'nombre'=> request()->nombre,
            'asunto'=> request()->asunto,
            'mensaje'=> request()->mensaje,

        ]);
        return redirect('/contacto')->with ('status', 'Se envio tu mensaje te responderemos a la brevedad');
    }
}
