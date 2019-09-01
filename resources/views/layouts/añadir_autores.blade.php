<div class="form-row">
  <H5> Autor(es)/Colaborador(es)</H5>
</div>
<div class="card-body">
  <table class="table">
      <thead>
          <tr>

            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <td > <button type="button" name="button"
              onclick="window.location='{{ route("tiArticulo",['id_articulo'=>$articulo]) }}'" >
              Agregar colaborador
            </button>
            </td>
          </tr>
      </thead>
      <tbody>
         @foreach ($autoresArticulo as $autorArticulo)
          <tr>
              <td>{{ $autorArticulo->Nombre}}</th>
              <td>{{$autorArticulo->ApellidoP}}</td>
              <td>{{$autorArticulo->ApellidoM}}</td>
              <td>
                    <button type="button" name="btn btn-default"
                      onclick="window.location='{{ route('tiEliminar',['id_autor'=>$autorArticulo->id,'id_articulo'=>$articulo->id])  }}'">
                    <span class="glyphicon glyphicon-trash"></span>
                    </button>
              </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {{-- $notas->links() --}}
{{--Colocar un modal para registrar Autores --}}
</div>
