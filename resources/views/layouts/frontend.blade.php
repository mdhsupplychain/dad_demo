<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Despacho a Domicilio - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com" />
    <link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('public/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  @stack('css')
  </head>
  <body>
    <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1><a href="{{route ('index_index')}}"><img src="{{asset('public/images/logo.png')}}" title="Despacho a Domicilio" /></a></h1>
                   
                  </div>

               </div>
               <div class="col-md-5">
                  
<div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                           <span class="input-group-btn" style="color: #ffffff; padding-top: 6px; font-size: 14px;">
                             <strong>{{ Auth::user()->name }}</strong> || <span id="spanreloj"></span> || {{date('d-m-Y')}} </span>
                      </div>
                    </div>
                  </div>

               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff !important;"><i class="glyphicon glyphicon-user"></i> Mi cuenta <b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeInUp">
                            
                              <li><a href="" title="Mis datos"><i class="glyphicon glyphicon-cog"></i> Mis datos</a></li>
                              <li><a href="{{route('acceso_salir')}}" title="Salir"><i class="glyphicon glyphicon-off"></i> Salir</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class="page-content">
        <div class="row">
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="{{Helpers::rutaActiva('','1')}}"><a href="{{route ('index_index')}}" title="Inicio"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                    
                    <li class="submenu{{Helpers::rutaActiva('usuarios','2')}}{{Helpers::rutaActiva('modulos','2')}}{{Helpers::rutaActiva('perfiles','2')}}{{Helpers::rutaActiva('permisos','2')}}"><a href="javascript:void(0);" title="Administración"><i class="glyphicon glyphicon-th"></i> Administración<span class="caret pull-right"></span></a>
                    <!-- Sub menu -->
                         <ul>
                           <li class="{{Helpers::rutaActiva('modulos','1')}}"><a href="{{route('modulos_index')}}" title="Módulos"><i class="glyphicon glyphicon-folder-open"></i> Módulos</a></li>
                           <li class="{{Helpers::rutaActiva('perfiles','1')}}"><a href="{{route('perfiles_index')}}" title="Perfiles"><i class="glyphicon glyphicon-tasks"></i> Perfiles</a></li>
                           <li class="{{Helpers::rutaActiva('usuarios','1')}}"><a href="" title="Usuarios"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                           <li class="{{Helpers::rutaActiva('permisos','1')}}"><a href="{{route('permisos_index')}}" title="Permisos por Módulo"><i class="glyphicon glyphicon-wrench"></i> Permisos</a></li>
                        </ul>
                    </li>
                    <li class="submenu{{Helpers::rutaActiva('centro_despacho','2')}}{{Helpers::rutaActiva('tiendas','2')}}"><a href="javascript:void(0);" title="Configuración"><i class="glyphicon glyphicon-cog"></i> Configuración<span class="caret pull-right"></span></a>
                    <!-- Sub menu -->
                         <ul>
                           <li class="{{Helpers::rutaActiva('centro_despacho','1')}}"><a href="" title="Centro Despacho"><i class="glyphicon glyphicon-bed"></i> Centro Despacho</a></li>
                           <li class="{{Helpers::rutaActiva('tiendas','1')}}"><a href="" title="Tiendas"><i class="glyphicon glyphicon-gift"></i> Tiendas</a></li>
                           
                        </ul>
                    </li>
                    <li class="submenu {{Helpers::rutaActiva('ordenes-de-despacho','2')}}"><a href="javascript:void(0);" title="Monitor OD"><i class="glyphicon glyphicon-list-alt"></i> Monitor OD<span class="caret pull-right"></span></a>
                        <ul>
                           <li class="{{Helpers::rutaActiva('ordenes-de-despacho','1')}}"><a href="{{route('ordenes_de_despacho_index')}}" title="Órdenes de Despacho"><i class="glyphicon glyphicon-list-alt"></i> Órdenes de Despacho</a></li>
                        </ul>
                    </li>  
                    <li class="{{Helpers::rutaActiva('soporte','1')}}"><a href="{{route ('soporte_index')}}" title="Soporte"><i class="glyphicon glyphicon-envelope"></i> Soporte</a></li>
                </ul>
             </div>
          </div>
          <!--contenido-->
            @yield('content')
          <!--/contenido-->
        </div>
    </div>

    <footer class="footerfix">
         <div class="container">
         
            <div class="copy text-center">
               Todos los derechos reservados - 2018 | Desarrollado por equipo Supply Avocato
            </div>
            
         </div>
      </footer>
<!--Dependencias-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('public/js/jquery.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/custom.js')}}"></script>
    @stack('scripts')
    <!--scripts propios-->
    <script type="text/javascript">var base_url='{{Helpers::base_path()}}';</script>
    <script src="{{asset('public/js/funciones.js')}}"></script>
    <!--/scripts propios-->

<!--/Dependencias-->
</body>
</html>