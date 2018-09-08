@extends('templete.main')
@section('title')
Listado de Proveedores
@endsection
@section('nuevo')

{!!link_to_route('admin.providers.create', '+ Nuevo Proveedor',null, ['class'=>'badge bg-green'])!!}
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
                  <th align="center">Dirección</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($providers as $provider)    
                <tr>
                  <td>{{$provider->id }}</td>
                  <td>{{$provider->name}}</td>
                  <td>{{$provider->rut}}</td>                  
                  <td>{{$provider->email }}</td>
                  <td>{{$provider->telephone}}</td>
                  <td>{{$provider->direction}}</td>

                  <td align="center">
                    <a href="{{ route('admin.providers.destroy',$provider->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.providers.edit',$provider->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
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