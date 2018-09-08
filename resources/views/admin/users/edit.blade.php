@extends('templete.main')
@section('title')
Editar Usuario {{$users->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.users.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.users.create', '+ Nuevo Usuario',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
         <div class="col-lg-8">

        {!! Form:: open(['route' => ['admin.users.update',$users], 'method' => 'PUT']) !!}
              <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', $users->name, ['class'=>'form-control','placeholder'=>'Nombre del Rol','required'])!!}
              </div>
             <!-- <div class="form-group">
                {!!Form::label('email', 'Email')!!}
                {!!Form::email('email', $users->email, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required', 'readonly'=>'true'])!!}
              </div>-->
             <!-- <div class="form-group">
                {!!Form::label('password', 'Password')!!}
                {!!Form::email('password', bcrypt($users->password), ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required', 'readonly'=>'true'])!!}
              </div>-->
              <div class="form-group">
                {!!Form::label('telephone', 'Teléfono')!!}
                {!!Form::text('telephone', $users->telephone, ['class'=>'form-control','placeholder'=>'+56 X XXXX XXXX','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('direction', 'Dirección')!!}
                {!!Form::text('direction', $users->direction, ['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
              </div>
              <!--<div class="form-group">
                {!!Form::label('rols_id', 'Rol')!!}
                {!!Form::text('rols_id', $users->rols_id, ['class'=>'form-control','required', 'readonly'=>'true'])!!}
              </div>-->
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.users.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-warning">
                <h4>Editar Usuario</h4>
                <p>
                    La edición de usuario permite corregir errores en la captura de la informacion, o actualizar la información de contacto o ubicación.
                </p>
              </div>
        </div>
@endsection
