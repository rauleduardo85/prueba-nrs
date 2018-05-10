<!-- Fila Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fila', 'Fila:') !!}
    {!! Form::number('fila', null, ['class' => 'form-control', 'min' => 1]) !!}
</div>

<!-- Columna Field -->
<div class="form-group col-sm-6">
    {!! Form::label('columna', 'Columna:') !!}
    {!! Form::number('columna', null, ['class' => 'form-control', 'min' => 1]) !!}
</div>

<!-- Disponible Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('disponible', 'disponible:') !!}
    {!! Form::checkbox('disponible', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('butacas.index') !!}" class="btn btn-default">Cancel</a>
</div>
