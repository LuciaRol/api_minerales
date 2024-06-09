@extends('layouts.app')

@section('title', 'Bienvenida')

@section('content')
        <div class="landing">
            <img src="{{ asset('img/celestina.jpg') }}" alt="" class="background-image">
            <div class="content">
                <h2>mineralAPI</h2>
                <h3>A quién no le va a gustar</h3>
                <p>Tu API de minerales</p>
                
            </div>
        </div>
@endsection
