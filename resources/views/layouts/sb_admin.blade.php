<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Despacho a Domicilio - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com" />
    <link rel="shortcut icon" href="{{asset('public/img/favicon.ico')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet" />
  @stack('css')
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar (bg-gradient-primary)-->
    <ul class="navbar-nav mi-color sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index_index')}}" title="Inicio">
         <img src="{{asset('public/img/logo.png')}}" style="width: 60px; height: 50px" />
         <div class="sidebar-brand-text mx-3">DAD <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index_index')}}" title="Inicio">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administración
      </div>

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_1" aria-expanded="true" aria-controls="menu_1" title="Configuración">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Configuración</span>
        </a>
        <div id="menu_1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Módulos"><i class="fas fa-folder"></i> Módulos</a>
            <a class="collapse-item" href="javascript:void(0);" title="Perfiles"><i class="fas fa-chalkboard-teacher"></i> Perfiles</a>
            <a class="collapse-item" href="javascript:void(0);" title="Usuarios"><i class="fas fa-user"></i> Usuarios</a>
            <a class="collapse-item" href="javascript:void(0);" title="Roles"><i class="fas fa-users"></i> Roles</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_2" aria-expanded="true" aria-controls="menu_2" title="Administración">
          <i class="fas fa-tools"></i>
          <span>Administración</span>
        </a>
        <div id="menu_2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Centro de Despacho"><i class="fas fa-dolly-flatbed"></i> Centro de Despacho</a>
            <a class="collapse-item" href="javascript:void(0);" title="Tiendas"><i class="fas fa-store"></i> Tiendas</a>
            <a class="collapse-item" href="javascript:void(0);" title="Bodegas"><i class="fas fa-warehouse"></i> Bodegas</a>
            <a class="collapse-item" href="javascript:void(0);" title="Cortinas"><i class="fas fa-pallet"></i> Cortinas</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        Monitores
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_3" aria-expanded="true" aria-controls="menu_3" title="Monitor OD">
          <i class="fas fa-columns"></i>
          <span>Monitor OD</span>
        </a>
        <div id="menu_3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Órdenes de Despacho"><i class="fas fa-file-alt"></i> Órdenes de Despacho</a>
            <a class="collapse-item" href="javascript:void(0);" title="Guías de Despacho"><i class="fas fa-file-pdf"></i> Guías de Despacho</a>
            <a class="collapse-item" href="javascript:void(0);" title="Retiros"><i class="fas fa-truck-moving"></i> Retiros</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Reportes y comunicación
      </div>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_4" aria-expanded="true" aria-controls="menu_4" title="Reportes">
          <i class="fas fa-th-list"></i>
          <span>Reportes</span>
        </a>
        <div id="menu_4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-list-ol"></i> Guías impresas</a>
            <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-list-ol"></i> Órdenes no impresas</a>
            <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-list-ol"></i> Guías generadas hoy</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        Soporte
      </div>
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_5" aria-expanded="true" aria-controls="menu_5" title="Soporte">
          <i class="fas fa-headset"></i>
          <span>Tickets</span>
        </a>
        <div id="menu_5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Reportar un error"><i class="fas fa-list-alt"></i> Tickets</a>
          </div>
        </div>
      </li>
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_6" aria-expanded="true" aria-controls="menu_6" title="Soporte">
          <i class="fas fa-mail-bulk"></i>
          <span>Soporte</span>
        </a>
        <div id="menu_6" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Reportar un error"><i class="fas fa-envelope"></i> Reportar un error</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar Orden de Despacho" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" title="Buscar Orden de Despacho">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item ">
              <a class="nav-link "  >
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Helpers::formatea_fecha(date('Y-m-d'))}} | <span id="spanreloj"></span></span>
                
              </a>
             
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              @if(Auth::check())
                 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}(Administrador) <i class="fas fa-caret-down"></i></span>
                
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="javascript:void(0);" title="Mi perfil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mi perfil
                </a>
                <a class="dropdown-item" href="javascript:void(0);" title="Mis notificaciones">
                  <i class="fas fa-bell fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mis notificaciones
                </a>
                <a class="dropdown-item" href="javascript:void(0);" title="Mis tickets">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mis tickets
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal" title="Cerrar Sesión">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
              @else
                <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anónimo</span>
                
              </a>
              @endif
             
              @if(Auth::check())
              
              @endif
            </li>
            
           
 <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">2</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Notificaciones
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);" title="Reinicio servidor">
                 <div class="font-weight-bold ">
                    <div class="text-truncate">Reinicio servidor</div>
                    <div class="small text-gray-500">8 de marzo de 2019</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center " href="javascript:void(0);" title="Intermitencias Paperless">
                 <div class="font-weight-bold ">
                    <div class="text-truncate">Intermitencias Paperless</div>
                    <div class="small text-gray-500">8 de marzo de 2019</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="javascript:void(0);">Leer todas mis notificaciones</a>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!--contenido-->
            @yield('content')
          <!--/contenido-->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los derechos reservados - Desarrollado por Célula Supply Chain {{date('Y')}}</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Realmente desea salir del sistema?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!--<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>-->
        <div class="modal-footer">
          <!--<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>-->
          <a class="btn btn-primary" href="{{route('acceso_salir')}}" title="Cerrar Sesión">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
<!--Dependencias-->
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>
  @stack('scripts')
  <!--scripts propios-->
  <script type="text/javascript">var base_url='{{Helpers::base_path()}}';</script>
  <script src="{{asset('public/js/funciones.js')}}"></script>
  <!--/scripts propios-->

<!--/Dependencias-->
</body>
</html>