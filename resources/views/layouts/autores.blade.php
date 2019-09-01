<script>
$(function () {

    $('form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            $.ajax({
                type: "POST",
                url: '',
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                },
             error: function(errorMessage){
               //alert("Error" + JSON.stringify(errorMessage));
               alert("Verifica tu datos");
             }
            });
            return false;
        }
    })
});
</script>

<div class="form-row">
  <H5> Autor(es)</H5>
</div>
<div class="card-body">
  <table class="table">
      <thead>
          <tr>
          <th>Nombre</th>
          <th>Primer apellido</th>
          <th>Segundo apellido</th>
          <td >

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
              Agregar colaborador
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
                    <div class="row">
                      <div class="col-md-12">
                        <div class="page-header">

                          <h5>Busqueda
                              <form  class="form-inline pull-right" >
                                @csrf
                                  <fieldset class="form-group">
                                    <input type="text" class="form-control" id='Nombre' name="Nombre" placeholder="Nombre">
                                  </fieldset>
                                  <fieldset class="form-group">
                                    <input type="text" class="form-control" name="ApellidoP" placeholder="Apellido P">
                                  </fieldset>
                                  <fieldset class="form-group">
                                    <input type="text" class="form-control" name="ApellidoM" placeholder="Apellido M">
                                  </fieldset>
                                  <fieldset class="form-group">
                                    <button type="submit" name="btn btn-default" >
                                    <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                  </fieldset>
                              </form>
                          </h5>
                        </div>

                      </div>
                    </div>

                    <table class="table table-hoover table-striped">
                      <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Acción</th>
                      </tr>
                      @foreach ($autores as $autor)
                        <tr>
                          <td>{{$autor->Nombre}}</td>
                          <td>{{$autor->ApellidoP}}</td>
                          <td>{{$autor->ApellidoM}}</td>
                          <td><button type="button" class="btn btn-primary">Agregar</button></td>

                        </tr>
                      @endforeach

                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>



          </td>





          </tr>
      </thead>
      <tbody>
         @foreach ($autoresArticulo as $autorArticulo)
          <tr>
              <td>{{ $autorArticulo->Nombre}}</th>
              <td>{{$autorArticulo->ApellidoP}}</td>
              <td>{{$autorArticulo->ApellidoM}}</td>
              <td>Acción</td>
              <td><input type="text" id='a'> </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {{-- $notas->links() --}}
{{--Colocar un modal para registrar Autores --}}
</div>
