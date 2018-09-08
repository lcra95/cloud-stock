@extends('templete.main')
@section('title')
Listado de Usuarios
@endsection
@section('nuevo')

{!!link_to_route('admin.users.create', '+ Nuevo Usuario',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
             <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Nombre</th>
                  <th align="center">Email</th>
                  <th align="center">Teléfono</th>
                  <th align="center">Rol</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($users as $user)    
                <tr>
                  <td>{{$user->id }}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email }}</td>
                  <td>{{$user->telephone}}</td>
                  <td>
                    @foreach($roles as $rol)
                      @if($rol->id == $user->rols_id)
                        {{$rol->name}}
                      @endif
                    @endforeach
                      </td>
                  <td align="center">
                    <a href="{{ route('admin.users.destroy',$user->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.users.edit',$user->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
                  </td>
                </tr>
              @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Nombre</th>
                  <th align="center">Email</th>
                  <th align="center">Teléfono</th>
                  <th align="center">Rol</th>                  
                  <th align="center">Acción</th>
                </tr>
                </tfoot>
              </table>
@endsection