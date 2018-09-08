@extends('templete.main')
@section('title')
Listado de Sucuarsales
@endsection
@section('nuevo')

{!!link_to_route('admin.sucursals.create', '+ Nuevo Sucursal',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
             <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Nombre</th>
                  <th align="center">Contacto</th>
                  <th align="center">SII</th>                   
                  <th align="center">Email</th>
                  <th align="center">Teléfono</th>
                  <th align="center">Dirección</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($sucursals as $sucursal)    
                <tr>
                  <td>{{$sucursal->id }}</td>
                  <td>{{$sucursal->name}}</td>
                  <td>{{$sucursal->contact}}</td>                  
                  <td>{{$sucursal->siicode}}</td>                  
                  <td>{{$sucursal->email }}</td>
                  <td>{{$sucursal->telephone}}</td>
                  <td>{{$sucursal->direction}}</td>

                  <td align="center">
                    <a href="{{ route('admin.sucursals.destroy',$sucursal->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.sucursals.edit',$sucursal->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
                  </td>
                </tr>
              @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Nombre</th>
                  <th align="center">Rut</th>                   
                  <th align="center">Email</th>
                  <th align="center">Teléfono</th>
                  <th align="center">Dirección</th>                                  
                  <th align="center">Acción</th>
                </tr>
                </tfoot>
              </table>
@endsection