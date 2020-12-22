<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('dashboard')->middleware('menu', 'auth')->group(function ()
{
    // Inicio
    Route::get('/home', 'HomeController@index')->name('home');
    // Ruta para obtener la informacion de la graficas del dashboard
    Route::get('getdatagraphicdashboard', 'HomeController@getDataGraphic')->name('home.data.graphic');

    // Servicios
    Route::prefix('servicios')->group(function ()
    {
        Route::get('/', 'ServiciosController@index')->name('servicios.index');
        Route::get('/data_services', 'ServiciosController@getDataInfo')->name('servicios.get_data');
        Route::post('/save_orden', 'ServiciosController@saveOrden')->name('servicios.save.orden');
    });

    // Red de usuario
    Route::prefix('genealogy')->group(function ()
    {
        // Ruta para ver la lista de usuarios
        Route::get('users/{network}', 'TreeController@indexNewtwork')->name('genealogy_list_network');
        // Ruta para visualizar el arbol o la matriz
        Route::get('{type}', 'TreeController@index')->name('genealogy_type');
        // Ruta para visualizar el arbol o la matriz de un usuario en especifico
        Route::get('{type}/{id}', 'TreeController@moretree')->name('genealogy_type_id'); 
    });

    //Ruta historial 
    Route::prefix('record')->group(function()
    {
        //Ruta para historial de ordenes 
        Route::get('/', 'RecordController@index')->name('record_order');
        Route::get('commissions', 'RecordController@indexCommissions')->name('record_commission');
    });
    

    // Ruta para agregar saldo
    Route::prefix('addsaldo')->group(function ()
    {
        Route::get('/', 'AddSaldoController@index')->name('addsaldo.index');
        // Rutas para el pago stripe
        Route::post('/stripe', 'AddSaldoController@stripe')->name('addsaldo.stripe');
        // Rutas para el pago payulatam
        Route::prefix('payu')->group(function ()
        {
           Route::post('/generate_orden', 'AddSaldoController@generate_orden_payu')->name('addsaldo.payu.generate');
           Route::get('/{orden}/response_orden', 'AddSaldoController@response_orden_payu')->name('addsaldo.payu.response');
           Route::post('/{orden}/confirmation_orden', 'AddSaldoController@confimation_orden_payu')->name('addsaldo.payu.confirmation');
        });
        // Rutas para el Coinbase
        Route::post('/coinbase', 'AddSaldoController@generate_orden_coinbase')->name('addsaldo.coinbase');
        Route::get('{status}/status_coinbase', 'AddSaldoController@status_coinbase')->name('addsaldo.coinbase.status');
    });

    // Ruta para la billetera
    Route::prefix('wallet')->group(function ()
    {
        Route::get('/', 'WalletController@index')->name('wallet.index');
    });

    /**
     * Seccion del sistema para el admin
     */
    Route::prefix('admin')->group(function ()
    {
        //Agregar servicios
        Route::prefix('manager_services')->group(function ()
        {
            //Rutas para las categorias 
            Route::resource('category', 'CategoryController');
            //Rutas para los servicios
            Route::resource('services', 'ServicesAdminController');
        }); 
    });

});
