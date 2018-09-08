@extends('templete.main')
@section('title')
Listado de Categorias
@endsection
@section('nuevo')
{!!link_to_route('admin.categories.create', '+ Nueva Categoria',null, ['class'=>'badge bg-green'])!!}
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
              @foreach($categories as $category)    
                <tr>
                  <td>{{$category->id }}</td>
                  <td>{{$category->name}}</td>
                  <td align="center">
<a href="{{ route('admin.categories.destroy',$category->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
<a href="{{ route('admin.categories.edit',$category->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>


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