@extends('templete.main')
@section('title')
Nuevo Venta
@endsection
@section('nuevo')
{!!link_to_route('admin.sales.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.sales.create', '+ Nuevo Venta',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.sales.store', 'mothod'=>'POST']) !!}
               <div class="form-group">
                {!!Form::label('clients_rut', 'Rut Cliente')!!}
                {!!Form::text('clients_rut', $clients->rut, ['class'=>'form-control','placeholder'=>'Número de Documento','disabled'])!!}
              </div>

                {!!Form::hidden('clients_id', $clients->id, ['class'=>'form-control','placeholder'=>'Número de Documento','readonly'])!!}

              <div class="form-group">
                {!!Form::label('minimun', 'Nombre Cliente')!!}
                {!!Form::text('clients_name', $clients->name, ['class'=>'form-control','placeholder'=>'Observaciones','disabled'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('name', 'Date')!!}
                {!!Form::text('date', date('Y-m-d'), ['class'=>'form-control','required', 'id'=>'datepicker'])!!}
                
              </div>
               <div class="form-group">
                {!!Form::label('minimun', 'Observaciones')!!}
                {!!Form::text('observation', null, ['class'=>'form-control','placeholder'=>'Observaciones','required'])!!}
              </div>

              <div class="form-group">
                {!! Form::label('brand', 'Sucursal') !!}
                {!!Form::select('sucursals_id',$sucursals,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('brand', 'Venta') !!}
                {!!Form::select('users_id',$users,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.sales.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>
        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Venta</h4>
                <p>
                    Los Ventas son todas las personas que tendran acceso a la información almacenada en este sistemas.</p>
                <p>
                  Antes de crear un Venta asegurate de haber creado un Rol para el y haber seleccionado las opciones de menú que podra vizualizar
                </p>
              </div>
        </div>
@endsection
