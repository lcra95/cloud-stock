<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\User;
use App\Rol;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
class UserController extends Controller
{
    public function index()
    {
      $roles=Rol::orderBy('id','ASC')->get();
      $users=User::orderBy('id','ASC')->paginate();
      
      return view('admin.users.index')
      ->with('users',$users)
      ->with('roles',$roles);

    }
    public function create()
    {
    	$roles = Rol::orderBy('name', 'ASC')->lists('name','id');
    	return view('admin.users.create')
    	->with('roles', $roles);
    }
    public function store(UserRequest $request)
    {
       
    	$user = new User($request->all());
 		$user->save();
 		Flash::success('Se registró Exitosamente '. $user->name);
 		return redirect()->route('admin.users.index');
        
    }
    public function show($id)
    {


    }
    public function edit($id)
    {

    	$users=User::find($id);
    	return view('admin.users.edit')->with('users', $users);
    }
    public function update(UserEditRequest $request, $id)
    {
        //dd($request->all());
    	$user = User::find($id);
    	$user->name=$request->name;
        $user->telephone=$request->telephone;
        $user->direction=$request->direction;        
    	$user->save();
 		Flash::warning('Se Editó Exitosamente '. $user->name);
 		return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
    	$user = User::find($id);
    	$user ->delete();
 		Flash::error('Se Eliminó Exitosamente '. $user->name);
 		return redirect()->route('admin.users.index');	

    }

}
