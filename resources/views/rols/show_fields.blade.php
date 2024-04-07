<!-- Name Field -->
<div class="col-sm-12">
    @if ($rol->users->isNotEmpty())
    <h4>Usuarios con este rol: </h4>
    <ul>
        @foreach ($rol->users as $user)
        <li><a href="../users/{{ $user->id}}">{{ $user->name }}</a>
        </li>
        @endforeach
    </ul>
    @else
        <p>No hay usuarios con este rol</p>
    @endif
</div>

