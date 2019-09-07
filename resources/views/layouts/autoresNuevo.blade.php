<div class="card-body">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal3">
    Agregar nuevo colaborador
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModal3Label">Nuevo colaborador</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>

        </div>
        <div class="modal-body">
          <form class="container" method="post" action="nuevoAutor" >
            @csrf
            <div class="form-group">
              <label for="Nombre">Nombre*:</label>
              <input type="text" class="form-control" placeholder="Nombre" name='Nombre' required>
            </div>
            <div class="form-group">
              <label for="Primer apellido">Primer apellido*:</label>
              <input type="text" class="form-control" placeholder="Primer apellido" name="ApellidoP" required>
            </div>
            <div class="form-group">
              <label for="Segundo apellido">Segundo apellido:</label>
              <input type="text" class="form-control" placeholder="Segundo apellido" name="ApellidoM" required>
            </div>
            <button type="submit" class="btn btn-primary modal-footer">
              Agregar
            </button>
          </form>

        </div>

      </div>
    </div>
  </div>
  {{-- $notas->links() --}}
{{--Colocar un modal para registrar Autores --}}
</div>
