<?php

namespace App\Http\Controllers;
use App\Rol;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Requests\RolRequest;
class RolsController extends Controller
{

    public function index()
    {
      $roles=Rol::orderBy('id','ASC')->paginate();
      return view('admin.roles.index')->with('roles',$roles);

    }
    public function create()
    {

    	return view('admin.roles.create');
    }
    public function store(RolRequest $request)
    {

    	$rol = new Rol($request->all());
 		$rol->save();
 		Flash::success('Se registró Exitosamente '. $rol->name);
 		return redirect()->route('admin.roles.index');
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$roles=Rol::find($id);
    	return view('admin.roles.edit')->with('roles', $roles);
    }
    public function update(RolRequest $request, $id)
    {

    	$rol = Rol::find($id);
    	$rol->name=$request->name;
    	$rol->save();
 		Flash::warning('Se Editó Exitosamente '. $rol->name);
 		return redirect()->route('admin.roles.index');
    }

    public function destroy($id)
    {
    	$rol = Rol::find($id);
    	$rol ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $rol->name);
 		return redirect()->route('admin.roles.index');	

    }
}
