@extends('templete.main')
@section('title')
Nueva Sucursal
@endsection
@section('nuevo')
{!!link_to_route('admin.sucursals.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.sucursals.create', '+ Nueva Sucursal',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.sucursals.store', 'mothod'=>'POST']) !!}
              <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre de la Sucursal','required'])!!}
              </div>
               <div class="form-group">
                {!!Form::label('email', 'Contacto')!!}
                {!!Form::text('contact', null, ['class'=>'form-control','placeholder'=>'Persona Encargada','required'])!!}
              </div>
               <div class="form-group">
                {!!Form::label('email', 'Código')!!}
                {!!Form::text('siicode', null, ['class'=>'form-control','placeholder'=>'Código SII','required'])!!}
              </div>              
              <div class="form-group">
                {!!Form::label('email', 'Email')!!}
                {!!Form::email('email', null, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('telephone', 'Teléfono')!!}
                {!!Form::text('telephone', null, ['class'=>'form-control','placeholder'=>'+56 X XXXX XXXX','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('direction', 'Dirección')!!}
                {!!Form::text('direction', null, ['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.sucursals.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>
        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Sucursal</h4>
                <p>
                    Los Sucursals son todas las personas que tendran acceso a la información almacenada en este sistemas.</p>
                <p>
                  Antes de crear un Sucursal asegurate de haber creado un Rol para el y haber seleccionado las opciones de menú que podra vizualizar
                </p>
              </div>
        </div>
@endsection