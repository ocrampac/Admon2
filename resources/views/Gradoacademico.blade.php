@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Grados academicos</h2>
  </div>
@endsection
@section('section')
    <form class="container">

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Nivel de escolaridad">Nivel de escolaridad</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>


        <div class="form-group col-md-8">
          <label for="Título">Título</label>
          <input type="text" class="form-control" placeholder="Título"required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Modalidad">Modalidad*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="Fecha de ingreso">Fecha de ingreso*:</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Tiempo dedicado">Tiempo dedicado*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Fecha conclución de materias">Fecha en la que concluyó las materias 100%*:</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Promedio">Promedio*:</label>
          <input type="number" step="0.01" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Tipo de titulación">Tipo de titulación*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="Nombre del trabajo de titulación">Nombre del trabajo de titulación:</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
          <label for="Archivo">Archivo:</label>
          <input type="file" class="form-control" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="Fecha en la que obtuvo el título">Fecha en la que obtuvo el título*:</label>
          <input type="date" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Cédula profesional">Cédula profesional*:</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="form-group col-md-3">
          <label for="Fecha en la que obtuvo la cédula">Fecha en la que obtuvo la cédula*:</label>
          <input type="date" class="form-control" required>
        </div>

      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Institución*:</label>
          <input type="text" class="form-control" placeholder="Institución" required >
        </div>
        <div class="form-group col-md-6">
          <label>Escuela:</label>
          <input type="text" class="form-control" placeholder="Escuela" >
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label>País*:</label>
          <select class="custom-select" required>
            <option selected>Selecciona una opción</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label>Estado:</label>
          <input type="text" class="form-control" placeholder="Estado" >
        </div>
        <div class="form-group col-md-4">
          <label>Matrícula:</label>
          <input type="text" class="form-control" placeholder="Matrícula" >
        </div>
      </div>

      @include('../layouts/beca')



      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection
