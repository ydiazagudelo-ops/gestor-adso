@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">Lista de Aprendices</h1>

        <a href="{{ route('aprendices.create') }}" class="btn btn-primary mb-3">Crear nuevo aprendiz</a>

        @if (session('ok'))
            <div class="alert alert-success">
                {{ session('ok') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Ficha</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($aprendices as $aprendiz)
                    <tr>
                        <td>{{ $aprendiz->id }}</td>
                        <td>{{ $aprendiz->nombre }}</td>
                        <td>{{ $aprendiz->documento }}</td>
                        <td>{{ $aprendiz->correo }}</td>
                        <td>{{ $aprendiz->ficha_id ?? 'Sin asignar' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay aprendices registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Controles de paginación --}}
        <div class="mt-3">
            {{ $aprendices->links() }}
        </div>
    </div>
@endsection