@extends('templete.main')
@section('title')
Listado de Compras
@endsection
@section('nuevo')

{!!link_to_route('admin.purchases.create', '+ Nueva Compra',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
             <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Fecha</th>
                  <th align="center">Factura</th>
                  <th align="center">Observacion</th>
                  <th align="center">Proveedor</th>
                  <th align="center">Sucursal</th>
                  <th align="center">Compra</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($purchases as $purchase)    
                <tr>
                  <td>{{$purchase->id }}</td>
                  <td>{{$purchase->date}}</td>
                  <td>{{$purchase->document}}</td>                  
                  <td>{{$purchase->observation }}</td>                
                  <td>
                    @foreach($providers as $provider)
                      @if($provider->id == $purchase->providers_id)
                        {{$provider->name}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($sucursals as $sucursal)
                      @if($sucursal->id == $purchase->sucursals_id)
                        {{$sucursal->name}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($users as $user)
                      @if($user->id == $purchase->users_id)
                        {{$user->name}}
                      @endif
                    @endforeach
                  </td>                                 
                  <td align="center">
                    <a href="{{ route('admin.purchases.destroy',$purchase->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.purchases.edit',$purchase->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
                  </td>
                </tr>
              @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Fecha</th>
                  <th align="center">Factura</th>
                  <th align="center">Observacion</th>
                  <th align="center">Proveedor</th>
                  <th align="center">Sucursal</th>
                  <th align="center">Compra</th>
                  <th align="center">Acción</th>
                </tr>
                </tfoot>
              </table>
@endsection