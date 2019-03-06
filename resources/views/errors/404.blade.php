@extends('../layouts.error')

@section('content')
    <div class="container">
    	 <!--migas de pan-->
        <ol class="breadcrumb">
              <li><a href="{{route('index_index')}}">Inicio</a></li>
              <li><a href="javascript:void(0);" onclick="history.back();">Volver atrás</a></li>
              <li class="active">Página de error </li>
            </ol>
            <!--/migas de pan-->
    	
    <p>
        <div class="panel panel-info">
            <div class="panel panel-heading"><strong>Error 404</strong></div>
            <div class="panel panel-body">
                Si necesita ayuda, contacte al administrador desde <a href="{{route('soporte_index')}}">aquí</a>.
            </div>
        </div>
    </p>
    </div>
@endsection