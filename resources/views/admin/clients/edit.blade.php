@extends('templete.main')
@section('title')
Editar Cliente {{$clients->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.clients.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.clients.create', '+ Nuevo Cliente',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
         <div class="col-lg-8">

        {!! Form:: open(['route' => ['admin.clients.update',$clients], 'method' => 'PUT']) !!}
              <div class="form-group">
                {!!Form::label('rut', 'Rut')!!}
                {!!Form::text('rut',$clients->rut, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', $clients->name, ['class'=>'form-control','placeholder'=>'Nombre del Rol','required'])!!}
              </div>

             <div class="form-group">
                {!!Form::label('email', 'Email')!!}
                {!!Form::email('email', $clients->email, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
             <div class="form-group">
                {!!Form::label('email', 'Teléfono')!!}
                {!!Form::text('telephone', $clients->telephone, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('direction', 'Dirección')!!}
                {!!Form::text('direction', $clients->direction, ['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
              </div>
              <!--<div class="form-group">
                {!!Form::label('rols_id', 'Rol')!!}
                {!!Form::text('rols_id', $clients->rols_id, ['class'=>'form-control','required', 'readonly'=>'true'])!!}
              </div>-->
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.clients.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-warning">
                <h4>Editar Cliente</h4>
                <p>
                    La edición de Cliente permite corregir errores en la captura de la informacion, o actualizar la información de contacto o ubicación.
                </p>
              </div>
        </div>
@endsection
