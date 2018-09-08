@extends('templete.main')
@section('title')
Listado de Deliveries
@endsection
@section('nuevo')
{!!link_to_route('admin.deliveries.create', '+ Nuevo delivery',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Venta Id</th>
                  <th align="center" width="50%">Dirección</th>
                  <th align="center">fecha</th>
                  <th align="center">status</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($deliveries as $delivery)    
                <tr>
                  <td>{{$delivery->id }}</td>
                  <td>{{$delivery->sales_id }}</td>
                  <td>{{$delivery->observation }}</td>
                  <td>{{$delivery->date}}</td>
                  <td>{{$delivery->status}}</td>
                  <td align="center">
<a href="{{ route('admin.deliveries.destroy',$delivery->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
<a href="{{ route('admin.deliveries.edit',$delivery->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>


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