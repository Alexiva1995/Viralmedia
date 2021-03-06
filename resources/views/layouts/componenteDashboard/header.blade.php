<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand">
                            {{-- <i class="ficon feather icon-maximize"></i> --}}
                        </a>
                    </li>
                    {{-- Notificaciones --}}
                    {{-- @include('layouts.componenteDashboard.notificaciones') --}}
                    {{-- Fin Notificaciones --}}
                    <li class="dropdown dropdown-user nav-item pt-2">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-status headerBalance">Saldo Disponible: {{Auth::user()->balance}} $</span>
                        </div>
                    </li>
                        <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                @if (Auth()->user()->admin == '1')
                                <span class="user-name text-bold-600">{{Auth::user()->fullname}}</span>
                                <span class="user-name text-bold-600 text-danger p">Administrador</span>
                                @else
                                <span class="user-name text-bold-600">{{Auth::user()->fullname}}</span>
                                @endif
                            </div>

                            @if(!Auth::user()->getMedia('photo')->isEmpty())
                            <span>
                                <img class="round" src="{{ Auth::user()->photoUrl }}"
                                    alt="{{ Auth::user()->fullname }}" height="50" width="50">
                            </span>
                            @else
                            <span>
                                <img class="round" src="{{asset('assets/img/sistema/logoarbol.png')}}"
                                    alt="avatar" height="50" width="50">
                            </span>
                            @endif

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="feather icon-user"></i> Editar Perfil
                            </a>
                            {{-- <a class="dropdown-item" href="app-email.html">
                                <i class="feather icon-mail"></i> My Inbox
                            </a>
                            <a class="dropdown-item" href="app-todo.html">
                                <i class="feather icon-check-square"></i> Task
                            </a>
                            <a class="dropdown-item" href="app-chat.html">
                                <i class="feather icon-message-square"></i> Chats
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="feather icon-power"></i> Logout
                            </a>            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->