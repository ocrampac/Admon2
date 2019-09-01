@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Experiencia Docente</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Institución">Institución*:</label>
          <input type="text" class="form-control" placeholder="Institución" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="AñoInicio">Año Inicio</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
          <label for="nacimiento">Año fin</label>
          <input type="text" class="form-control" required>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection"
