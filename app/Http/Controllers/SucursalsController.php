<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Http\Requests;
use App\Http\Requests\SucursalRequest;
use App\Http\Requests\SucursalEditRequest;
use Laracasts\Flash\Flash;
class SucursalsController extends Controller
{
    public function index()
    {

      $sucursals=sucursal::orderBy('id','ASC')->paginate();
      
      return view('admin.sucursals.index')
      ->with('sucursals',$sucursals);

    }
    public function create()
    {

    	return view('admin.sucursals.create');

    }
    public function store(sucursalRequest $request)
    {
       
    	$sucursal = new sucursal($request->all());
 		$sucursal->save();
 		Flash::success('Se registró Exitosamente '. $sucursal->name);
 		return redirect()->route('admin.sucursals.index');
        
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$sucursals=sucursal::find($id);
    	return view('admin.sucursals.edit')->with('sucursals', $sucursals);
    }
    public function update(sucursalEditRequest $request, $id)
    {
        //dd($request->all());
    	$sucursal = sucursal::find($id);
    	$sucursal->fill($request->all());     
    	$sucursal->save();
 		Flash::warning('Se Editó Exitosamente '. $sucursal->name);
 		return redirect()->route('admin.sucursals.index');
    }

    public function destroy($id)
    {
    	$sucursal = sucursal::find($id);
    	$sucursal ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $sucursal->name);
 		return redirect()->route('admin.sucursals.index');	

    }
    //    //
}
