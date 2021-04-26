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



Route::get('/', function () {return view('welcome');})->name('mantenimiento');

Route::get('/term', 'ConfigController@term')->name('term');



Auth::routes();

Route::prefix('dashboard')->middleware('menu', 'auth')->group(function ()
{

    Route::get('/terminoscondiciones', 'HomeController@terminosCondiciones')->name('terminos_condiciones');

    // Inicio
    Route::get('/home', 'HomeController@index')->name('home');
     // Inicio de usuarios
    Route::get('/home-user', 'HomeController@indexUser')->name('home.user');
    // Ruta para obtener la informacion de la graficas del dashboard
    Route::get('getdatagraphicdashboard', 'HomeController@getDataGraphic')->name('home.data.graphic');

    // no admin
    Route::get('/impersonate/stop', 'ImpersonateController@stop')->name('impersonate.stop');

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
        Route::delete('order/delete/admin/{id}','ServicesAdminController@destroyAdmin')->name('record_order.destroy-admin');

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
        Route::get('/', 'LiquidactionController@index')->name('settlement');
        Route::get('/pending', 'LiquidactionController@indexPendientes')->name('settlement.pending');
        Route::post('/process', 'LiquidactionController@procesarLiquidacion')->name('settlement.process');
        Route::get('/{status}/history', 'LiquidactionController@indexHistory')->name('settlement.history.status');
        Route::resource('liquidation', 'LiquidactionController');
        // Route::get('history', 'SettlementController@history')->name('settlement_done');
        // Route::get('pending', 'SettlementController@pending')->name('settlement_pending');

    });
    
    //Ruta lideres
    Route::prefix('leaders')->group(function(){
        Route::get('/', 'LeadersController@index')->name('leaders');
    });

    //Ruta de seguimiento de servicios 

    Route::prefix('services')->group(function(){
        Route::get('list-followers','FollowersController@listFollowers')->name('followers.list');
        Route::get('edit-followers/{id}','FollowersController@editFollowers')->name('followers.edit');
        Route::patch('update-followers/{id}','FollowersController@updateFollowers')->name('followers.update');
        Route::delete('delete-followers/{id}','FollowersController@destroyFollowers')->name('followers.destroy');

        Route::get('list-graphics','FollowersController@listGraphic')->name('graphics.list');
        Route::get('edit-graphics/{id}','FollowersController@editGraphic')->name('graphics.edit');
        Route::patch('update-graphics/{id}','FollowersController@updateGraphic')->name('graphics.update');
        Route::delete('delete-graphics/{id}','FollowersController@destroyGraphic')->name('graphics.destroy');

        Route::get('comunity','FollowersController@listComunity')->name('comunity.list');
        Route::get('edit-comunity/{id}','FollowersController@editComunity')->name('comunity.edit');
        Route::patch('update-comunity/{id}','FollowersController@updateComunity')->name('comunity.update');
        Route::delete('delete-comunity/{id}','FollowersController@destroyComunity')->name('comunity.destroy');

    });
    
    //Ruta usuarios
    Route::prefix('user')->group(function(){

            Route::get('user-list', 'UserController@listUser')->name('users.list-user')->middleware('auth', 'checkrole:1');
            Route::get('user-edit/{id}', 'UserController@editUser')->name('users.edit-user');
            Route::patch('user-update/{id}', 'UserController@updateUser')->name('users.update-user');
            Route::delete('user/delete/{id}','UserController@destroyUser')->name('users.destroy-user');


            Route::get('profile', 'UserController@editProfile')->name('profile');
            Route::patch('profile-update', 'UserController@updateProfile')->name('profile.update');

            Route::get('change-password', 'ChangePasswordController@index')->name('profile.change-password');
            Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

    });

    //Ruta logs
    Route::prefix('logs')->group(function(){
        Route::get('/', 'LogsController@index')->name('logs');
    });

    //Ruta de Ajuste de sistema
    Route::prefix('system')->group(function(){

        Route::get('general','ConfigController@index')->name('general');
        Route::patch('update-general','ConfigController@update')->name('general.update');

        Route::get('news','SystemController@listNews')->name('news.list');
        Route::get('create-news','SystemController@createNews')->name('news.create');
        Route::post('store-news','SystemController@storeNews')->name('news.store');

        Route::get('edit-news/{id}','SystemController@editNews')->name('news.edit');
        Route::patch('update-news/{id}','SystemController@updateNews')->name('news.update');
        Route::delete('delete-news/{id}','SystemController@destroyNews')->name('news.destroy');

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

        // admin
        Route::post('/impersonate/{user}/start', 'ImpersonateController@start')->name('impersonate.start');

   
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
