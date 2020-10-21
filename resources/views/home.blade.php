@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  MENU
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('menu/sistemas')}}">Sistemas</a>
                <a class="dropdown-item" href="{{url('menu/websites')}}">Websites</a>
                  <a class="dropdown-item" href="{{url('menu/app')}}">Aplicativos</a>
                  <a class="dropdown-item" href="{{url('menu/ecommerce')}}">E-commerce</a>
                  <a class="dropdown-item" href="{{url('menu/marketing')}}">Marketing Digital</a>

                </div>
              </div>
            <div class="card">

                <div class="card-header"><a href="{{url('usuarios/new')}}">Novo usuario</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1> Seja Bem Vindo</h1>
                    <a href="{{ url('usuarios')}}">Lista dos Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
