<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provider;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\ProviderRequest;
use App\Http\Requests\ProviderEditRequest;
class ProvidersController extends Controller
{
    public function index()
    {

      $providers=provider::orderBy('id','ASC')->paginate();
      
      return view('admin.providers.index')
      ->with('providers',$providers);

    }
    public function create()
    {

    	return view('admin.providers.create');

    }
    public function store(providerRequest $request)
    {
       
    	$provider = new provider($request->all());
 		$provider->save();
 		Flash::success('Se registró Exitosamente '. $provider->name);
 		return redirect()->route('admin.providers.index');
        
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$providers=provider::find($id);
    	return view('admin.providers.edit')->with('providers', $providers);
    }
    public function update(ProviderEditRequest $request, $id)
    {
        //dd($request->all());
    	$provider = provider::find($id);
    	$provider->fill($request->all());     
    	$provider->save();
 		Flash::warning('Se Editó Exitosamente '. $provider->name);
 		return redirect()->route('admin.providers.index');
    }

    public function destroy($id)
    {
    	$provider = provider::find($id);
    	$provider ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $provider->name);
 		return redirect()->route('admin.providers.index');	

    }
    //
}
