<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mensajerecibido;
use GuzzleHttp\Psr7\Message;

class messController extends Controller
{
    public function store()
    {
       $msg = request ()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'contenido' => 'required',
       ],
    );
    Mail::to('mr_romerom@unicah.edu')->queue(new mensajerecibido($msg));
     return new mensajerecibido($msg);
     return 'Mensaje enviado';
    }

}
