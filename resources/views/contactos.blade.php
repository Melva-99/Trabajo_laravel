@extends('plantilla')
@section('titulo', 'Contactos')
@section('Contenido')
    <h1>Contacto</h1>
    <form method="POST" action={{route('contactos')}}>
        @csrf
        <input name="fullname" placeholder="Nombre" value='{{old('fullname')}}'><br>
        {!!$errors->first('fullname', '<small>:message</small><br>')!!}
        <input type="email" name="email" placeholder="Email" value='{{old('email')}}'><br>
        {!!$errors->first('email', '<small>:message</small><br>')!!}
        <input name="subject" placeholder="Asunto" value='{{old('subject')}}'><br>
        {!!$errors->first('subject', '<small>:message</small><br>')!!}
        <textarea name="contenido" placeholder="Mensaje" value='{{old('contenido')}}'></textarea><br>
        {!!$errors->first('contenido', '<small>:message</small><br>')!!}
        <button>Enviar</button>
    </form>
@endsection
