@extends('layouts.app')

@section('title', 'Minerales')

@section('content')
    <div class="listado">
    <h1 class="minerals-title">Listado de Minerales</h1>
    @if ($minerales->isEmpty())
        <p class="no-minerals">No hay minerales registrados.</p>
    @else
        <table class="minerals-table">
            <thead>
                <tr>
                    <th class="table-heading">ID</th>
                    <th class="table-heading">Nombre</th>
                    <th class="table-heading">Fórmula</th>
                    <th class="table-heading">Categoría</th>
                    <th class="table-heading">Descripción</th>
                    <th class="table-heading">Sistema</th>
                    <th class="table-heading">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($minerales as $mineral)
                    <tr class="mineral-row">
                        <td class="table-data">{{ $mineral->id }}</td>
                        <td class="table-data">{{ $mineral->nombre }}</td>
                        <td class="table-data">{{ $mineral->formula }}</td>
                        <td class="table-data">{{ $mineral->categoria }}</td>
                        <td class="table-data">{{ $mineral->descripcion }}</td>
                        <td class="table-data">{{ $mineral->sistema }}</td>
                        @auth
                        <td class="table-data">
                            <form action="{{ route('mineral.destroy', $mineral->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr class="separator">

        @auth
        <h2 class="edit-title">Editar Minerales</h2>
        <table class="edit-minerals-table">
            <thead>
                <tr>
                    <th class="table-heading">ID</th>
                    <th class="table-heading">Nombre</th>
                    <th class="table-heading">Fórmula</th>
                    <th class="table-heading">Categoría</th>
                    <th class="table-heading">Descripción</th>
                    <th class="table-heading">Sistema</th>
                    <th class="table-heading">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($minerales as $mineral)
                    <tr class="edit-mineral-row">
                        <form action="{{ route('mineral.update', $mineral->id) }}" method="POST" class="edit-form">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $mineral->id }}">
                            <td class="table-data">{{ $mineral->id }}</td>
                            <td class="table-data"><input type="text" name="nombre" value="{{ $mineral->nombre }}" class="input-field"></td>
                            <td class="table-data"><input type="text" name="formula" value="{{ $mineral->formula }}" class="input-field"></td>
                            <td class="table-data"><input type="text" name="categoria" value="{{ $mineral->categoria }}" class="input-field"></td>
                            <td class="table-data"><input type="text" name="descripcion" value="{{ $mineral->descripcion }}" class="input-field"></td>
                            <td class="table-data"><input type="text" name="sistema" value="{{ $mineral->sistema }}" class="input-field"></td>
                            <td class="table-data">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endauth
    @endif
@endsection


    </div>