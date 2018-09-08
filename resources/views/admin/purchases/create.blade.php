@extends('templete.main')
@section('title')
Nueva Compra
@endsection
@section('nuevo')
{!!link_to_route('admin.purchases.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.purchases.create', '+ Nueva Compra',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.purchases.store', 'mothod'=>'POST']) !!}
              <div class="form-group">
                {!!Form::label('name', 'Date')!!}
                {!!Form::text('date', null, ['class'=>'form-control','required', 'id'=>'datepicker'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('barcode', 'Factura')!!}
                {!!Form::text('document', null, ['class'=>'form-control','placeholder'=>'Número de Documento','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('minimun', 'Observacion')!!}
                {!!Form::text('observation', null, ['class'=>'form-control','placeholder'=>'Observaciones','required'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('categories_id', 'Proveedor') !!}
                {!!Form::select('providers_id',$providers,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('brand', 'Sucursal') !!}
                {!!Form::select('sucursals_id',$sucursals,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('brand', 'Compra') !!}
                {!!Form::select('users_id',$users,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.purchases.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>
        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Compra</h4>
                <p>
                    Los Compras son todas las personas que tendran acceso a la información almacenada en este sistemas.</p>
                <p>
                  Antes de crear un Compra asegurate de haber creado un Rol para el y haber seleccionado las opciones de menú que podra vizualizar
                </p>
              </div>
        </div>
@endsection
