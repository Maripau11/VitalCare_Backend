@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        Editar Imágenes
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($photos, ['route' => ['photos.update', $photos->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('photos.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('photos.index') }}" class="btn btn-default"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection