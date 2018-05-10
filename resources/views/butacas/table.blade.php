<table class="table table-responsive" id="butacas-table">
    <thead>
        <tr>
            <th>Fila</th>
        <th>Columna</th>
        <th>Observacion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($butacas as $butacas)
        <tr>
            <td>{!! $butacas->fila !!}</td>
            <td>{!! $butacas->columna !!}</td>
            <td>{!! $butacas->observacion !!}</td>
            <td>
                {!! Form::open(['route' => ['butacas.destroy', $butacas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('butacas.show', [$butacas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('butacas.edit', [$butacas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>