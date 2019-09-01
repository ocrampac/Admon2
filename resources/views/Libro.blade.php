@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Libro</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="col-12">
            Tiene ISBN*:
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="opISBN">Impreso
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="opISBN">Electrónico
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="opISBN" >Ambos
              </label>
            </div>

          </div>
        </div>
        <br>
        <div class="form-row">
        </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ISBN impreso">ISBN impreso:</label>
          <input type="text" class="form-control" placeholder="ISBN impreso" id="isbn_impreso" >
        </div>

        <div class="form-group col-md-4">
          <label for="ISBN electronico">ISBN electrónico:</label>
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
        <div class="form-group col-md-6">
          <label>País*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Idioma*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Año de publicación">Año de publicación*:</label>
          <input type="text" class="form-control" placeholder="Año de publicación" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Volumen">Volumen:</label>
          <input type="number" class="form-control" placeholder="Volumen" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Tomo">Tomo:</label>
          <input type="number" class="form-control" placeholder="Tomo" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Tiraje">Tiraje:</label>
          <input type="text" class="form-control" placeholder="Tiraje" >
        </div>
        <div class="form-group col-md-4">
          <label for="Número de páginas">Número de páginas*:</label>
          <input type="number" class="form-control" placeholder="Número de páginas" required>
        </div>

      </div>
      @include('../layouts/palabrasClave')

      <div class="form-row">
        <div class="form-group col-md-10">
          <label for="Editorial">Editorial*:</label>
          <input type="text" class="form-control" placeholder="Editorial" required>
        </div>
        <div class="form-group col-md-2">
          <label for="Número de edición">Número de edición*:</label>
          <input type="text" class="form-control" placeholder="Número de edición" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Año de edición">Año de edición*:</label>
          <input type="text" class="form-control" placeholder="Año de edición" required >
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ISBN traducido">ISBN traducido:</label>
          <input type="text" class="form-control" placeholder="ISBN traducido" id="isbn_traducido" >
        </div>
        <div class="form-group col-md-8">
          <label for="TítuloTraducido">Título traducido*:</label>
          <input type="text" class="form-control" placeholder="Título traducido" id="Títulotraducido" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Idioma traducido:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Apoyo institucional recibido:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>
      @include('../layouts/archivo')


    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
