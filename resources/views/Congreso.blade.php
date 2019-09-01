@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Congreso</h2>
  </div>
@endsection
@section('section')
  <form class="container">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="NombreCongreso">Nombre del congreso*:</label>
        <input type="text" class="form-control" placeholder="Nombre del congreso" id="NombreCongreso" required>
      </div>

      <div class="form-group col-md-6">
        <label for="TítuloTrabajo">Título del trabajo*:</label>
        <input type="text" class="form-control" placeholder="Título del trabajo" id="TítuloTrabajo" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="sexo">Tipo de participación en congreso*:</label>
        <select class="custom-select" id="participacion" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="País">País*:</label>
        <select class="custom-select" id="pais" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="Fecha">Fecha*:</label>
        <input type="date" class="form-control" id="fecha" required>
      </div>
    </div>

    @include('../layouts/palabrasClave')
    @include('../layouts/archivo')
    @include('../layouts/autores')

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection"
