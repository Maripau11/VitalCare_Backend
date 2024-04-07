@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">¡Sea Bienvenido!</h1>
    </div>


<div class="card-deck mt-3">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://impulso06.com/wp-content/uploads/2023/02/Roles-en-un-equipo-de-trabajo-1024x1024.png" alt="Roles Icono">
        <div class="card-body">
            <a href="{{ route('rols.index') }}" class="btn btn-success btn-lg {{ Request::is('rols*') ? 'active' : '' }}">
                Roles
            </a>
            <p class="card-text">Administración de roles existentes</p>  
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://media.istockphoto.com/id/516877373/es/vector/los-usuarios-icono-plana.jpg?s=612x612&w=0&k=20&c=feUnGCVC-y5pHFUxcU2coHqbg8rkH0j_1AnXTRFYT8o=" alt="Usuarios Icono">
        <div class="card-body">
            <a href="{{ route('users.index') }}" class="nbtn btn-success btn-lg  {{ Request::is('users*') ? 'active' : '' }}">
                Usuarios
            </a>
            <p class="card-text">Administración de usuarios existentes</p>  
        </div>
    </div>
</div> 


<div class="card-deck mt-3">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.primeraedicion.com.ar/wp-content/uploads/2020/10/visualizar-18-10-2020-ss.jpg" alt="Imágenes Icono">
        <div class="card-body">
            <a href="{{ route('photos.index') }}" class="nnbtn btn-success btn-lg  {{ Request::is('photos*') ? 'active' : '' }}">
                Imágenes
            </a>
            <p class="card-text">Visualizar la información de las imágenes</p>  
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://img.freepik.com/fotos-premium/hackeo-ubicacion-computadoras-pantalla-holograma-ciberseguridad-software-tecnologia-futurista-oficina-superposicion-proteccion-datos-tecnologia-panel-mapa-realidad-virtual-e-informacion-satelital_590464-214940.jpg" alt="Dealle de Imagen Icono">
        <div class="card-body">
            <a href="{{ route('photoDetails.index') }}" class="nnbtn btn-success btn-lg  {{ Request::is('photoDetails*') ? 'active' : '' }}">
                Detalle de la Imagen
            </a>
            <p class="card-text">Visualizar datos a profundidad de las imágenes</p>  
        </div>
    </div>
</div>    


@endsection
