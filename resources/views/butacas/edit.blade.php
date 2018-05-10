@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Butacas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($butacas, ['route' => ['butacas.update', $butacas->id], 'method' => 'patch']) !!}

                        @include('butacas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection