@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Memoria</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Título de la memoria</label>
          <input type="text" class="form-control" placeholder="Título de la memoria" required >
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label >Autor:</label>
          <input type="text" class="form-control" placeholder="Buscar al autor" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
            <label>Título de la publicación</label>
          <input type="text" class="form-control" placeholder="Título de la publicación" required >
        </div>
        <div class="form-group col-md-3">
            <label>Páginas de*:</label>
          <input type="number" class="form-control" placeholder="Páginas de" required >
        </div>
        <div class="form-group col-md-3">
            <label>a*;</label>
          <input type="number" class="form-control" placeholder="a" >
        </div>
      </div>
      <div class="form-row">

          <div class="form-group col-md-4">
            <label for="Año de la publicación">Año de la publicación</label>
            <input type="text" class="form-control" placeholder="Año" >
          </div>
        <div class="form-group col-md-4">
          <label for="País">País</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>



      </div>
      @include('..\layouts\palabrasClave')
      @include('..\layouts\area')

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="fechaNac">Apoyo</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      @include('../layouts/archivo')
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection
