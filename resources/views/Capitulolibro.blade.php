@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Capítulo de libro</h2>
  </div>
@endsection
@section('section')
  <form class="container">
    <div class="form-row">
      <div class="col-12">
          Tiene ISBN*:
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="impreso" value="option1" >
            <label class="form-check-label" for="exampleRadios1">
              Impreso
            </label>
            <input class="form-check-input" type="radio" name="exampleRadios" id="electronico" value="option2" >
            <label class="form-check-label" for="exampleRadios1">
              Electrónico
            </label>
            <input class="form-check-input" type="radio" name="exampleRadios" id="ambos" value="option3" checked>
            <label class="form-check-label" for="exampleRadios1">
              Ambos
            </label>
          </div>
        </div>
      </div>
      <br>
      <div class="form-row">
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="ISBN impreso">ISBN impreso:</label>
        <input type="text" class="form-control" placeholder="ISBN impreso" id="isbn_impreso" >
      </div>

      <div class="form-group col-md-6">
        <label for="ISSN electronico">ISBN electrónico:</label>
        <input type="text" class="form-control" placeholder="ISBN electrónico" id="isbn_electronico" >
      </div>

    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="TítuloLibro">Título del libro*:</label>
        <input type="text" class="form-control" placeholder="Título del libro" id="TítuloLibro" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="NombreRevista">Editorial*:</label>
        <input type="text" class="form-control" placeholder="Editorial" id="editorial" required>
      </div>
      <div class="form-group col-md-4">
        <label for="pagina de">Número de edición:</label>
        <input type="number" class="form-control" placeholder="Número de edición" required>
      </div>
      <div class="form-group col-md-4">
        <label for="añoPublicacion">Año de publicación:</label>
        <input type="text" class="form-control" placeholder="Año de publicación" required maxlength=4>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="TítuloLibro">Título del capítulo*:</label>
        <input type="text" class="form-control" placeholder="Título del capítulo" id="TítuloCapitulo" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="Palabra clave 1">No. de capítulo:</label>
        <input type="number" class="form-control" placeholder="No. de capítulo" >
      </div>
      <div class="form-group col-md-4">
        <label for="pagina de">Páginas de*:</label>
        <input type="number" class="form-control" placeholder="Páginas de" required>
      </div>
      <div class="form-group col-md-4">
        <label for="pagina a">a*:</label>
        <input type="number" class="form-control" placeholder="a" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="Resumen">Resumen*:</label>
        <input type="text" class="form-control" placeholder="Resumen" id="Resumen" required>
      </div>
    </div>

    @include('../layouts/area')
    @include('../layouts/archivo')
    @include('../layouts/autores')

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection"
