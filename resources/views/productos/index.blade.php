@extends('layout')
@section ('title','Todos los productos')
@section ('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>Productos</h1>
    <p>{{$titulo}}</p>    <!-- las dobles llaves me permiten escribir php, por lo tanto llamar a una variable php como en este caso-->
  
    <a class="btn btn=primary mb-4" href="{{route ('productos.create')}}">Crear Producto</a>  
    @if (session('status'))
    <div class="alert alert-success">
        {{sesion('status')}}
    </div>
    @endif
    
    <div class="row">
    @foreach ($productos as $titulo)
         <div class="col col-md-3 mb-4">
         <div class="card">
         <div class="card-body">
            <h5 class="card-title">{{$productos->Nombre}}</h5>
            <p class="card-text">{{$productos->Descripcion}}</p>
            <h3 class="card-text">{{$productos->Precio}}</h3>
         </div>
        <div class="card-footer d-flex justify-content-around">
            <a href="#" class="btn btn-secondary">Editar</a>
            <form action="">
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </div>
    </div>
</div>
         
@endforeach
     </div>
</div>
@endsection