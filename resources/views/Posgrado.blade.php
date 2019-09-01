@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Posgrado</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label class="obligatorio" for="nombre del Posgrado">Nombre del Posgrado</label>
          <input type="text" class="form-control" placeholder="Nombre del posgrado" required maxlength="100">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
