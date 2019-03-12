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
        
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user"></i>
                </div>
                <div class="mr-5">Usuarios</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="javascript:void(0);" title="Usuarios">
                <span class="float-left">Entrar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-columns"></i>
                </div>
                <div class="mr-5">Monitor OD</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="javascript:void(0);" title="Monitor OD">
                <span class="float-left">Entrar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-mail-bulk"></i>
                </div>
                <div class="mr-5">Soporte</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="javascript:void(0);" title="Soporte">
                <span class="float-left">Entrar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-mail-bulk"></i>
                </div>
                <div class="mr-5">Soporte</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="javascript:void(0);" title="Soporte">
                <span class="float-left">Entrar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-mail-bulk"></i>
                </div>
                <div class="mr-5">Soporte</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="javascript:void(0);" title="Soporte">
                <span class="float-left">Entrar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
          <!-- Content Row -->
         
            <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">¿Cómo vamos?</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">¿Cómo vamos hoy?</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Ingresadas
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Guías de Despacho
                    </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        </div>
        <!-- /.container-fluid -->
                     
    
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/card.css')}}" />
@endpush
@push('scripts')
 <script src="{{asset('public/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('public/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('public/js/demo/chart-pie-demo.js')}}"></script>
@endpush