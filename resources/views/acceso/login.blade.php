@extends('../layouts.login')
@section('title','Login')
@section('content')
   <div class="page-content container">
		<div class="row">

			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
                        			        <div class="box">
                    
			            <div class="content-wrap">
			            	
                        <form action="{{route('acceso_login_post')}}" name="form" method="post" accept-charset="utf-8">
                        	{{ csrf_field() }} 
                        	@if(Session::has('mensaje'))
							<div class="alert alert-{{ Session::get('css') }}">
							    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							    {{ Session::get('mensaje') }}
							</div>
							@endif
    @if ($errors->any())
        <div class="alert alert-danger">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>   
        @endforeach
            </ul>
        </div>
    @endif
                         <h6>Ingrese sus datos</h6>
			                
                       		<input class="form-control" type="text" placeholder="email@cencosud.com" name="correo" autofocus="true" value="{{ old('correo') }}" />
			                <input class="form-control" type="password" placeholder="Contraseña" name="pass" />
			                <div class="action">
			                    <a class="btn btn-primary signup" href="javascript:void(0);" onclick="document.form.submit();">Entrar</a>
								<hr />
								<a href="" title="¿No puedes entrar? Haz clic aquí">¿No puedes entrar? Haz clic aquí</a>
			                </div>            
                         </form>       
			            </div>
			        </div>

			        <div class="already"><p>Todos los derechos reservados - 2018</p>
			        </div>
                    
			    </div>
			</div>
		</div>
	</div>   	  	
@endsection