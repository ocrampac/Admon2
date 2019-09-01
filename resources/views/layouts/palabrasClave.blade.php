
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="Palabra clave 1">Palabra clave 1*:</label>
    <input type="text" class="form-control" placeholder="Palabra clave 1" name="PalabraClave" required
    value='{{ isset($palabrasClave) ? $palabrasClave["pc1"] : '' }} '>
  </div>
  <div class="form-group col-md-4">
    <label for="Palabra clave 2">Palabra clave 2*:</label>
    <input type="text" class="form-control" placeholder="Palabra clave 2" name="PalabraClave2" required
    value='{{ isset($palabrasClave) ? $palabrasClave['pc2'] : '' }}'>
  </div>
  <div class="form-group col-md-4">
    <label for="Palabra clave 3">Palabra clave 3*:</label>
    <input type="text" class="form-control" placeholder="Palabra clave 3" name="PalabraClave3" required
    value='{{ isset($palabrasClave) ? $palabrasClave['pc3'] : '' }}'>
  </div>
</div>
