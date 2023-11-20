$(document).ready(function(){

   function desabilitarRetroceso() {window.history.forward()}

   window.load = desabilitarRetroceso();

   window.onpageshow = function(evt) {if (evt.persisted) desabilitarRetroceso()}
})