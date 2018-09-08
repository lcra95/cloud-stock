@extends('templete.main')
@section('title')
Listado de roles
@endsection
@section('nuevo')
{!!link_to_route('admin.roles.create', '+ Nuevo menu',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center" width="60%">Nombre</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($roles as $rol)    
                <tr>
                  <td>{{$rol->id }}</td>
                  <td>{{$rol->name}}</td>
                  <td align="center">
<a href="#" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-success"><i class="fa fa-bars"></i></a>
<a href="{{ route('admin.roles.destroy',$rol->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
<a href="{{ route('admin.roles.edit',$rol->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>


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