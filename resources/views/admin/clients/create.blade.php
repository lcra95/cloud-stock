@extends('templete.main')
@section('title')
Nuevo Cliente
@endsection
@section('nuevo')
{!!link_to_route('admin.clients.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.clients.create', '+ Nuevo Cliente',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.clients.store', 'mothod'=>'POST']) !!}
               <div class="form-group">
                {!!Form::label('email', 'Rut')!!}
                {!!Form::text('rut', null, ['class'=>'form-control','placeholder'=>'01234567-8','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre del Proveedor','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('email', 'Email')!!}
                {!!Form::email('email', null, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('telephone', 'Teléfono')!!}
                {!!Form::text('telephone', null, ['class'=>'form-control','placeholder'=>'+56 X XXXX XXXX'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('direction', 'Dirección')!!}
                {!!Form::text('direction', null, ['class'=>'form-control','placeholder'=>'Dirección'])!!}
              </div>
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.clients.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>
        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Cliente</h4>
                <p>
                    Los Clientes son todas las personas que tendran acceso a la información almacenada en este sistemas.</p>
                <p>
                  Antes de crear un Cliente asegurate de haber creado un Rol para el y haber seleccionado las opciones de menú que podra vizualizar
                </p>
              </div>
        </div>
@endsection