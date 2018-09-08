@extends('templete.main')
@section('title')
Editar Marca {{$brands->name}}
@endsection
@section('nuevo')
{!!link_to_route('admin.brands.create', '+ Nueva Marca',null, ['class'=>'badge bg-green'])!!}

@endsection
@section('content')
         <div class="col-lg-8">

        {!! Form:: open(['route' => ['admin.brands.update',$brands], 'method' => 'PUT']) !!}
            <div class="form-group">
              {!!Form::label('name', 'Nombre')!!}
              {!!Form::text('name', $brands->name, ['class'=>'form-control','placeholder'=>'Nombre de la Marca','required'])!!}
              <br>
            </div>
            <div class="form-group">
                {!!link_to_route('admin.brands.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
            
                {!!Form::submit('Guardar',['class'=>'btn btn-info pull-right'])!!}
            </div>    
            <!-- /.box-body -->
          {!! Form::close() !!}  
         </div>

        <div class="col-lg-4">
              <div class="callout callout-info">
                <h4>Editar Marca</h4>
                <p>
                    La creación de brands permite limitar las funciones a las que puede acceder un usuario en particular
                </p>
              </div>
        </div>
@endsection