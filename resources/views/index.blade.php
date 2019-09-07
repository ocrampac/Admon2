@extends('../layouts/plantilla')
@section('header')
  <div class="container">
      <h2>Inicio</h2>
  </div>

@endsection

@section('section')
  <div class="container ">
    <div class="row">

      <article id="accordionDG" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3" >
        <div class="card">
          <header class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                Datos generales
              </a>
            </h5>
          </header>

          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
            <div class="card-body">
              <a class="dropdown-item" href="{{route('datos')}}">Datos generales</a>
              <a class="dropdown-item" href="#!">Domicilio</a>
            </div>
          </div>
        </div>
      </article>

      <article id="accordionFA" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3 ">
          <div class="card">
            <header class="card-header" role="tab" id="heading2">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                  Formación académica
                </a>
              </h5>
            </header>

            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" style="">
              <div class="card-body">
                <a class="dropdown-item" href="">Grados académicos</a>
              </div>
            </div>
          </div>
        </article>

        <article id="accordionTP" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3 ">
          <div class="card">
            <header class="card-header" role="tab" id="heading3">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">
                  Trayectoria profesional
                </a>
              </h5>
            </header>

            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" style="">
              <div class="card-body">
                <a class="dropdown-item" href="#!">Experiencia laboral</a>
                <a class="dropdown-item" href="#!" >Estancias de investigación, profesionales y pos-doctorales</a>
              </div>
            </div>
          </div>
        </article>

        <article id="accordionPC" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3">

            <div class="card">
              <header class="card-header" role="tab" id="heading4">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">
                    Producción científica, tecnológica y de innovación
                  </a>
                </h5>
              </header>

              <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" style="">
                <div class="card-body">
                    <a class="dropdown-item " href="#!">Publicación de artículos</a>
                    <a class="dropdown-item" href="#!">Publicación de libros</a>
                    <a class="dropdown-item" href="#!">Capítulos publicados</a>
                    <a class="dropdown-item" href="#!">Reportes técnicos</a>
                    <a class="dropdown-item" href="#!">Memorias</a>
                    <a class="dropdown-item" href="#!">Documentos de trabajo</a>
                    <a class="dropdown-item" href="#!">Reseñas</a>
                    <a class="dropdown-item" href="#!">Congresos</a>
                </div>
              </div>
            </div>
          </article>

          <article id="accordionFC" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3">
            <div class="card">
              <header class="card-header" role="tab" id="heading6">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">
                    Formación de capital humano
                  </a>
                </h5>
              </header>

              <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" style="">
                <div class="card-body">
                  <a class="dropdown-item " href="#!">Cursos impartidos</a>
                  <a class="dropdown-item" href="#!">Tesís diriguidas</a>
                  <a class="dropdown-item" href="#!">Diplomados</a>
                </div>
              </div>
            </div>
          </article>

          <article id="accordionCP" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3">

            <div class="card">
              <header class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed">
                    Comunicación pública
                  </a>
                </h5>
              </header>

              <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                <div class="card-body">
                  <a class="dropdown-item " href="#!">Publicación de artículos</a>
                  <a class="dropdown-item" href="#!">Publicación de libros</a>
                  <a class="dropdown-item" href="#!">Capítulos publicados</a>
                  <a class="dropdown-item" href="#!">Congresos</a>
                  <a class="dropdown-item" href="#!">Divulgación</a>
                </div>
              </div>
            </div>
          </article>

          <article id="accordionV" role="tablist" class="col-12 col-md-6 col-lg-4 pt-3 py-lg-5">
            <div class="card">
              <header class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed">
                    Vinculación
                  </a>
                </h5>
              </header>

              <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                <div class="card-body">
                  <a class="dropdown-item " href="#!">Proyecto de investigación</a>
                  <a class="dropdown-item" href="#!">Grupo de investigación</a>
                </div>
              </div>
            </div>
          </article>
    </div>
  </div>
@endsection
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
