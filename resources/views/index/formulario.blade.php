@extends('../layouts.sb_admin')
@section('title','Formulario')
@section('content')
   <div class="container-fluid">

          <!-- Page Heading -->
          <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('index_index')}}">Inicio</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{route('index_tablas')}}">Tablas</a>
          </li>
          <li class="breadcrumb-item active">Formulario</li>
        </ol>
         <!--formulario-->
         
        <form name="form" method="post">
          <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                Se agregó el registro exitosamente
            </div>
          <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <ul>
                    <li>El campo Nombre está vacío</li>   
                    <li>El campo Descripción está vacío</li>   
                </ul>
            </div>
            
          <h2>Ingrese sus datos</h2>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="E-Mail" name="correo" />
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Nombre" />
            </div>
          </div>
           <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">País</label>
            <div class="col-sm-10">
              <select name="pais" class="form-control">
              <option value="0">Seleccione.....</option>
              <option value="1">Chile</option>
              <option value="2">Argentina</option>
              <option value="3">Perú</option>
              <option value="4">Colombia</option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea name="descripcion" class="form-control" placeholder="Descripción"></textarea>
            </div>
          </div>
          
          
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Opciones</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="true" />
          <label class="form-check-label" for="gridRadios1">
            Opción 1
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Opción 2
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            Opción 3
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Preferencias</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Música
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Religión
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Deportes
        </label>
      </div>
    </div>
  </div>
  <hr />
  <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Adjuntar archivo</label>
            <div class="col-sm-10">
              <input type="file" class="custom-file-input" id="customFileLang" lang="es">
              <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            </div>
          </div>
  <hr />
  <div class="form-group row">
    <div class="col-sm-10">
      <a class="btn btn-primary" href="javascript:void(0);" title="Enviar">Enviar</a>
    </div>
  </div>
</form>
         <!--/formulario-->
         

        </div>
@endsection