<script>
//document.getElementById("fechaNac").value = "09-02-2009";
</script>
@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Datos Generales</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" class="form-control" placeholder="Nombre(s)" required value="{{ $datos->Nombre }}">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" placeholder="Apellido paterno" required value="{{ $datos->Nombre }}">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" placeholder="Apellido materno" value="{{ $datos->estadoCivil_id }}" >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sexo">Sexo</label>
          <select class="custom-select" id="sexo" required>
            <option selected>Selecciona una opción</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="EC">Estado Civil</label>
          <select class="custom-select" id="EC" required>
            @foreach( $estadosCiviles as $clave => $estado )
              @if ($datos->estadoCivil_id==($clave+1))
                <option selected value="{{ $clave }}">{{ $estado->EstadoCivil }}</option>
              @else
                <option value="{{ $clave }}">{{ $estado->EstadoCivil }}</option>
              @endif

            @endforeach
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="nacimiento">País de nacimiento</label>
          <select class="custom-select" id="nacimiento" required>
            @foreach( $paises as $clave => $pais )
              @if ($datos->pais_id==($clave+1))
                <option selected value="{{ $clave }}">{{ $pais->Pais }}</option>
              @else
                <option value="{{ $clave }}">{{ $pais->Pais }}</option>
              @endif

            @endforeach
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="lugarNac">Lugar de nacimiento</label>
          <input type="text" class="form-control" placeholder="Lugar de nacimiento" id="lugarNac" required>
        </div>
        <div class="form-group col-md-6">
          <label for="fechaNac">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="fechaNac" value="{{
            preg_split('[\s]', $datos->FechaNac)[0]
            }}">
        </div>
      </div>



      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="domicilio">Domicilio</label>
          <input type="text" class="form-control" placeholder="Dirección" id="domicilio" required>
        </div>
        <div class="form-group col-md-3">
          <label for="Municipio">Municipio</label>
          <input type="text" class="form-control" id="Municipio">
        </div>
        <!-- ocultar no mexico -->
        <div class="form-group col-md-2">
          <label for="cp">Código postal</label>
          <input type="text" class="form-control" id="cp" maxlength="15" required>
        </div>
      </div>
      <!--Se oculta se no es mexicano -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="ef">Entidad federativa</label>
              <select class="custom-select" id="ef" required>
                <option selected>Selecciona una opción</option>
                <option value="1">LLenar de la base</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="RFC">RFC</label>
              <input type="text" class="form-control" placeholder="RFC" id="RFC">
            </div>
            <div class="form-group col-md-4">
              <label for="curp">Curp</label>
              <input type="text" class="form-control" placeholder="Curp" id="curp">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="telefono">Contacto Telefónico</label>
              <input type="text" class="form-control" id="telefono" required>
            </div>
            <div class="form-group col-md-6">
              <label for="telefono2">Contacto Telefónico 2</label>
              <input type="text" class="form-control" id="telefono2" >
            </div>

          </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="correo">Correo</label>
          <input type="email" class="form-control" id="correo" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="correoInstitucional">Correo Institucional</label>
          <input type="email" class="form-control" id="correoInstitucional" placeholder="nombre@correo.buap.mx">
        </div>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="twitter">Twitter</label>
        <input type="text" class="form-control" placeholder="@usuario" id="twitter">
      </div>
      <div class="form-group col-md-6">
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control"  id="facebook">
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection"
