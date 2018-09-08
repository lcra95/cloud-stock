<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Product;
use App\Category;
use App\Brand;
Route::get('/', function () {

	  $categories=Category::orderBy('id','ASC')->get();
      $brands=Brand::orderBy('id','ASC')->get();      
      $products=product::orderBy('id','ASC')->paginate(10000);
    return view('admin/products/index')
      ->with('products',$products)
      ->with('categories',$categories)
      ->with('brands',$brands);
});
Route::group(['prefix' => 'admin'], function(){

	Route::resource('roles','RolsController');
	Route::get('roles/{id}/destroy',[
		'uses' => 'RolsController@destroy',
		'as' => 'admin.roles.destroy'

		]);

	Route::resource('users','UserController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UserController@destroy',
		'as' => 'admin.users.destroy'

		]);		
	Route::resource('menus','MenuController');
	Route::get('menus/{id}/destroy',[
		'uses' => 'MenuController@destroy',
		'as' => 'admin.menus.destroy'

		]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'

		]);
	Route::resource('brands','BrandsController');
	Route::get('brands/{id}/destroy',[
		'uses' => 'BrandsController@destroy',
		'as' => 'admin.brands.destroy'

		]);
	Route::resource('providers','ProvidersController');
	Route::get('providers/{id}/destroy',[
		'uses' => 'ProvidersController@destroy',
		'as' => 'admin.providers.destroy'

		]);
	Route::resource('clients','ClientsController');
	Route::get('clients/{id}/destroy',[
		'uses' => 'ClientsController@destroy',
		'as' => 'admin.clients.destroy'

		]);
	Route::resource('products','ProductsController');
	Route::get('products/{id}/destroy',[
		'uses' => 'ProductsController@destroy',
		'as' => 'admin.products.destroy'

		]);
	Route::resource('sucursals','SucursalsController');
	Route::get('sucursals/{id}/destroy',[
		'uses' => 'SucursalsController@destroy',
		'as' => 'admin.sucursals.destroy'

		]);
	Route::resource('wharehouses','WharehousesController');
	Route::get('wharehouses/{id}/destroy',[
		'uses' => 'wharehousesController@destroy',
		'as' => 'admin.wharehouses.destroy'

		]);
	Route::resource('purchases','PurchasesController');
	Route::get('purchases/{id}/destroy',[
		'uses' => 'PurchasesController@destroy',
		'as' => 'admin.purchases.destroy'

		]);
	Route::resource('sales','SalesController');
	Route::get('sales/{id}/destroy',[
		'uses' => 'SalesController@destroy',
		'as' => 'admin.sales.destroy'

		]);
	Route::get('sales/{id}/create',[
		'uses' => 'SalesController@create',
		'as' => 'admin.sales.create'

		]);
	Route::get('sales/{id}/products',[
		'uses' => 'SalesController@products',
		'as' => 'admin.sales.products'

		]);
	Route::get('sales/{id}/products',[
		'uses' => 'SalesController@products',
		'as' => 'admin.sales.products'

		]);
	Route::post('sales/saveproducts',[
		'uses' => 'SalesController@saveproducts',
		'as' => 'admin.sales.saveproducts'

		]);	
	Route::post('sales/nuevo',[
		'uses' => 'SalesController@nuevo',
		'as' => 'admin.sales.nuevo'

		]);	
	Route::resource('deliveries','DeliveriesController');
	Route::get('Deliveries/{id}/destroy',[
		'uses' => 'deliveriesController@destroy',
		'as' => 'admin.deliveries.destroy'

		]);
});