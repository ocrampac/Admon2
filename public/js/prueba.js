

function activaElectronico() {
  console.log(document.getElementById("impreso").value);
  document.getElementById("impreso").disabled = true; //DESHABILITA el select (id="js_no")
  document.getElementById("electronico").disabled = false; //HABILITA el input (id="js_si")
}
function activaImpreso() {
  document.getElementById("impreso").disabled = false; //DESHABILITA el select (id="js_no")
  document.getElementById("electronico").disabled = true; //HABILITA el input (id="js_si")
}
function activa() {
  document.getElementById("impreso").disabled = false; //DESHABILITA el select (id="js_no")
  document.getElementById("electronico").disabled = false; //HABILITA el input (id="js_si")
}
