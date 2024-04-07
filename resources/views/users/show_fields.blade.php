<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Role Id Field -->
<div class="col-sm-12">
    {!! Form::label('role_id', 'Rol Id:') !!}
    <p>{{ $user->role_id }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Número de teléfono:') !!}
    <p>{{ $user->phone_number }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Correo:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Correo verificado en:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Contraseña:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Recordar Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

