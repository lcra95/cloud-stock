@extends('templete.main')
@section('title')
Nuevo Almacén
@endsection
@section('nuevo')
{!!link_to_route('admin.wharehouses.create', '+ Nuevo Almacén',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.wharehouses.store', 'mothod'=>'POST']) !!}
            <div class="form-group">
              {!!Form::label('name', 'Nombre')!!}
              {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre del Menú','required'])!!}
            </div>
              <div class="form-group">
                {!! Form::label('sucursals_id', 'Sucursal') !!}
                {!!Form::select('sucursals_id',$sucursals,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
            <div class="form-group">
                {!!link_to_route('admin.wharehouses.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
            
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}
            </div>    
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Menú</h4>
                <p>
                    La creación de wharehouses permite limitar las funciones a las que puede acceder un usuario en particular
                </p>
              </div>
        </div>
@endsection