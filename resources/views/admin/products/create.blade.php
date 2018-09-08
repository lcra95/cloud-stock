@extends('templete.main')
@section('title')
Nuevo Producto
@endsection
@section('nuevo')
{!!link_to_route('admin.products.index', 'Volver al Index',null, ['class'=>'badge bg-red'])!!}
{!!link_to_route('admin.products.create', '+ Nuevo Producto',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

          {!! Form::open(['route'=>'admin.products.store', 'mothod'=>'POST']) !!}
              <div class="form-group">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre del Producto','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('barcode', 'Barcode')!!}
                {!!Form::text('barcode', null, ['class'=>'form-control','placeholder'=>'Código de Barras','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('minimun', 'Mínimo')!!}
                {!!Form::text('minimun', null, ['class'=>'form-control','placeholder'=>'Mínimo Permitido en Almacen','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('maximo', 'Máximo')!!}
                {!!Form::text('maximun', null, ['class'=>'form-control','placeholder'=>'Máximo Permitido en Almacen','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('cost', 'Costo')!!}
                {!!Form::text('cost', null, ['class'=>'form-control','placeholder'=>'Costo Promedio','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::label('location', 'Locación')!!}
                {!!Form::text('location', null, ['class'=>'form-control','placeholder'=>'Ubicacion en Almacen','required'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('categories_id', 'Categoria') !!}
                {!!Form::select('categories_id',$categories,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('brand', 'Marca') !!}
                {!!Form::select('brands_id',$brands,null,['class'=>'form-control', 'placeholder'=>'Seleccione una Opción','required'])!!}
              </div>
              <div class="form-group">
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}

                {!!link_to_route('admin.products.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
              </div>
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>
        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Crear Usuario</h4>
                <p>
                    Los usuarios son todas las personas que tendran acceso a la información almacenada en este sistemas.</p>
                <p>
                  Antes de crear un usuario asegurate de haber creado un Rol para el y haber seleccionado las opciones de menú que podra vizualizar
                </p>
              </div>
        </div>
@endsection