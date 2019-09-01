@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Reportes técnicos</h2>
  </div>
@endsection
@section('section')
    <form class="container">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Título">Título*:</label>
          <input type="text" class="form-control" placeholder="Título del reporte" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Institución*:</label>
          <input type="text" class="form-control" placeholder="Institución" required >
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Modalidad">Fecha de entrega*:</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Fecha de ingreso">Fecha de publicación*:</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Número de páginas">Número de páginas*:</label>
          <input type="number" class="form-control" placeholder="Número de páginas" required>
        </div>

      </div>


      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Origen del reporte técnico:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Descripción*:</label>
          <textarea  placeholder="Descripción" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Objetivos*:</label>
          <textarea  placeholder="Objetivos" class="form-control"></textarea>
        </div>
      </div>

      @include('../layouts/palabrasClave')
      @include('../layouts/archivo')


    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
