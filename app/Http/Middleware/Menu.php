<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Menu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $menu = null;
        if (Auth::check()) {
            $menu = $this->menuUsuario(); 
            if (Auth::user()->admin == 1) {
                $menu = $this->menuAdmin();
            }
        }
        View::share('menu', $menu);
        return $next($request);
    }

    /**
     * Permite Obtener el menu del usuario
     *
     * @return void
     */
    public function menuUsuario()
    {
       // $orden = app($OrdenService)->find($id);

        return [
            // Inicio
            'Inicio' => [
                'submenu' => 0,
                'ruta' => route('home.user'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-home',
                'complementoruta' => '',
            ],
            // Fin inicio
            // Servicios
            'Servicios' => [
                'submenu' => 0,
                'ruta' => route('servicios.index'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-briefcase',
                'complementoruta' => '',
            ],
            // Fin Servicios
            // Añadir Saldo
            'Añadir Saldo' => [
                'submenu' => 0,
                'ruta' => route('addsaldo.index'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-plus-circle',
                'complementoruta' => '',
            ],
            // Fin añadir saldo
            // Red
            'Red' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-users',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Arbol',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('genealogy_type', 'tree'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Referidos Directos',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('genealogy_list_network', 'direct'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Referidos en Red',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('genealogy_list_network', 'network'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin red
             // tickets
             'Tickets' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-tag',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Crear Ticket',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('ticket.create'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Lista de Tickets',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('ticket.list-user'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin tickets
            // Billetera
            'Billetera' => [
                'submenu' => 0,
                'ruta' => route('wallet.index'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-credit-card',
                'complementoruta' => '',
            ],
            // Fin billetera
            // Historial de Ordenes
            'Historial de Ordenes' => [
                'submenu' => 0,
                'ruta' => route('record_order.index-user'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-clipboard',
                'complementoruta' => '',
            ],
            // Fin historial de ordenes
            // App Movil
            'App Movil' => [
                'submenu' => 0,
                'ruta' => 'https://play.google.com/store/apps/details?id=com.ViralMedia.panelOk',
                'blank'=> '_blank', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-smartphone',
                'complementoruta' => '',
            ],
            // Fin app movil
            // Noticias en Telegram
            'Noticias en telegram' => [
                'submenu' => 0,
                'ruta' => 'https://t.me/viralmediapanel',
                'blank'=> '_blank', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'fa fa-newspaper-o',
                'complementoruta' => '',
            ],
            // Fin noticias en telegram
        ];
    }

    /**
     * Permite Obtener el menu del admin
     *
     * @return void
     */
    public function menuAdmin()
    {
        return [
            // Inicio
            'Dashboard' => [
                'submenu' => 0,
                'ruta' => route('home'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-home',
                'complementoruta' => '',
            ],
            // Fin inicio
            // Red
            'Red' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-users',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Arbol',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('genealogy_type', 'tree'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Referidos Directos',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('genealogy_list_network', 'direct'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Referidos en Red',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('genealogy_list_network', 'network'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin red
                       // tickets
                    'Tickets' => [
                        'submenu' => 1,
                        'ruta' => 'javascript:;',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'icon' => 'feather icon-tag',
                        'complementoruta' => '',
                        'submenus' => [
                    [
                        'name' => 'Lista de Tickets',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('ticket.list-admin'),
                        'complementoruta' => ''
                    ],
                ],
            ],
             // Fin tickets
            // Historial
            'Historial' => [
                'submenu' => 1,
                'ruta' => 'javascript:;', 
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-clipboard',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Historial Ordenes',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('record_order.index-admin'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Historial Comisiones',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('record_commission'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Historial Pedidos',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('record_request'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin Historial
            // Liquidaciones
            'Liquidaciones' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'fa fa-list-alt',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'General Liquidaciones',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('settlement'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Liquidaciones Pendientes',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('settlement_pending'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Liquidaciones Realizadas',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('settlement_done'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin Liquidaciones
            // Lideres
            'Lideres' => [
                'submenu' => 0,
                'ruta' => route('leaders'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-award',
                'complementoruta' => '',
            ],
            // Fin lideres
            // Seguimiento Servicios
            'Seguimiento Servicios' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'feather icon-clipboard',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Registro Seguidores VIP',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('followers'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Registro Grafico',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('graphics'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Registro Comunity',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('comunity'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin Seguimiento Servicios
            // Administracion de servicios
            'Administración de servicios' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'fa fa-cog',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Categorías',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('category.index'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Servicios',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('services.index'),
                        'complementoruta' => '?category=1'
                    ],
                ],
            ],
            // Fin Administracion de servicios
            // Usuarios
            'Usuarios' => [
                'submenu' => 0,
                'ruta' => route('users'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'fa fa-users',
                'complementoruta' => '',
            ],
            // Fin Usuarios
            // Transaction logs
            'Transaction logs' => [
                'submenu' => 0,
                'ruta' => route('logs'),
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'fa fa-history',
                'complementoruta' => '',
            ],
            // Fin Transaction logs
            // Ajuste de sistema
            'Ajustes de sistema' => [
                'submenu' => 1,
                'ruta' => 'javascript:;',
                'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                'icon' => 'fa fa fa-cogs',
                'complementoruta' => '',
                'submenus' => [
                    [
                        'name' => 'Generales',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('general'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Noticias',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('news'),
                        'complementoruta' => ''
                    ],
                    [
                        'name' => 'Idioma',
                        'blank'=> '', // si es para una pagina diferente del sistema solo coloquen _blank
                        'ruta' => route('languages'),
                        'complementoruta' => ''
                    ],
                ],
            ],
            // Fin Ajuste de sistema
        ];
    }
}
