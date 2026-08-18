@extends('layouts.app')
@section('title', 'Nuevo Aprendiz')
@section('content')

<h1>Nuevo Aprendiz</h1>

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
        <ul style="margin: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('aprendices.store') }}" method="POST">
    @csrf
    <p>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required>
    </p>
    <p>
        <label>Documento:</label><br>
        <input type="text" name="documento" required>
    </p>
    <p>
        <label>Correo:</label><br>
        <input type="email" name="correo" required>
    </p>
    <p>
        <button type="submit">Guardar</button>
    </p>
</form>

@endsection