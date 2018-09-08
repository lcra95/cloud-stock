@extends('templete.main')
@section('title')
Listado de Ventas
@endsection
@section('nuevo')

{!!link_to_route('admin.clients.index', '+ Nuevo Venta',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
             <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Fecha</th>
                  <th align="center">Observacion</th>
                  <th align="center">Cliente</th>
                  <th align="center">Sucursal</th>
                  <th align="center"> Venta</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($sales as $sale)    
                <tr>
                  <td>{{$sale->id }}</td>
                  <td>{{$sale->date}}</td>
              
                  <td>{{$sale->observation }}</td>                
                  <td>
                    @foreach($clients as $client)
                      @if($client->id == $sale->clients_id)
                        {{$client->name}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($sucursals as $sucursal)
                      @if($sucursal->id == $sale->sucursals_id)
                        {{$sucursal->name}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($users as $user)
                      @if($user->id == $sale->users_id)
                        {{$user->name}}
                      @endif
                    @endforeach
                  </td>                                 
                  <td align="center">
                    <a href="{{ route('admin.sales.destroy',$sale->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.sales.edit',$sale->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
                  </td>
                </tr>
              @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Fecha</th>

                  <th align="center">Observacion</th>
                  <th align="center">Proveedor</th>
                  <th align="center">Sucursal</th>
                  <th align="center"> Venta</th>
                  <th align="center">Acción</th>
                </tr>
                </tfoot>
              </table>
@endsection