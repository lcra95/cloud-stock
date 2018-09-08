<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\BrandRequest;

class BrandsController extends Controller
{
    public function index()
    {
      $brands=Brand::orderBy('id','ASC')->paginate();
      return view('admin.brands.index')->with('brands',$brands);

    }
    public function create()
    {

    	return view('admin.brands.create');
    }
    public function store(BrandRequest $request)
    {
    	//dd($request->name);  
    	$brand = new Brand($request->all());
 		$brand->save();
 		Flash::success('Se registró Exitosamente '. $brand->name);
 		return redirect()->route('admin.brands.index');
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$brands=Brand::find($id);
    	return view('admin.brands.edit')->with('brands', $brands);
    }
    public function update(BrandRequest $request, $id)
    {

    	$brand = Brand::find($id);
    	$brand->name=$request->name;
    	$brand->save();
 		Flash::warning('Se Editó Exitosamente '. $brand->name);
 		return redirect()->route('admin.brands.index');
    }

    public function destroy($id)
    {
    	$brand = Brand::find($id);
    	$brand ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $brand->name);
 		return redirect()->route('admin.brands.index');	

    }

}
