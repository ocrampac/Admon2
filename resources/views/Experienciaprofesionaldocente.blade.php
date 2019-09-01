@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Experiencia profesional docente</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Empresa">Empresa*:</label>
          <input type="text" class="form-control" placeholder="Empresa" required maxlength="100">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="Puesto">Puesto*:</label>
          <input type="text" class="form-control" placeholder="Puesto" required maxlength="50">
        </div>
        <div class="form-group col-md-2">
          <label for="Año inicio">Año inicio*:</label>
          <input type="number" class="form-control" required >
        </div>
        <div class="form-group col-md-2">
          <label for="Año fin">Año fin*:</label>
          <input type="number" class="form-control" required >
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
