@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
  
body {
    font-family: "Lato", sans-serif;
}

.registre{
    color:grey;
}

.btn-secondary{
    background-color: #083D77;
    border-color: transparent;
}

.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #083D77;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 0%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 15%;
    }

    .register-form{
        margin-top: 0%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}

</style>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Ajuntament de <b>Reus</b><br> Editar Evento </h2>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form class='registre' method="POST" action="{{ route('evento.update', $evento)}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$evento->nombre}}" placeholder='{{$evento->nombre}}' default='{{$evento->nombre}}'  required autocomplete="nombre"  autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fecha" class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>

                            <div class="col-md-6">
                                <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{$evento->fecha}}" required placeholder='{{$evento->fecha}}' default='{{$evento->fecha}}' autocomplete="fecha" autofocus>

                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hora" class="col-md-4 col-form-label text-md-end">{{ __('Hora') }}</label>

                            <div class="col-md-6">
                                <input id="hora" type="time" class="form-control @error('hora') is-invalid @enderror" name="hora" value="{{$evento->hora}}" placeholder='{{$evento->hora}}' default='{{$evento->hora}}' required autocomplete="hora" autofocus>

                                @error('hora')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{$evento->descripcion}}" placeholder='{{$evento->descripcion}}' default='{{$evento->descripcion}}' required autocomplete="descripcion" autofocus>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="precio" class="col-md-4 col-form-label text-md-end">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" step="0.00" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{$evento->precio}}" placeholder='{{$evento->precio}}'  autocomplete="precio" default='{{$evento->precio}}' autofocus>

                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="aforo" class="col-md-4 col-form-label text-md-end">{{ __('Aforo') }}</label>

                            <div class="col-md-6">
                                <input id="aforo" type="number" class="form-control @error('aforo') is-invalid @enderror" name="aforo" value="{{$evento->aforo}}" placeholder='{{$evento->aforo}}' required autocomplete="aforo" default='{{$evento->aforo}}' autofocus>

                                @error('aforo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Update Event') }}
                                </button>
                            </div>
                        </div>

                    </form>

                    <br>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{route('evento.table')}}"><button class="btn btn-secondary">
                                {{ __('Back to Events Dashboard') }}
                            </button></a>
                        </div>
                    </div>
            </div>
         </div>
      </div>
@endsection