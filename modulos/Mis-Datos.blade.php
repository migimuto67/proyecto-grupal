@extends('plantilla')
@section('content')
<div class="content-wrapper">
<section class="content-header">
<h1>Mis Datos</h1>
</section>
<section class="content">
 
    <div class="box">
        <div class="box-body">
            <form method="post">
 			@csrf
                  @method('put')
 
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                    <h2>Nombre y Apellido</h2>
                    <input type="text" class="input-lg" name="name"
                    value="{{auth()->user()->name}}">
                    <h2>Email</h2>
                    <input type="email" class="input-lg" name="email"
                    value="{{auth()->user()->email}}">
                    @error('email')
                    <p class="alert alert-danger">El email ya existe</p>
 
                    @enderror
                    <h2>Nueva contraseña</h2>
                    <input type="texto" class="input-lg" name="password"
                    value="">
 
                    </div>
                    <div class="col-md-6 col-xs-12">
                    <h2>Documento</h2>
                    <input type="text" class="input-lg" name="documento"
                    value="{{auth()->user()->documento}}">
 
                    <h2>Telefono</h2>
                    <input type="texto" class="input-lg" name="telefono"
                    value="{{auth()->user()->telefono}}">
                    <br><br><br>
                    <button type="submit" class="btn btn-success">Guardar</button>
 
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
 
@endsection
