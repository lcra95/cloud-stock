<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoriesRequest;
class CategoriesController extends Controller
{
    public function index()
    {
      $categories=Category::orderBy('id','ASC')->paginate();
      return view('admin.categories.index')->with('categories',$categories);

    }
    public function create()
    {

    	return view('admin.categories.create');
    }
    public function store(CategoriesRequest $request)
    {
    	//dd($request->name);  
    	$category = new Category($request->all());
 		$category->save();
 		Flash::success('Se registró Exitosamente '. $category->name);
 		return redirect()->route('admin.categories.index');
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$categories=Category::find($id);
    	return view('admin.categories.edit')->with('categories', $categories);
    }
    public function update(CategoriesRequest $request, $id)
    {

    	$category = Category::find($id);
    	$category->name=$request->name;
    	$category->save();
 		Flash::warning('Se Editó Exitosamente '. $category->name);
 		return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
    	$category = Category::find($id);
    	$category ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $category->name);
 		return redirect()->route('admin.categories.index');	

    }
    //
}
