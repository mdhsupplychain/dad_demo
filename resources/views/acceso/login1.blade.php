@extends('../layouts.sb_admin_login')
@section('title','Login')
@section('content')
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                <img src="{{asset('public/img/foto_ejemplo.png')}}" width="500" height="800" />
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Acceso a DAD</h1>
                    <p>Recuerde ingresar sus datos de la red CENCOSUD</p>
                  </div>
                  <form class="user" name="form" method="post" action="">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="uid" name="uid" aria-describedby="emailHelp" placeholder="Usuario CENCOSUD" />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Contraseña CENCOSUD" />
                    </div>
                    
                    <a href="javascript:void(0);" onclick="document.form.submit();" class="btn btn-primary btn-user btn-block" title="Entrar">
                      Entrar
                    </a>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="javascript:void(0);" title="¿Necesitas ayuda para ingresar?">¿Necesitas ayuda para ingresar?</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection