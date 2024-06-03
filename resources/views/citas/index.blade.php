@extends('layouts.app')

@section('title', 'Citas')

@section('content')
    <h1>Listado de Citas</h1>
    @if ($citas->isEmpty())
        <p>No hay citas registradas.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha y Hora</th>
                    <th>Descripción</th>
                    <th>Empleado</th>
                    <th>Cliente</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th> <!-- Nueva columna para las acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr>
                        <td>{{ $cita->cita_id }}</td>
                        <td>{{ $cita->fecha_hora }}</td>
                        <td>{{ $cita->descripcion }}</td>
                        <td>{{ $cita->empleado_id }}</td>
                        <td>{{ $cita->cliente_id }}</td>
                        <td>{{ $cita->fecha_registro }}</td>
                        <td>
                            <!-- Formulario para eliminar la cita -->
                            <form action="{{ route('citas.destroy', $cita->cita_id) }}" method="POST" style="display: inline-block;">
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

        <!-- Formulario para editar citas -->
        <h2>Editar Citas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha y Hora</th>
                    <th>Descripción</th>
                    <th>Empleado</th>
                    <th>Cliente</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr>
                        <form action="{{ route('citas.update', $cita->cita_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="cita_id" value="{{ $cita->cita_id }}">
                            <td>{{ $cita->cita_id }}</td>
                            <td><input type="datetime-local" name="fecha_hora" value="{{ date('Y-m-d\TH:i', strtotime($cita->fecha_hora)) }}"></td>
                            <td><input type="text" name="descripcion" value="{{ $cita->descripcion }}"></td>
                            <td><input type="number" name="empleado_id" value="{{ $cita->empleado_id }}"></td>
                            <td><input type="number" name="cliente_id" value="{{ $cita->cliente_id }}"></td>
                            <td>{{ $cita->fecha_registro }}</td>
                            <td><button type="submit" class="btn btn-success">Guardar</button></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
