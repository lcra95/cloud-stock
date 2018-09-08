<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Requests\DeliveryRequest;
class DeliveriesController extends Controller
{
    public function index()
    {
      $deliveries=delivery::orderBy('id','ASC')->paginate();
      return view('admin.deliveries.index')->with('deliveries',$deliveries);

    }
    public function create()
    {

    	return view('admin.deliveries.create');
    }
    public function store(deliveryRequest $request)
    {
    	//dd($request->all());  
    	$delivery = new delivery($request->all());
 		$delivery->save();
 		Flash::success('Se registró Exitosamente '. $delivery->name);
 		return redirect()->route('admin.sales.index');
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$deliveries=delivery::find($id);
    	return view('admin.deliveries.edit')->with('deliveries', $deliveries);
    }
    public function update(deliveryRequest $request, $id)
    {

    	$delivery = delivery::find($id);
    	$delivery->name=$request->name;
    	$delivery->save();
 		Flash::warning('Se Editó Exitosamente '. $delivery->name);
 		return redirect()->route('admin.deliveries.index');
    }

    public function destroy($id)
    {
    	$delivery = delivery::find($id);
    	$delivery ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $delivery->name);
 		return redirect()->route('admin.deliveries.index');	

    }
}
