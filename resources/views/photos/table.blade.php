<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="photos-table">
            <thead>
            <tr>
                <th>Usuario Id</th>
                <th>Detalles de la imagen Id</th>
                <th>Url</th>
                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photos)
                <tr>
                    <td>{{ $photos->user_id }}</td>
                    <td>{{ $photos->photo_details_id }}</td>
                    <td>{{ $photos->url }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['photos.destroy', $photos->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('photos.show', [$photos->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('photos.edit', [$photos->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $photos])
        </div>
    </div>
</div>
