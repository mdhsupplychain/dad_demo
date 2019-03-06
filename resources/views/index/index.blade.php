@extends('../layouts.frontend')
@section('title','Dashboard')
@section('content')
    <div class="col-md-9">
            <!--migas de pan-->
            
            <!--/migas de pan--> 
             
                
                
                
                <div class="row">
                    <div class="col-md-12 panel-default">
                        <div class="content-box-header panel-heading">
                            <div class="panel-title ">Despacho a Domicilio - Dashboard</div>
                        
                        </div>
                        <div class="content-box-large box-with-header">
                            <div>

                                <div class="row">
                                    <!--fila-->
                                    <div class="col-sm-6 col-md-3">
                                        <div> 
                                            <a href="" class="thumbnail" title="Usuarios">
                                            <img class="icono_home" src="{{asset('public/images/user.png')}}" />
                                            <div class="caption center">
                                                <h3>Usuarios</h3>   
                                            </div>
                                            </a>
                                            
                                        </div> 
                                    </div>
                                    <!--/fila-->
                                    <!--fila-->
                                    <div class="col-sm-6 col-md-3">
                                        <div> 
                                            <a href="{{route('ordenes_de_despacho_index')}}" class="thumbnail" title="Monitor OD">
                                            <img class="icono_home" src="{{asset('public/images/monitor_od.png')}}" />
                                            <div class="caption center">
                                                <h3>Monitor OD</h3>   
                                            </div>
                                            </a>
                                            
                                        </div> 
                                    </div>
                                    <!--/fila-->
                                    
                                    <!--fila-->
                                    <div class="col-sm-6 col-md-3">
                                        <div> 
                                            <a href="{{route('soporte_index')}}" class="thumbnail" title="Soporte">
                                            <img class="icono_home" src="{{asset('public/images/soporte.png')}}" />
                                            <div class="caption center">
                                                <h3>Soporte</h3>   
                                            </div>
                                            </a>
                                            
                                        </div> 
                                    </div>
                                    <!--/fila-->
                                   
                                
                                  
                                  
                                   
                            </div>
                        </div>
                    </div>
                </div>
          </div>    
                     
    
@endsection