@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Práctica internacional</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nombre del programa">Grado académico*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>País donde se realizó la práctica*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Duración (meses)*:</label>
          <input type="number" class="form-control" placeholder="5 meses" required >
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
