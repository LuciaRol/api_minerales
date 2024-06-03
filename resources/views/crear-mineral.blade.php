@extends('layouts.app')

@section('title', 'Crear mineral')

@section('content')
    <h1>Crear mineral</h1>
    <form action="{{ route('guardar-mineral') }}" method="POST">
        @csrf <!-- Directiva de Blade para protección CSRF -->

        <!-- Campos del formulario -->
        <div>
            <label for="formula">Fórmula:</label>
            <input type="text" id="formula" name="formula" required>
        </div>
        <div>
            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <label for="sistema">Sistema:</label>
            <input type="text" id="sistema" name="sistema" required>
        </div>

        <!-- Botón de enviar -->
        <button type="submit">Crear Mineral</button>
    </form>
@endsection
