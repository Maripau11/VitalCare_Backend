<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Usuario Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Photo Details Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_details_id', 'Detalle de la imagen Id:') !!}
    {!! Form::number('photo_details_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>