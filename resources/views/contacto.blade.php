@extends ('layout')
@section ('title','Contacto')
@section ('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>
        Contacto
    </h1>
    <p>Página de contacto</p>
    @if (session('status'))
    <div class="alert alert-success">
        {{sesion('status')}}
    </div>
    @endif
       <form action="/contacto" method="POST"> <!--si no le ponemos la action va a tratar de mandar a contacto un post y como post no tengo dará error-->
        @csrt
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input
        type="text"
        class="form-control"
        id="Nombre"
        placeholder="ingrese un nombre"
        name="Nombre"
        />
    </div>
    <div class="mb-3">
        <label for="Asunto" class="form-label">Asunto</label>
        <input
        type="text"
        class="form-control"
        id="Asunto"
        placeholder="Asunto"
        name="Asunto"
        />
    </div>
    <div class="mb-3">
        <label for="Mensaje" class="form-label"> Mensaje </label>
        <textarea
            class="form-control"
            id="Mensaje"
            rows="3"
            name="Mensaje"
        ></textarea>
    </div>
    
        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
    </form>

</div>
@endsection