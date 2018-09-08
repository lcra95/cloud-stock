<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\WharehouseRequest;
use App\Wharehouse;
use App\Sucursal;
class WharehousesController extends Controller
{
    public function index()
    {
      $sucursals=Sucursal::orderBy('id','ASC')->get();
      $wharehouses=wharehouse::orderBy('id','ASC')->paginate();
      return view('admin.wharehouses.index')
      ->with('wharehouses',$wharehouses)
      ->with('sucursals', $sucursals);

    }
    public function create()
    {
    	$sucursals = Sucursal::orderBy('name', 'ASC')->lists('name','id');
    	return view('admin.wharehouses.create')->with('sucursals', $sucursals);
    }
    public function store(wharehouseRequest $request)
    {
    	//dd($request->name);  
    	$wharehouse = new wharehouse($request->all());
 		$wharehouse->save();
 		Flash::success('Se registró Exitosamente '. $wharehouse->name);
 		return redirect()->route('admin.wharehouses.index');
    }
    public function show($id)
    {


    }
    public function edit($id)
    {
    	$sucursals = Sucursal::orderBy('name', 'ASC')->lists('name','id');
    	$wharehouses=wharehouse::find($id);
    	return view('admin.wharehouses.edit')
    	->with('wharehouses', $wharehouses)
    	->with('sucursals', $sucursals)
    	;
    }
    public function update(wharehouseRequest $request, $id)
    {

    	$wharehouse = wharehouse::find($id);
    	$wharehouse->fill($request->all());
    	$wharehouse->save();
 		Flash::warning('Se Editó Exitosamente '. $wharehouse->name);
 		return redirect()->route('admin.wharehouses.index');
    }

    public function destroy($id)
    {
    	$wharehouse = wharehouse::find($id);
    	$wharehouse ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $wharehouse->name);
 		return redirect()->route('admin.wharehouses.index');	

    }
}
