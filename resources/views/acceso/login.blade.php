@extends('../layouts.sb_admin_login')
@section('title','Login')
@section('content')
  <div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
              	<img src="{{asset('public/img/login.png')}}" />
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Acceso a DAD</h1>
                    <p>Recuerde ingresar sus datos de la red CENCOSUD</p>
                  </div>
                  <form class="user" name="form" method="post" action="{{route('acceso_login_post')}}" accept-charset="utf-8" autocomplete="nope">
                    {{ csrf_field() }} 
                    <!--helpers mensajes flash-->
                    @if(Session::has('mensaje'))
                    <div class="alert alert-{{ Session::get('css') }}" role="alert" style="font-size: 13px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" title="Cerrar">&times;</button>
                        {{ Session::get('mensaje') }}
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert" style="font-size: 13px;">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true" title="Cerrar">&times;</button>
                            <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>   
                        @endforeach
                            </ul>
                        </div>
                    @endif
                    <!--//helpers mensajes flash-->
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="uid" name="uid" aria-describedby="emailHelp" placeholder="Usuario CENCOSUD" required="true" autocomplete="nope" />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Contraseña CENCOSUD" required="true" autocomplete="nope" />
                    </div>
                    
                      <!--<a href="javascript:void(0);" onclick="document.form.submit();" class="btn btn-primary btn-user btn-block" title="Entrar">-->
                        <a href="{{route('index_index')}}" class="btn btn-primary btn-user btn-block" title="Entrar">
                      Entrar
                    </a>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{route('soporte_no_puedo_entrar')}}" title="¿Necesitas ayuda para ingresar?">¿Necesitas ayuda para ingresar?</a>
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
@push('scripts')
<script type="text/javascript">
  window.onload = function()
  {
    document.form.reset();
    document.form.uid.focus();
  };
</script>
@endpush