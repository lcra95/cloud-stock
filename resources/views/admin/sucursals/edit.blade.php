@extends('templete.main')
@section('title')
Editar Sucursal {{$sucursals->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.sucursals.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.sucursals.create', '+ Nuevo Sucursal',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
         <div class="col-lg-8">

        {!! Form:: open(['route' => ['admin.sucursals.update',$sucursals], 'method' => 'PUT']) !!}
       <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', $sucursals->name, ['class'=>'form-control','placeholder'=>'Nombre de la Sucursal','required'])!!}
              </div>
               <div class="form-group">
                {!!Form::label('email', 'Contacto')!!}
                {!!Form::text('contact', $sucursals->contact, ['class'=>'form-control','placeholder'=>'Persona Encargada','required'])!!}
              </div>
               <div class="form-group">
                {!!Form::label('email', 'Código')!!}
                {!!Form::text('siicode', $sucursals->siicode, ['class'=>'form-control','placeholder'=>'Código SII','required'])!!}
              </div>              
              <div class="form-group">
                {!!Form::label('email', 'Email')!!}
                {!!Form::email('email', $sucursals->email, ['class'=>'form-control','placeholder'=>'ejemplo@ejemplo.com','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('telephone', 'Teléfono')!!}
                {!!Form::text('telephone', $sucursals->telephone, ['class'=>'form-control','placeholder'=>'+56 X XXXX XXXX','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('direction', 'Dirección')!!}
                {!!Form::text('direction', $sucursals->direction, ['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
              </div>

              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.sucursals.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-warning">
                <h4>Editar Sucursal</h4>
                <p>
                    La edición de Sucursal permite corregir errores en la captura de la informacion, o actualizar la información de contacto o ubicación.
                </p>
              </div>
        </div>
@endsection
