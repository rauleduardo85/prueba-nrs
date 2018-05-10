<table class="table table-responsive" id="usuarios-table">
    <thead>
        <tr>
            <th>Nombres</th>
        <th>Apellidos</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuarios)
        <tr>
            <td>{!! $usuarios->nombres !!}</td>
            <td>{!! $usuarios->apellidos !!}</td>
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.show', [$usuarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuarios.edit', [$usuarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>