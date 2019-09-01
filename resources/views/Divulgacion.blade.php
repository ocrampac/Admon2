@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Divulgación</h2>
  </div>
@endsection
@section('section')
  <form class="container">
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="Título del trabajo">Título del trabajo*:</label>
        <input type="text" class="form-control" placeholder="Título del trabajo" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Tipo de participación">Tipo de participación*:</label>
        <select class="custom-select" id="participacion" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="Tipo de evento">Tipo de evento*:</label>
        <select class="custom-select" id="evento" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-8">
        <label>Institución organizadora*:</label>
        <input type="text" class="form-control" placeholder="Institución organizadora" required >
      </div>
      <div class="form-group col-md-4">
        <label for="Dirigido a">Dirigido a*:</label>
        <select class="custom-select" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="Fecha">Fecha*:</label>
        <input type="date" class="form-control" id="fecha" required>
      </div>
      <div class="form-group col-md-4">
        <label for="Tipo de divulgación y difusión">Tipo de divulgación y difusión*:</label>
        <select class="custom-select" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="Tipo de medio">Tipo de medio*:</label>
        <select class="custom-select" required>
          <option selected>Selecciona una opción</option>
        </select>
      </div>
    </div>

    @include('../layouts/palabrasClave')
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="Notas periodisticas">Notas periodisticas:</label>
        <textarea  class="form-control" id="notas" > </textarea >
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="Producto obtenido">Producto obtenido*:</label>
        <input  type="text" class="form-control" required>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="Archivo">Archivo:</label>
      <input type="file" class="form-control">
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection
