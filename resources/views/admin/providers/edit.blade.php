@extends('templete.main')
@section('title')
Editar Proveedor {{$providers->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.providers.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.providers.create', '+ Nuevo Proveedor',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
         <div class="col-lg-8">

        {!! Form:: open(['route' => ['admin.providers.update',$providers], 'method' => 'PUT']) !!}
              <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', $providers->name, ['class'=>'form-control','placeholder'=>'Nombre del Rol','required'])!!}
              </div>
             <div class="form-group">
                {!!Form::label('rut', 'Rut')!!}
                {!!Form::text('rut',$providers->rut, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
             <div class="form-group">
                {!!Form::label('email', 'Email')!!}
                {!!Form::email('email', $providers->email, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
             <div class="form-group">
                {!!Form::label('email', 'Teléfono')!!}
                {!!Form::text('telephone', $providers->telephone, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('direction', 'Dirección')!!}
                {!!Form::text('direction', $providers->direction, ['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
              </div>
              <!--<div class="form-group">
                {!!Form::label('rols_id', 'Rol')!!}
                {!!Form::text('rols_id', $providers->rols_id, ['class'=>'form-control','required', 'readonly'=>'true'])!!}
              </div>-->
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.providers.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-warning">
                <h4>Editar Proveedor</h4>
                <p>
                    La edición de Proveedor permite corregir errores en la captura de la informacion, o actualizar la información de contacto o ubicación.
                </p>
              </div>
        </div>
@endsection
