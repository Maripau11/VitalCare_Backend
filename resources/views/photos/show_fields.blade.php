<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $photos->user_id }}</p>
</div>

<!-- Photo Details Id Field -->
<div class="col-sm-12">
    {!! Form::label('photo_details_id', 'Photo Details Id:') !!}
    <p>{{ $photos->photo_details_id }}</p>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $photos->url }}</p>
</div>

