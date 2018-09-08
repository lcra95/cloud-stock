<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use App\Http\Requests\ClientEditRequest;
use App\Http\Requests;
use App\Sale;
use App\Client;
use App\User;
use App\Sucursal;
use App\Product;
use App\ProductSale;
use App\Category;
use App\Brand;
use Laracasts\Flash\Flash;
class SalesController extends Controller
{

    public function index()
    {
      $sucursals=sucursal::orderBy('id','ASC')->get();
      $users=user::orderBy('id','ASC')->get();
      $clients=client::orderBy('id','ASC')->get();      
      $sales=sale::orderBy('id','ASC')->paginate();

      return view('admin.sales.index')
      ->with('sales',$sales)
      ->with('sucursals',$sucursals)
      ->with('users',$users)
      ->with('clients',$clients);
      
    
    }
    public function create($client)
    {	
    	$users = user::orderBy('name', 'ASC')->lists('name','id');
    	$sucursals = sucursal::orderBy('name', 'ASC')->lists('name','id');
    	$clients = client::find($client);  
    	return view('admin.sales.create')
    	->with('sucursals', $sucursals)
    	->with('users',$users)
    	->with('clients',$clients);
    }
 
    public function store(saleRequest $request)
    {
    $sale = new sale($request->all());
 		$sale->save();
 		Flash::success('Se registró Exitosamente '. $sale->id);
 		return redirect()->route('admin.sales.products',$sale->id);
        
    }
    public function nuevo(Request $request)
    {

   
          
      $sales = sale::find($request->sales_id);
      $categories=Category::orderBy('id','ASC')->get();
      $brands=Brand::orderBy('id','ASC')->get();     
      $product_sales=productsale::orderBy('id','ASC')->where('sales_id', $sales->id)->paginate(20);
      $nprods=product::orderBy('id','ASC')->where('barcode', $request->barcode)->get();
      $products=product::orderBy('id','ASC')->paginate();
      $clients=client::find($sales->clients_id);
      //dd($nprod);
      return view('admin.sales.products')
      ->with('products',$products)
      ->with('categories',$categories)
      ->with('brands',$brands)
      ->with('sales', $sales)
      ->with('clients',$clients)
      ->with('product_sales' ,$product_sales)
      ->with('nprods', $nprods);  

    }
    public function products($id)
    {
      $nprods=null;
      $sales = sale::find($id);
      $categories=Category::orderBy('id','ASC')->get();
      $brands=Brand::orderBy('id','ASC')->get();     
      $product_sales=productsale::orderBy('id','ASC')->where('sales_id', $sales->id)->paginate(20);
      $products=product::orderBy('id','ASC')->paginate();
      $clients=client::find($sales->clients_id);
      //dd($product_sales);
      return view('admin.sales.products')
      ->with('products',$products)
      ->with('categories',$categories)
      ->with('brands',$brands)
      ->with('sales', $sales)
      ->with('clients',$clients)
      ->with('product_sales' ,$product_sales)
      ->with('nprods', $nprods);
    }
    public function saveproducts(Request $request)
    {
      
      $sale= new productsale($request->all());

      if($sale->products_id ==1)
      {
        $sale->price=$sale->price*$sale->quantity;
        $sale->iva=0;
        $sale->total=$sale->price;
      }
      else
      {
        $sale->price=$sale->price*$sale->quantity;
        $sale->iva=$sale->price*0.19;
        $sale->total=$sale->price*1.19;        
       }
      $sale->save();

      $vsale= sale::find($sale->sales_id);
      $vsale->mount=$vsale->mount+$sale->price;
      $vsale->iva=$vsale->iva+$sale->iva;
      $vsale->total=$vsale->total+$sale->total;
      $vsale->save();
      return redirect()->route('admin.sales.products',$vsale->id);      
    }
    public function edit($id)
    {   
    	$users = user::orderBy('name', 'ASC')->lists('name','id');
        $sucursals = sucursal::orderBy('name', 'ASC')->lists('name','id');
        $clients = client::orderBy('name', 'ASC')->lists('name','id');   
    	$sales=sale::find($id);
    	return view('admin.sales.edit')
        ->with('sales', $sales)
        ->with('sucursals', $sucursals)
        ->with('clients',$clients)
		->with('users',$users);
    }
    public function update(saleRequest $request, $id)
    {
        //dd($request->all());
    	$sale = sale::find($id);
    	$sale->fill($request->all());
    
    	$sale->save();
 		Flash::warning('Se Editó Exitosamente '. $sale->name);
 		return redirect()->route('admin.sales.index');
    }

    public function destroy($id)
    {
    	$sale = sale::find($id);
    	$sale ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $sale->name);
 		return redirect()->route('admin.sales.index');	

    }    
   //
}
