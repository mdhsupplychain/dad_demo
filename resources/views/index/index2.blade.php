@extends('../layouts.sb_admin')
@section('title','Dashboard')
@section('content')
   <div class="container-fluid">

           <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a>Inicio</a>
          </li>
        </ol>
          

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="javascript:void(0);" title="Configuración">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Configuración
                      </div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wrench fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="javascript:void(0);" title="Administración">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Administración</div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tools fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="javascript:void(0);" title="Monitor OD">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Monitor OD</div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-columns fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="javascript:void(0);" title="Tickets pendientes">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tickets pendientes</div>
                      </a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-headset fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
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
    
@endsection
@push('css')
@endpush
@push('scripts')
 <script src="{{asset('public/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('public/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('public/js/demo/chart-pie-demo.js')}}"></script>
@endpush