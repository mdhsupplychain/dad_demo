@extends('../layouts.sb_admin')
@section('title','Dashboard')
@section('content')
   <div class="container-fluid">

          <!-- Page Heading -->
          <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('index_index')}}">Inicio</a>
          </li>
          <li class="breadcrumb-item active">Órdenes de Despacho</li>
        </ol>
          <p class="mb-4">Texto de ayuda en caso de que se necesite añadir alguna instrucción para el operador que trabajará con este módulo</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 fondo_azul_tipo_panel derecha">
              <ul class="lista_horizontal ">
                      <li><span>Buscar por:</span></li>
                      <li><a href="javascript:void(0);" title="Buscar por Centro de Despacho" class="fancybox fancybox.ajax ">Centro de Despacho</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Estado" class="fancybox fancybox.ajax">Estado</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Buscar por Zona" class="fancybox fancybox.ajax">Zona</a></li>
                      <li><a href="javascript:void(0);" title="Origen" class="fancybox fancybox.ajax">Origen</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Tipo Carga" class="fancybox fancybox.ajax">Tipo Carga</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Tipo Bulto" class="fancybox fancybox.ajax">Tipo Bulto</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Comuna" class="fancybox fancybox.ajax">Comuna</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Bodega" class="fancybox fancybox.ajax">Bodega</a></li>
                      <li><a href="javascript:void(0);" title="Buscar por Cortina" class="fancybox fancybox.ajax">Cortina</a></li>
                    </ul>
            </div>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Órdenes de Despacho</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
               <!-- Topbar Search -->
          
               
                    
                    
               
                <div class="row container" >
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="dataTable_length">
                        <a href="javascript:void(0);" class="btn btn-success"><i class="fas fa-plus"></i> Agregar</a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                     <form name="buscar_orden" method="post" action="">
                     <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small"  placeholder="N° de OP // N° de OD (Sólo uno)" onkeypress="return soloNumeros(event)" aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-success" type="button" title="Buscar Orden de Despacho">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                    </form>
                  </div>
                  
                </div>
                    
                <br />
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>OP (Interno)</th>
                      <th>OD (Externo)</th>
                      <th>Centro de Despacho</th>
                      <th>Origen</th>
                      <th>Fecha</th>
                      <th>Detalle</th>
                      <th>Imprimir</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @for($i=1;$i<11;$i++)
                        <!--ítem-->
                        <tr>
                      <td>18962{{$i}}</td>
                      <td>2907198{{$i}}</td>
                      <td>Bodega Easy La Reina</td>
                      <td>SAP</td>
                      <td>{{date('d-m-Y')}}</td>
                      <td style="text-align: center;">
                        <a href="{{route('ordenes_de_despacho_modal_dte',['id'=>1])}}?page=1" title="Imprimir Orden número 18962{{$i}}" class="fancybox fancybox.ajax"><i class="fas fa-search text-success"></i></a>
                      </td>
                      <td style="text-align: center;">
                        <a href="{{asset('public/img/guia.pdf')}}" title="Imprimir Orden número 18962{{$i}}" target="_blank"><i class="fas fa-file-pdf text-danger"></i></a>
                      </td>
                    </tr>
                        <!--/ítem-->
                    @endfor
                   
                  </tbody>
                </table>
                   <!--paginación-->
                <div>
                  <ul class="pagination" role="navigation">
                    <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">123</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">124</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" rel="next" aria-label="pagination.next">&rsaquo;</a>
                    </li>
                  </ul>
                  </div>
                            <!--/paginación-->
              </div>
            </div>
          </div>

        </div>
@endsection
@push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('public/library/fancybox/jquery.fancybox.css')}}" />
@endpush
@push('scripts')
    <script type="text/javascript" src="{{asset('public/library/fancybox/jquery.fancybox.js')}}"></script>
    <script  type="text/javascript">
          $(document).ready(function() {
            $(".fancybox").fancybox({
              openEffect  : 'none',
              closeEffect : 'none',
            });
            });
          
    </script>
@endpush