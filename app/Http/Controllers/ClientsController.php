<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientEditRequest;
use App\Http\Requests;
use App\Client;
class ClientsController extends Controller
{
    public function index()
    {

      $clients=client::orderBy('created_at','DESC')->paginate();
      
      return view('admin.clients.index')
      ->with('clients',$clients);

    }
    public function create()
    {

    	return view('admin.clients.create');

    }
    public function store(clientRequest $request)
    {
       
    	$client = new client($request->all());
 		$client->save();
 		Flash::success('Se registró Exitosamente '. $client->name);
 		return redirect()->route('admin.sales.create',$client->id);
        
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$clients=client::find($id);
    	return view('admin.clients.edit')->with('clients', $clients);
    }
    public function update(clientEditRequest $request, $id)
    {
        //dd($request->all());
    	$client = client::find($id);
    	$client->fill($request->all());
        
    	$client->save();
 		Flash::warning('Se Editó Exitosamente '. $client->name);
 		return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
    	$client = client::find($id);
    	$client ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $client->name);
 		return redirect()->route('admin.clients.index');	

    }    //
}
