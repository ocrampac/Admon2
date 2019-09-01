function activaElectronico() {
  console.log(document.getElementById("impreso").disabled);
  document.getElementById("impreso").disabled = true;
  document.getElementById("electronico").disabled = false;
}
function activaImpreso() {
  document.getElementById("impreso").disabled = false;
  document.getElementById("electronico").disabled = true;
}
function activa() {
  document.getElementById("impreso").disabled = false; //DESHABILITA el select (id="js_no")
  document.getElementById("electronico").disabled = false; //HABILITA el input (id="js_si")
}
