@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <a href="{{url('home') }}">Voltar</a></div>
            <div class="card">



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1> Aqui ficará a Lista de Sites</h1>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
