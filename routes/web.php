<?php


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
     // Inicio de usuarios
    Route::get('/home-user', 'HomeController@index')->name('home.user');
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
        Route::get('orders/admin', 'ServicesAdminController@indexAdmin')->name('record_order.index-admin');
        Route::get('order/admin/{id}', 'ServicesAdminController@editAdmin')->name('record_order.edit-admin');
        Route::patch('order/admin/{id}', 'ServicesAdminController@updateAdmin')->name('record_order.update-admin');
        Route::get('order/show/admin/{id}','ServicesAdminController@showAdmin')->name('record_order.show-admin');

        //Ruta para historial de ordenes de usuarios
        Route::get('orders/user', 'ServiciosController@indexUser')->name('record_order.index-user');
        Route::get('orders/user/{id}', 'ServiciosController@editUser')->name('record_order.edit-user');
        Route::patch('orders/user/{id}', 'ServiciosController@updateUser')->name('record_order.update-user');
        Route::get('order/show/user/{id}','ServiciosController@showUser')->name('record_order.show-user');

        //Ruta para historial de comisiones
        Route::get('commissions', 'RecordController@indexCommissions')->name('record_commission');
        //Ruta para historial de pedidos
        Route::get('request', 'RecordController@indexRequest')->name('record_request');
    });

    //Ruta de liquidacion 

    Route::prefix('settlement')->group(function() 
    {
        //Ruta liquidaciones realizadas
        Route::get('general', 'SettlementController@index')->name('settlement');
        Route::get('history', 'SettlementController@history')->name('settlement_done');
        Route::get('pending', 'SettlementController@pending')->name('settlement_pending');

    });
    
    //Ruta lideres
    Route::prefix('leaders')->group(function(){
        Route::get('/', 'LeadersController@index')->name('leaders');
    });

    //Ruta de seguimiento de servicios 

    Route::prefix('services')->group(function(){
        Route::get('list','FollowersController@list')->name('followers');
        Route::get('graphics','FollowersController@graphic')->name('graphics');
        Route::get('comunity','FollowersController@comunity')->name('comunity');

    });
    
    //Ruta usuarios
    Route::prefix('user')->group(function(){

            Route::get('user-list', 'UserController@listUser')->name('users.list-user');
            Route::get('user-edit/{id}', 'UserController@editUser')->name('users.edit-user');
            Route::patch('user-update/{id}', 'UserController@updateUser')->name('users.update-user');


            Route::get('profile', 'UserController@editProfile')->name('profile');
            Route::patch('profile-update', 'UserController@updateProfile')->name('profile.update');
    });

    //Ruta logs
    Route::prefix('logs')->group(function(){
        Route::get('/', 'LogsController@index')->name('logs');
    });

    //Ruta de Ajuste de sistema
    Route::prefix('system')->group(function(){
        Route::get('general','SystemController@general')->name('general');
        Route::get('news','SystemController@news')->name('news');
        Route::get('languages','SystemController@languages')->name('languages');

    });

     //Ruta de los Tickets
     Route::prefix('tickets')->group(function(){
        Route::get('ticket-create','TicketsController@create')->name('ticket.create');
        Route::post('ticket-store','TicketsController@store')->name('ticket.store');

        // Para el usuario
        Route::get('ticket-edit-user/{id}','TicketsController@editUser')->name('ticket.edit-user');
        Route::patch('ticket-update-user/{id}','TicketsController@updateUser')->name('ticket.update-user');
        Route::get('ticket-list-user','TicketsController@listUser')->name('ticket.list-user');
        Route::get('ticket-show-user/{id}','TicketsController@showUser')->name('ticket.show-user');

        // Para el Admin
        Route::get('ticket-edit-admin/{id}','TicketsController@editAdmin')->name('ticket.edit-admin');
        Route::patch('ticket-update-admin/{id}','TicketsController@updateAdmin')->name('ticket.update-admin');
        Route::get('ticket-list-admin','TicketsController@listAdmin')->name('ticket.list-admin');
        Route::get('ticket-show-admin/{id}','TicketsController@showAdmin')->name('ticket.show-admin');
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
