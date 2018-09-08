<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Http\Requests;
use App\Http\Requests\PurchaseRequest;
use App\Provider;
use App\User;
use App\Sucursal;
use Laracasts\Flash\Flash;
class PurchasesController extends Controller
{

    public function index()
    {
      $sucursals=sucursal::orderBy('id','ASC')->get();
      $users=user::orderBy('id','ASC')->get();
      $providers=Provider::orderBy('id','ASC')->get();      
      $purchases=purchase::orderBy('id','ASC')->paginate();
      
      return view('admin.purchases.index')
      ->with('purchases',$purchases)
      ->with('sucursals',$sucursals)
      ->with('users',$users)
      ->with('providers',$providers);
    }
    public function create()
    {	

    	$users = user::orderBy('name', 'ASC')->lists('name','id');
    	$sucursals = sucursal::orderBy('name', 'ASC')->lists('name','id');
    	$providers = Provider::orderBy('name', 'ASC')->lists('name','id');    	
    	return view('admin.purchases.create')
    	->with('sucursals', $sucursals)
    	->with('users',$users)
    	->with('providers',$providers);
    }
    public function store(purchaseRequest $request)
    {
       	
    	$purchase = new purchase($request->all());
 		$purchase->save();
 		Flash::success('Se registró Exitosamente '. $purchase->name);
 		return redirect()->route('admin.purchases.index');
        
    }
    public function show($id)
    {


    }
    public function edit($id)
    {   
    	$users = user::orderBy('name', 'ASC')->lists('name','id');
        $sucursals = sucursal::orderBy('name', 'ASC')->lists('name','id');
        $providers = Provider::orderBy('name', 'ASC')->lists('name','id');   
    	$purchases=purchase::find($id);
    	return view('admin.purchases.edit')
        ->with('purchases', $purchases)
        ->with('sucursals', $sucursals)
        ->with('providers',$providers)
		->with('users',$users);
    }
    public function update(purchaseRequest $request, $id)
    {
        //dd($request->all());
    	$purchase = purchase::find($id);
    	$purchase->fill($request->all());
    
    	$purchase->save();
 		Flash::warning('Se Editó Exitosamente '. $purchase->name);
 		return redirect()->route('admin.purchases.index');
    }

    public function destroy($id)
    {
    	$purchase = purchase::find($id);
    	$purchase ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $purchase->name);
 		return redirect()->route('admin.purchases.index');	

    }    

}
