  $(document).ready(function(){

});

function login() {
		  $.ajax({
    type: 'POST',
    url: 'mantenimiento.php',
    data: {key: 'login', email: $('#email').val(),pass: $('#password').val()}

  }).done(function ( data ) {
    
$('#alerta').removeAttr('hidden');
 $("#alerta").html(data);
if (data.trim()=="ha iniciado correctamente") {
location.href ="catalogo.php";

}
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
	
}

function cerrarsesion() {
      $.ajax({
    type: 'POST',
    url: 'admi/mantenimiento.php',
    data: {key: 'cerrarsesion'}

  }).done(function ( data ) {
location.href ="admi/login.php";
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
  
}