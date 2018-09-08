@extends('templete.main')
@section('title')
Listado de Almacenes
@endsection
@section('nuevo')
{!!link_to_route('admin.wharehouses.create', '+ Nuevo Almacén',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center" width="60%">Nombre</th>
                  <th align="center">Sucursal</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($wharehouses as $wharehouse)    
                <tr>
                  <td>{{$wharehouse->id }}</td>
                  <td>{{$wharehouse->name}}</td>
                  <td>
                    @foreach($sucursals as $sucursal)
                      @if($sucursal->id == $wharehouse->sucursals_id)
                        {{$sucursal->name}}
                      @endif
                    @endforeach
                      </td>                  
                  <td align="center">
<a href="{{ route('admin.wharehouses.destroy',$wharehouse->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
<a href="{{ route('admin.wharehouses.edit',$wharehouse->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>


                  </td>
                </tr>
              @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Nombre</th>
                  <th align="center">Acción</th>
                </tr>
                </tfoot>
              </table>

@endsection