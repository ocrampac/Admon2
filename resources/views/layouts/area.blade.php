

@if (isset($area) and isset($campo) and isset($disciplina) and isset($subdisciplina))

    <div class="form-row">
      <H5> Área de conocimiento</H5>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="area">Área*:</label>
        <select class="custom-select" id="area" required name="area_id">
          @foreach ($area as $opcion )
            <option value={{$opcion->id}}
              @if (isset($areaID))
                <?php if($opcion->id== $areaID){echo("selected");} ?>
              @endif
              >
              {{$opcion->Nombre}}
            </option>
          @endforeach

        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="campo">Campo*:</label>
        <select class="custom-select" id="campo" required name="campo_id">
          @foreach ($campo as $opcion )
            <option value={{$opcion->id}}
              @if (isset($areaID))
                <?php if($opcion->id== $areaID){echo("selected");} ?>
              @endif
              >
              {{$opcion->Nombre}}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="disciplina">Disciplina*:</label>
        <select class="custom-select" id="disciplina" required name="disciplina_id">
          @foreach ($disciplina as $opcion )
            <option value={{$opcion->id}}
              @if (isset($areaID))
                <?php if($opcion->id== $areaID){echo("selected");} ?>
              @endif
              >
              {{$opcion->Nombre}}
            </option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="subdisciplina">Subdisciplina*:</label>
        <select class="custom-select" id="subdisciplina" required name="subdisciplina_id">
          @foreach ($subdisciplina as $opcion )
            <option value={{$opcion->id}}
              @if (isset($areaID))
                <?php if($opcion->id== $areaID){echo("selected");} ?>
              @endif
              >
              {{$opcion->Nombre}}
            </option>
          @endforeach
        </select>
      </div>
    </div>
@else
    {{ isset($area) . '-' .isset($campo) . '-' .isset($disciplina) .'-' . isset($subdisciplina)}}

@endif
