@extends('../layouts/plantilla')




@section('header')
  <div class="container">
      <h2>Articulo</h2>
    {{--  <script src="{{ asset('js/radio.js') }}" type="text/javascript"></script> no punsiona ~v~ --}}
      <script src="{{ asset('js/radio.js') }}" type="text/javascript"></script>








  </div>
@endsection
@section('section')
  <div class="form-row">


    <div class="col-12">
        Tiene ISSN*:
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input"  name="opISSN" onchange="activaImpreso()">Impreso
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input"  name="opISSN" onchange="activaElectronico()">Electrónico
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="opISSN" onchange="activa()" >Ambos
          </label>
        </div>

      </div>
    </div>

    @if (isset($articulo))
        <form class="container" method="post" enctype="multipart/form-data" action=
            "articulo/{{$articulo->id}}"   >
        @method('Put')

      @else
        <form class="container" method="post" enctype="multipart/form-data" action=
           "articulo" >

      @endif
      @csrf
        <br>
        <div class="form-row">
        </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="ISSN impreso">ISSN impreso:</label>
          <input type="text" class="form-control impreso" name="ISSNImpreso" placeholder="ISSN impreso" id="impreso"
          value='{{ isset($articulo) ? $articulo->ISSNImpreso : '' }}'>
        </div>

        <div class="form-group col-md-4">
          <label for="ISSN electronico">ISSN electrónico:</label>
          <input type="text" class="form-control electronico" name="ISSNElectronico" placeholder="ISSN electrónico" id="electronico"
          value='{{ isset($articulo) ? $articulo->ISSNElectronico : '' }}'>
        </div>
        <div class="form-group col-md-4">
          <label for="DOI">DOI:</label>
          <input type="text" class="form-control " name="DOI" placeholder="DOI" id="doi"
          value='{{ isset($articulo) ? $articulo->DOI : '' }}'>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="NombreRevista">Nombre de la revista*:</label>
          <input type="text" class="form-control" name='NombreRevista' placeholder="Nombre de la revista" id="nomRev" required
          value='{{ isset($articulo) ? $articulo->NombreRevista : '' }}'>

        </div>
        <div class="form-group col-md-2">
          <label for="pagina de">Número de revista:</label>
          <input type="number" class="form-control" name="NumRevista" placeholder="Número de revista"
          value='{{ isset($articulo) ? $articulo->NumRevista : '' }}'>
        </div>
        <div class="form-group col-md-2">
          <label for="pagina de">Volumen de revista:</label>
          <input type="number" class="form-control" name="VolumenRevista" placeholder="Vólumen de revista"
          value='{{ isset($articulo) ? $articulo->VolumenRevista : '' }}'>

        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="TítuloArticulo">Título del artículo*:</label>
          <input type="text" class="form-control" name="TituloArticulo" placeholder="Título del artículo" id="TítuloArt" required
          value='{{ isset($articulo) ? $articulo->TituloArticulo : '' }}'>
        </div>
        <div class="form-group col-md-4">
          <label for="añoPublicacion">Año de publicación*:</label>
          <input type="text" class="form-control" name="AñoPublicacion" placeholder="Año de publicación" required maxlength=4
          value='{{ isset($articulo) ? $articulo->AñoPublicacion : '' }}'>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="pagina de">Páginas de*:</label>
          <input type="text" class="form-control" name="PaginaDe" placeholder="Páginas de" required
          value='{{ isset($articulo) ? $articulo->PaginaDe : '' }}'>
        </div>
        <div class="form-group col-md-4">
          <label for="pagina a">a*:</label>
          <input type="text" class="form-control" name="PaginaA" placeholder="a" required
          value='{{ isset($articulo) ? $articulo->PaginaA : '' }}'>
        </div>
      </div>
        <?php
            if (isset($articulo)){

              $palabrasClave=[
                  'pc1'=>$articulo->PalabraClave,
                  'pc2'=>$articulo->PalabraClave2,
                  'pc3'=>$articulo->PalabraClave3
               ]; ?>
               @include('../layouts/palabrasClave',$palabrasClave)
            <?php
            }

            else {
              ?>
              @include('../layouts/palabrasClave')
              <?php
            }
            //Se renombre el identificador ya que en todos los documentos se debe llamar igual
            if (isset($articulo))
              $areaID=$articulo->area_id;

         ?>

      @include('../layouts/archivo')

      @include('../layouts/area',compact('area','campo','disciplina','disciplina','areaID'))

        @include('../layouts/indexado')
  {{--     @include('../layouts/autores') modal no funcion --}}
        @if (isset($articulo))
           @include('../layouts/añadir_autores',compact('articulo'))
        @endif


    <button type="submit" class="btn btn-primary">Enviar</button>
    @if ($errors)
      @foreach ($errors->all() as $error)
        {{$error}}
      @endforeach
    @endif
  </form>



@endsection
