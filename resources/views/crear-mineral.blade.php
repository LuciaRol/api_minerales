@extends('layouts.app')

@section('title', 'Crear mineral')

@section('content')
    <h1 class="form-title">Crear mineral</h1>
    <form action="{{ route('guardar-mineral') }}" method="POST" class="mineral-form">
        @csrf <!-- Directiva de Blade para protección CSRF -->

        <!-- Campos del formulario -->
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="formula" class="form-label">Fórmula:</label>
            <input type="text" id="formula" name="formula" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="categoria" class="form-label">Categoría:</label>
            <input type="text" id="categoria" name="categoria" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-textarea" required></textarea>
        </div>
        <div class="form-group">
            <label for="sistema" class="form-label">Sistema:</label>
            <input type="text" id="sistema" name="sistema" class="form-input" required>
        </div>

        <!-- Botón de enviar -->
        <button type="submit" class="btn btn-submit">Crear Mineral</button>
    </form>
@endsection
