@extends('layouts.app')

@section('title', 'Minerales')

@section('content')
    <h1>Listado de Minerales</h1>
    @if ($minerales->isEmpty())
        <p>No hay minerales registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fórmula</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Sistema</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($minerales as $mineral)
                    <tr>
                        <td>{{ $mineral->id }}</td>
                        <td>{{ $mineral->formula }}</td>
                        <td>{{ $mineral->categoria }}</td>
                        <td>{{ $mineral->descripcion }}</td>
                        <td>{{ $mineral->sistema }}</td>
                        <td>{{ $mineral->fecha_registro }}</td>
                        <td>
                            <form action="{{ route('mineral.destroy', $mineral->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        <h2>Editar Minerales</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fórmula</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Sistema</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($minerales as $mineral)
                    <tr>
                        <form action="{{ route('mineral.update', $mineral->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $mineral->id }}">
                            <td>{{ $mineral->id }}</td>
                            <td><input type="text" name="formula" value="{{ $mineral->formula }}"></td>
                            <td><input type="text" name="categoria" value="{{ $mineral->categoria }}"></td>
                            <td><input type="text" name="descripcion" value="{{ $mineral->descripcion }}"></td>
                            <td><input type="text" name="sistema" value="{{ $mineral->sistema }}"></td>
                            <td>{{ $mineral->fecha_registro }}</td>
                            <td><button type="submit" class="btn btn-success">Guardar</button></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
