@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Profesor</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Teléfono del trabajo">Teléfono de trabajo </label>
          <input type="text" class="form-control" >
        </div>
        <div class="form-group col-md-6">
          <label for="Adscripción">Adscripción</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Categoría">Categoría </label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="Tipo de contrato">Tipo de contrato</label>
          <select class="custom-select">
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Categoría">Estatus </label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="Adscripción">Fecha de ingreso</label>
          <input type="date" class="form-control" >
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection"
