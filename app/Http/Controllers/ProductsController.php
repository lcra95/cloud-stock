<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\Brand;
use App\Http\Requests;

class ProductsController extends Controller
{
    public function index()
    {
      $categories=Category::orderBy('id','ASC')->get();
      $brands=Brand::orderBy('id','ASC')->get();      
      $products=product::orderBy('id','ASC')->paginate(10000);
      
      return view('admin.products.index')
      ->with('products',$products)
      ->with('categories',$categories)
      ->with('brands',$brands);
    }
    public function create()
    {
    	$categories = Category::orderBy('name', 'ASC')->lists('name','id');
    	$brands = Brand::orderBy('name', 'ASC')->lists('name','id');    	
    	return view('admin.products.create')
    	->with('categories', $categories)
    	->with('brands',$brands);
    }
    public function store(productRequest $request)
    {
       
    	$product = new product($request->all());
 		$product->save();
 		Flash::success('Se registró Exitosamente '. $product->name);
 		return redirect()->route('admin.products.index');
        
    }
    public function show($id)
    {


    }
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->lists('name','id');
        $brands = Brand::orderBy('name', 'ASC')->lists('name','id');   
    	$products=product::find($id);
    	return view('admin.products.edit')
        ->with('products', $products)
        ->with('categories', $categories)
        ->with('brands',$brands);
    }
    public function update(productRequest $request, $id)
    {
        //dd($request->all());
    	$product = product::find($id);
    	$product->fill($request->all());
    
    	$product->save();
 		Flash::warning('Se Editó Exitosamente '. $product->name);
 		return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
    	$product = product::find($id);
    	$product ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $product->name);
 		return redirect()->route('admin.products.index');	

    }
  //
}
