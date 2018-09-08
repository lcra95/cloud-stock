@extends('templete.main')
@section('title')
Editar Rol {{$roles->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.roles.create', '+ Nuevo Rol',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">
          
        {!! Form:: open(['route' => ['admin.roles.update',$roles], 'method' => 'PUT']) !!}
            <div class="form-grop">
              {!!Form::label('name', 'Nombre')!!}
              {!!Form::text('name', $roles->name, ['class'=>'form-control','placeholder'=>'Nombre del Rol','required'])!!}
              <br>
            </div>
            @section('foot')
                {!!link_to_route('admin.roles.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
            
                {!!Form::submit('Editar',['class'=>'btn btn-info pull-right'])!!}
            @endsection
            <!-- /.box-body -->
          {!! Form::close() !!}  
          
        </div>
        <div class="col-lg-4">
              <div class="callout callout-warning">
                <h4>Editar Roles de Usuario</h4>
                <p>
                    La edición de roles permite asignar un nombre mas adaptado a laidentidad del rol
                </p>
              </div>
        </div>
@endsection