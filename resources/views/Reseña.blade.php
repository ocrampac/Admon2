@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Reseñas</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Título de la reseña">Título de la reseña*</label>
          <input type="text" class="form-control" placeholder="Título de la reseña" required>
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
          <label >Título de la publicación*:</label>
          <input type="text" class="form-control" placeholder="Título de la publicación" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="Página de">Página de*:</label>
          <input type="number" class="form-control"  required >
        </div>
        <div class="form-group col-md-2">
          <label for="Página hasta">Hasta*:</label>
          <input type="number" class="form-control"  required >
        </div>
        <div class="form-group col-md-4">
          <label for="Fecha de publicación">Fecha de publicación*:</label>
          <input type="date" class="form-control"  required >
        </div>
        <div class="form-group col-md-4">
          <label for="Pais">País</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
            <option value="1">LLenar de la base</option>
          </select>
        </div>
    </div>



      @include('../layouts/palabrasClave')
      @include('../layouts/archivo')


    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
