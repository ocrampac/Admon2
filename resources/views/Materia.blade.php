@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Materia</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nombre del programa">Nombre de la materia*:</label>
          <input type="text" class="form-control" placeholder="Nombre del programa" required maxlength="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Posgrado al que pertenece*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
