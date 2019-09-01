@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Tesís dirigidas</h2>
  </div>
@endsection
@section('section')
    <form class="container">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Institución*:</label>
            <input type="text" class="form-control" placeholder="Institución" required >
          </div>
        </div>


      <div class="form-row">
        <div class="form-group col-md-12">
          <label >Título de la tesis*:</label>
          <input type="text" class="form-control" placeholder="Título de la tesis" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label >Estado de la tesis*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
            <option value="1">LLenar de la base</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label >Autor:</label>
          <input type="text" class="form-control" placeholder="Buscar al autor" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nombre del programa">Grado académico*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      @include('../layouts/area')
      @include('../layouts/archivo')


    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
