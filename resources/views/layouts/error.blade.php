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
                  


               </div>
              
            </div>
         </div>
    </div>
 
    <div class="page-content">
        <div class="row">
          
          <!--contenido-->
            @yield('content')
          <!--/contenido-->
        </div>
    </div>

    <footer class="footerfix">
         <div class="container">
         
            <div class="copy text-center">
               Todos los derechos reservados - 2018
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

<!--/Dependencias-->
</body>
</html>