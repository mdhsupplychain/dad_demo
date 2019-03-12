@extends('../layouts.sb_admin_login2')
@section('title','Login')
@section('content')
  <div class="container">
    <div class="col-xl-6 card card-login mx-auto mt-5">
      <div class="card-header">Acceso a DAD </div>


      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Usuario CENCOSUD" required="required" autofocus="autofocus">
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña CENCOSUD" required="required">
            </div>
          </div>
          
          <a class="btn btn-primary btn-block" href="{{route('index_index')}}">Entrar</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="javascript:void(0);" title="¿Necesitas ayuda para ingresar?">¿Necesitas ayuda para ingresar?</a>
        </div>
      </div>
    </div>
  </div>

@endsection