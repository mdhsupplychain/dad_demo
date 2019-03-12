@extends('../layouts.sb_admin')
@section('title','Dashboard')
@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a>Inicio</a>
          </li>
          <!--<li class="breadcrumb-item active">Overview</li>-->
        </ol>

        <div class="row container">
          
          
         <ul>
           <li><a href="{{route('index_index1')}}" target="_blank">Ejemplo inicio 1</a></li>
           <li><a href="{{route('index_index2')}}" target="_blank">Ejemplo inicio 2</a></li>
           <li><a href="{{route('index_index3')}}" target="_blank">Ejemplo inicio 3</a></li>
           <li><a href="{{route('acceso_login1')}}" target="_blank">Ejemplo login 1</a></li>
           <li><a href="{{route('acceso_login2')}}" target="_blank">Ejemplo login 2</a></li>
           <li><a href="{{route('index_tablas')}}" target="_blank">Ejemplo tablas</a></li>
           <li><a href="{{route('index_formulario')}}" target="_blank">Ejemplo formulario</a></li>
         </ul>
        
        </div>
          
          
          

        </div>
        <!-- /.container-fluid -->
                     
    
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/card.css')}}" />
@endpush