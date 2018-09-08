@extends('templete.main')
@section('title')
Roles
@endsection
@section('nuevo')
{!!link_to_route('admin.roles.create', '+ Nuevo Rol',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.roles.store', 'mothod'=>'POST']) !!}
            <div class="form-group">
              {!!Form::label('name', 'Nombre')!!}
              {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre del Rol','required'])!!}
              <br>
            </div>
            <div class="form-group">
                {!!link_to_route('admin.roles.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
            
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}
            </div>    
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Roles de Usuario</h4>
                <p>
                    La creación de roles permite limitar las funciones a las que puede acceder un usuario en particular
                </p>
              </div>
        </div>
@endsection