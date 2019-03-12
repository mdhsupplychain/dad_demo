@extends('../layouts.ajax')
@section('title','Dashboard')
@section('content')
   
                     
    
<!--ajax-->
<div class="container">
  <div class="row" style="font-size: 13px;">
    <div class="alert alert-primary" role="alert" style="width: 100%;">OP <strong>1896255</strong> (interno) || OD <strong>290719828 (externo)</strong></div>
    <div class="col-md-12">
            <h2>Encabezado</h2>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>OP (Interno)</th>
                  <th>OD (Externo)</th>
                  <th>Zona</th>
                  <th>Estado</th>
                  <th>Cliente</th>
                  <th>Centro Despacho</th>
                  <th>Origen</th>
                  <th>Tipo Bulto</th>
                  <th>Tipo Carga</th>
                  <th>Comuna</th>
                  <th>Fecha Compra</th>
                  <th>OBS. Ingreso</th>
                  <th>Bodega/Cortina</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1896255</td>
                  <td>290719828</td>
                  <td>
                                          No declarado
                                      </td>
                  <td>
                                          Ingresada
                  </td>
                  <td>JORGE</td>
                  <td>
                                        Centro de Despacho
                  </td>
                  <td>
                                        SAP
                  </td>
                  <td>
                                        Mediano
                  </td>
                  <td>
                                        Normal
                  </td>
                  <td>
                                        CONCHALI
                  </td>
                  <td>08-03-2019</td>
                  <td>0290719828</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <h2>Detalle (3 en total)</h2>
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Tipo Carga</th>
                  <th>Estado</th>
                  <th>Unidad de Medida</th>
                  <th>Código</th>
                  <th>Código Secundario</th>
                  <th>Cantidad</th>
                  <th>Descripción</th>
                  <th>Línea OP</th>
                  <th>Precio Unitario</th>
                  <th>Almacén</th>
                </tr>
              </thead>
              <tbody>
                                
                  <tr>
                    <td>1</td>
                    <td>
                                        Normal
                    </td>
                    <td>
                                                                                          
                      No Declarado
                  </td>
                  <td>
                                        Unidad
                  </td>
                  <td>7807993365023</td>
                  <td>000000000001158161</td>
                  <td>3.00</td>
                  <td>QUITASOL PLAYA PARA SILLA UV+50 OUTZEN</td>
                  <td>0</td>
                  <td>$10.990</td>
                  <td></td>
                  </tr>
                                
                  <tr>
                    <td>2</td>
                    <td>
                                        Normal
                    </td>
                    <td>
                                                                                          
                      No Declarado
                  </td>
                  <td>
                                        Unidad
                  </td>
                  <td>2082003374058</td>
                  <td>000000000001148937</td>
                  <td>2.00</td>
                  <td>RADIADOR ELEC.INFRARR BETTERLIF QH.1200C</td>
                  <td>0</td>
                  <td>$29.990</td>
                  <td></td>
                  </tr>
                                
                  <tr>
                    <td>3</td>
                    <td>
                                        Normal
                    </td>
                    <td>
                                                                                          
                      No Declarado
                  </td>
                  <td>
                                        Unidad
                  </td>
                  <td>2082000218911</td>
                  <td>000000000000001501</td>
                  <td>1.00</td>
                  <td>FLETES EASY</td>
                  <td>0</td>
                  <td>$4.989</td>
                  <td></td>
                  </tr>
                              </tbody>
            </table>  
      </div>
  </div>
</div>
<!--/ajax-->
@endsection