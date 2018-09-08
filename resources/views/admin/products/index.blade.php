@extends('templete.main')
@section('title')
Listado de Productos
@endsection
@section('nuevo')

{!!link_to_route('admin.products.create', '+ Nuevo Producto',null, ['class'=>'badge bg-green'])!!}
@endsection
@section('content')
        
             <table id="example4" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center" width="40%">Nombre</th>
                  <th align="center">Barcode</th>
                  <th align="center">Costo</th>
                  <th align="center" width="3%">Min</th>
                  <th align="center" width="3%">Inv</th>
                  <th align="center">Categoria</th>
                  <th align="center">Marca</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($products as $product)    
                <tr>
                  <td>{{$product->id }}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->barcode}}</td>                  
                  <td>{{$product->cost }}</td>                
                  <td>{{$product->minimun }}</td>
                  <td>{{$product->maximun}}</td>
                  <td>
                    @foreach($categories as $category)
                      @if($category->id == $product->categories_id)
                        {{$category->name}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($brands as $brand)
                      @if($brand->id == $product->brands_id)
                        {{$brand->name}}
                      @endif
                    @endforeach
                  </td>                  
                  <td align="center">
                    <a href="{{ route('admin.products.destroy',$product->id)}}" onclick="return confirm('¿Esta Seguro que Deseas Eliminarlo?')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.products.edit',$product->id)}}" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a></td>
                  </td>
                </tr>
              @endforeach  
                </tbody>
                <tfoot>
                <tr>
                  <th align="center">Id</th>
                  <th align="center" width="40%">Nombre</th>
                  <th align="center">Barcode</th>
                  <th align="center">Costo</th>
                  <th align="center" width="3%">Min</th>
                  <th align="center" width="3%">Inv</th>
                  <th align="center">Categoria</th>
                  <th align="center">Marca</th>
                  <th align="center">Acción</th>
                </tr>
                </tfoot>
              </table>
@endsection