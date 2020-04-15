@extends('layout')

@section('title','Home')
@section('content')

<div class="container">
    <div class="row"></div>
    <div class="col-12 col-lg-6">
        <h1 class="display-4 text-primary">Desarrollo Web</h1>
        @auth
            {{auth()->user()->name}}
        @endauth
        <p class="lead text-secondary"> Este es un Sistema Web de Pruebas</p>
        <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contactame</a>
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a>
        </div>
        <div class="div-12 col-lg-6">
            <img class="img-fluid mb-4" src="/home.svg" alt="Desarrollo Web">
        </div>
    </div>
    </div>



@endsection
