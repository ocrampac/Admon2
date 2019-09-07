@extends('../layouts/plantilla')
@section('section')


<div class="row">
  <div class="col-md-8">
      <h5>Busqueda
          <form  class="form-inline pull-right" >
            @csrf
              <fieldset class="form-group">
                <input type="text" class="form-control" id='Nombre' name="Nombre" placeholder="Nombre" value="{{ request('Nombre')}}">
              </fieldset>
              <fieldset class="form-group">
                <input type="text" class="form-control" name="ApellidoP" placeholder="Apellido P">
              </fieldset>
              <fieldset class="form-group">
                <input type="text" class="form-control" name="ApellidoM" placeholder="Apellido M">
              </fieldset>
              <fieldset class="form-group col-md-1">
                <button type="submit" name="btn btn-default" >
                <span class="glyphicon glyphicon-search"></span>
                </button>
              </fieldset>



          </form>

      </h5>


  </div>

  <div class="col-md-4">
      @include('../layouts/autoresNuevo')
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
      <td><button type="button" class="btn btn-primary"
        onclick="window.location='{{ route('tiInsertar',['id_autor'=>$autor->id,'id_articulo'=>$id_articulo]) }}'">
          Agregar
          </button>
      </td>

    </tr>
  @endforeach

</table>
{{ $autores->render() }}
@endsection
