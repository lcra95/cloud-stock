<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\MenuRequest;
class MenuController extends Controller
{
    public function index()
    {
      $menus=Menu::orderBy('id','ASC')->paginate();
      return view('admin.menus.index')->with('menus',$menus);

    }
    public function create()
    {

    	return view('admin.menus.create');
    }
    public function store(MenuRequest $request)
    {
    	//dd($request->name);  
    	$menu = new Menu($request->all());
 		$menu->save();
 		Flash::success('Se registró Exitosamente '. $menu->name);
 		return redirect()->route('admin.menus.index');
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$menus=menu::find($id);
    	return view('admin.menus.edit')->with('menus', $menus);
    }
    public function update(MenuRequest $request, $id)
    {

    	$menu = menu::find($id);
    	$menu->name=$request->name;
    	$menu->save();
 		Flash::warning('Se Editó Exitosamente '. $menu->name);
 		return redirect()->route('admin.menus.index');
    }

    public function destroy($id)
    {
    	$menu = menu::find($id);
    	$menu ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $menu->name);
 		return redirect()->route('admin.menus.index');	

    }
}
