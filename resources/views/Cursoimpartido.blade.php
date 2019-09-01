@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Curso impartido</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nombre del programa">Nombre del programa*:</label>
          <input type="text" class="form-control" placeholder="Nombre del programa" required maxlength="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nombre del curso">Nombre del curso o asignatura*:</label>
          <input type="text" class="form-control" placeholder="Nombre del curso o asignatura" required maxlength="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sexo">Horas totales por curso*:</label>
          <input type="number" class="form-control" placeholder="Horas totales por curso" required >
        </div>
        <div class="form-group col-md-4">
          <label for="FechaInicio">Fecha inicio*:</label>
          <input type="date" class="form-control" id="fechaInicio" required>
        </div>
        <div class="form-group col-md-4">
          <label for="FechaFin">Fecha fin*:</label>
          <input type="date" class="form-control" id="fechaFin" required>
        </div>
      </div>
      @include('../layouts/area')
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
