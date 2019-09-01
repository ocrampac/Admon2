@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Datos Laborales</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="trabajoActual">
            <label class="custom-control-label" for="Trabajo actual">¿Es su empleo actual?</label>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Nombre de la empresa o institución*:</label>
          <input type="text" class="form-control" placeholder="Nombre de la empresa o institución" required >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Nombre del departamento*:</label>
          <input type="text" class="form-control" placeholder="Nombre del departamento" required >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Dirección*:</label>
          <input type="text" class="form-control" placeholder="Dirección de la empresa" required >
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Contacto telefónico 1*:</label>
          <input type="text" class="form-control" required >
        </div>
        <div class="form-group col-md-6">
          <label>Contacto telefónico 2*:</label>
          <input type="text" class="form-control" required >
        </div>
      </div>

      <div class="form-row">
        <h4>Periodo</h4>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Fecha inicio">Inicio*:</label>
          <input type="date" class="form-control" id="fechaInicio" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Fecha fin">Fin*:</label>
          <input type="date" class="form-control" id="fechaFin" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Nombre del puesto/Nombramiento*:</label>
          <input type="text" class="form-control" placeholder="Nombre del puesto/Nombramiento" required >
        </div>
      </div>
      @include('../layouts/area')
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection"
