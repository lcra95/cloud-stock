@extends('templete.main')
@section('title')
Agregar Productos
@endsection
@section('nuevo')

@endsection
@section('content')
        <div class="col-lg-12">
        <form method="post" action="{{route('admin.sales.nuevo')}}">
                    <div class="input-group">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="sales_id" value="{{$sales->id}}">
                      <input type="text" class="form-control" name="barcode" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                      </span>
                    </div>
          </form>

          <table id="example3" class="table table-bordered table-striped table-responsive">
          @if($nprods != null)
          @foreach($nprods as $nprod)
          <tr>{!! Form::open(['route'=>'admin.sales.saveproducts', 'mothod'=>'POST']) !!}
                  <td>
                    <input type="hidden" name="sales_id"  class="form-control" value="{{$sales->id}}">
                    <input type="hidden" name="products_id"  class="form-control" value="{{$nprod->id}}">{{$nprod->id}}
                  </td>

                  <td>{{$nprod->barcode}}</td>  
                  <td>{{$nprod->name}}</td>
                  <td><input type="text" name="quantity" placeholder="Cant" size="5" value="1" class="form-control"></td>
                  <td><input type="text" name="price" size="10" class="form-control" value="{{$nprod->cost }}" ></td>                
                  <td>
                    @foreach($brands as $brand)
                      @if($brand->id == $nprod->brands_id)
                        {{$brand->name}}
                      @endif
                    @endforeach
                  </td>                  
                  <td align="center">
                    <button class="btn-sm btn-success"><i class="fa fa-check"></i></button>
                   </td>
           {!! Form::close() !!}</tr>
          @endforeach
          @endif
          </table>
 
        </div>
        <div class="col-lg-8">

          <table id="example3" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th align="center">Id</th>
                  <th align="center">Producto</th>
                  <th align="center">Cant</th>
                  <th align="center">Precio</th>
                  <th align="center">Iva</th>                  
                  <th align="center">Total</th>
                  <th align="center">Acción</th>
                </tr>
                </thead>
                <tbody>
              @foreach($product_sales as $product_sale)    
              <tr>
                  <td align="center">{{$product_sale->id}}</td>
                  <td >
                    @foreach($products as $product) 
                      @if($product->id == $product_sale->products_id)
                        {{$product->name}}
                      @endif  
                    @endforeach 
                  </td>
                  <td align="right">{{$product_sale->quantity}}</td>
                  <td align="right">{{$product_sale->price}}</td>
                  <td align="right">{{$product_sale->iva}}</td>                  
                  <td align="right">{{$product_sale->total}}</td>
                  
                  <td align="center"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
              </tr>    
              @endforeach  
                </tbody>
              </table>
        </div>      
        <div class="col-lg-4">
              <div class="callout callout-info">
                <div>
                  <h4>Clinte <br>Rut: {{$clients->rut}}<br>{{$clients->name}}</h4>
                </div>
                <br>
                <br>
                <br><br>
                <div align="right">
                  <p><h4>
                    Monto: {{$sales->mount}}<br>
                    Iva: {{$sales->iva}}<br>
                    Total: {{$sales->total}}
                  </h4></p>
                  <p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Finalizar</a></p>            
                </div>
              </div>
        </div>


@endsection
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">              
              {!! Form::open(['route'=>'admin.deliveries.store', 'mothod'=>'POST']) !!}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">¿Deseas Agregar Un Delivery?</h4>
              </div>
              <div class="modal-body">
               <div class="form-group">
                {!!Form::label('Observacion', 'Dirección de Envío')!!}
                {!!Form::hidden('sales_id', $sales->id, ['class'=>'form-control','placeholder'=>'Número de Documento'])!!}
                {!!Form::text('observation', $clients->direction, ['class'=>'form-control','placeholder'=>'Agrega un Dirección'])!!}
                {!!Form::hidden('date',  date('Y-m-d'), ['class'=>'form-control','placeholder'=>'Agrega un Dirección'])!!}
               </div>
              </div>
              <div class="modal-footer">
                {!!link_to_route('admin.sales.index', $title = 'Volver',null, ['class'=>'btn btn-default'])!!}
                <button type="submit" class="btn btn-primary">Agregar  Delivery</button>
              </div>
            {!!Form::close()!!}
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>