<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-house-user"></i>
        <p>Inicio</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-address-card"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-user-secret"></i>
        <p>Usuarios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photos.index') }}" class="nav-link {{ Request::is('photos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-images"></i>
        <p>Imágenes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photoDetails.index') }}" class="nav-link {{ Request::is('photoDetails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-door-open"></i>
        <p>Detalles de Imagen</p>
    </a>
</li>




