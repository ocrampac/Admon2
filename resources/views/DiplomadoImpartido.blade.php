@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Diplomado impartido</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Institución">Institución*:</label>
          <input type="text" class="form-control" placeholder="Institución" required maxlength="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nombre del diplomado">Nombre del diplomado*:</label>
          <input type="text" class="form-control" placeholder="Nombre del diplomado" required maxlength="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre del curso">Nombre del curso o asignatura*:</label>
          <input type="text" class="form-control" placeholder="Nombre del curso o asignatura" required maxlength="100">
        </div>
        <div class="form-group col-md-3">
          <label for="Año">Año*:</label>
          <input type="number" class="form-control" required >
        </div>
        <div class="form-group col-md-3">
          <label for="Horas totales">Horas totales*:</label>
          <input type="number" class="form-control" required >
        </div>
      </div>
      @include('../layouts/area')
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
