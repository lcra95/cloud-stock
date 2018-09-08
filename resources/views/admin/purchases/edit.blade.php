@extends('templete.main')
@section('title')
Editar Compra {{$purchases->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.purchases.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.purchases.create', '+ Nuevo Compra',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
         <div class="col-lg-8">

        {!! Form:: open(['route' => ['admin.purchases.update',$purchases], 'method' => 'PUT']) !!}
              <div class="form-group">
                {!!Form::label('name', 'Date')!!}
                {!!Form::text('date', $purchases->date, ['class'=>'form-control','required', 'id'=>'datepicker'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('barcode', 'Factura')!!}
                {!!Form::text('document', $purchases->document, ['class'=>'form-control','placeholder'=>'Número de Documento','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('minimun', 'Observacion')!!}
                {!!Form::text('observation', $purchases->observation, ['class'=>'form-control','placeholder'=>'Observaciones','required'])!!}
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
              <div class="callout callout-warning">
                <h4>Editar Compra</h4>
                <p>
                    La edición de Compra permite corregir errores en la captura de la informacion, o actualizar la información de contacto o ubicación.
                </p>
              </div>
        </div>
@endsection
