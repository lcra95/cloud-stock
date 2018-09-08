@extends('templete.main')
@section('title')
Nuevo Delivery
@endsection
@section('nuevo')
{!!link_to_route('admin.deliveries.create', '+ Nuevo Delivery',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.deliveries.store', 'mothod'=>'POST']) !!}
               <div class="form-group">
                {!!Form::label('Observacion', 'Dirección de Envío')!!}
                {!!Form::text('observation', null, ['class'=>'form-control','placeholder'=>'Agrega un Dirección'])!!}
               </div>
               <div class="form-group">
                {!!Form::label('venta', 'Id Venta')!!}
                {!!Form::text('sales_id', null, ['class'=>'form-control','placeholder'=>'Número de Documento'])!!}
               </div>  
               <div class="form-group">
                {!!Form::label('fecha', 'Fecha')!!}
                {!!Form::text('date', date('Y-m-d'), ['class'=>'form-control','required', 'id'=>'datepicker'])!!}
               </div>             
            <div class="form-group">
                {!!link_to_route('admin.deliveries.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
            
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}
            </div>    
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Delivery</h4>
                <p>
                    La creación de deliveries permite limitar las funciones a las que puede acceder un usuario en particular
                </p>
              </div>
        </div>
@endsection