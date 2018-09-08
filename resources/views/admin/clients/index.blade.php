@extends('templete.main')
@section('title')
Listado de Clientes
@endsection

@yield("{!!link_to_route('admin.clients.create', '+ Nuevo Cliente',null, ['class'=>'badge bg-green'])!!}")
@section('nuevo')

{!!link_to_route('admin.clients.create', '+ Nuevo Cliente',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
             <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>               
                  <th align="center">Id</th>
                  <th align="center">Nombre</th>
                  <th align="center">Rut</th>                   
                  <th align="center">Email</th>
                  <th align="center">Teléfono</th>
                  <th align="center">Creado</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($clients as $client)    
                <tr>

                  <td>{{$client->id }}</td>
                  <td>{{$client->name}}</td>
                  <td>{{$client->rut}}</td>                  
                  <td>{{$client->email }}</td>
                  <td>{{$client->telephone}}</td>
                  <td>{{$client->created_at }}</td>
                  <td align="center">
                    <a href="{{ route('admin.sales.create',$client->id)}}" class="btn-sm btn-success"><i class="fa fa-cart-plus "></i></a>
                    <a href="{{ route('admin.clients.destroy',$client->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.clients.edit',$client->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
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