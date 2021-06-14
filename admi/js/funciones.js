var  esto;

  $(document).ready(function(){





    $.ajax({
                        dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincias.json",
                        data: {},
                        success: function (data) {
                            var html = "<select>";
                            for(key in data) {
                                html += "<option value='"+key+"'>"+data[key]+"</option>";
                            }
                            html += "</select";
                            $('#provincias').html(html);
                        }
                    });


    $('#tipo').on('change',function(){

    if (this.value=="GASTO") {

      $("#precioocultarlo").hide();
       $("#impuestoocultarlo").hide();
        $("#utilidadocultarlo").hide();
$("#precios").prop('disabled', false);

    }else{
       $("#precioocultarlo").show();
       $("#impuestoocultarlo").show();
       $("#utilidadocultarlo").show();
       $("#precios").prop('disabled', true);
    }
    });



$('#tipoentrada').on('change',function(){

    if (this.value=="GASTO") {

      $("#precioocultar").hide();
       $("#impuestoocultar").hide();
        $("#utilidadocultar").hide();
$("#precios").prop('disabled', false);

    }else{
       $("#precioocultar").show();
       $("#impuestoocultar").show();
       $("#utilidadocultar").show();
       $("#precios").prop('disabled', true);
    }
    });


    $('#condiciones').on('change',function(){

    if (this.value=="Contado") {

      $("#plazo").attr('hidden',true);
    }else{
       $("#plazo").removeAttr('hidden');
    }
    });
     $('#condicion').on('change',function(){

    if (this.value=="Contado") {

      $("#plazos").attr('hidden',true);
    }else{
       $("#plazos").removeAttr('hidden');
    }
    });
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("table input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }s
    });
    
    var verificar;


  $(document).on( 'click' ,'#catalogo',function(e) {
 	$('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));
 $('#codigo').val($(this).find("td:eq( 0 )").text());
    $('#producto').val($(this).find("td:eq( 1 )").text());
    
     $("#unidad option:contains(" + $(this).find("td:eq( 2)").text() +")").attr("selected", true);
     $("#estado").val($(this).find("td:eq( 3)").text());
     $("#cantidad").val($(this).find("td:eq( 4)").text());
    
  
});

 $(document).on( 'click' ,'#salidas',function(e) {
 	$('#id2').val($(this).find("td:eq( 0 )").data("id"));
  $('#cantidad2 ').
  val($(this).find("td:eq( 1 )").text());
$('#id').val($(this).find("td:eq( 0 )").data("id"));
$("#producto option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
 
     var str=$(this).find("td:eq( 2 )").text();
    var res = str.split(" ");
     $('#fecha ').val(res[0]);
     $('#cantidad ').val($(this).find("td:eq( 1 )").text());
     $('#observacion').html($(this).find("td:eq( 3 )").text());
});

  $(document).on( 'click' , '#entradas ', function(e) {
 	$('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));


$("#productoeditar option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
    // $('#productoeditar option:selected').val($(this).find("td:eq( 0)").text());
     var str=$(this).find("td:eq( 5 )").text();
    var res = str.split(" ");
     $('#fecha ').val(res[0]);
     $('#cantidadpredeterminada ').val($(this).find("td:eq( 2 )").text());
      $('#cantidad ').val($(this).find("td:eq( 1 )").text());
     $('#precio').val($(this).find("td:eq( 3 )").text());
     $('#factura').val($(this).find("td:eq( 4 )").text());
      $('#descripcion').html($(this).find("td:eq( 6 )").text());
     $("#tipo option:contains(" + $(this).find("td:eq( 7)").text() +")").attr("selected", true);
     $('#precioventa').val($(this).find("td:eq( 8 )").text());
     $('#utilidad').val($(this).find("td:eq( 9 )").text());
     $('#impuesto').val($(this).find("td:eq( 10 )").text());
      
});
 $(document).on( 'click' ,'#comidas', function(e) {

 	$('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));

    $("#producto option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
    $("#estado").val($(this).find("td:eq( 1)").text());
     $('#fecha ').val($(this).find("td:eq( 2 )").text());
     $('#total ').val($(this).find("td:eq( 3 )").text());
   
});

  $(document).on( 'click' ,'#producir', function(e) {

  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));

    $("#nombre option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
    $("#comida option:contains(" + $(this).find("td:eq( 1)").text() +")").attr("selected", true);

    $("#cantidadconversion2").val($(this).find("td:eq( 2)").text());
     $('#totalconversion ').val($(this).find("td:eq( 3 )").text());
    
});

    $(document).on( 'click' , '#pedido',function(e) {
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));

    $('#cantidad').val($(this).find("td:eq( 1)").text());
    $("#comida option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
     $('#hora ').val($(this).find("td:eq( 2 )").text());
     $('#observacion  ').val($(this).find("td:eq( 3 )").text());
     $('#fecha  ').val($(this).find("td:eq( 4 )").text());
     $("#estado option:contains(" + $(this).find("td:eq( 5)").text() +")").attr("selected", true);
     $("#cliente option:contains(" + $(this).find("td:eq( 6)").text() +")").attr("selected", true);
    
});


// edita los precios de las habitaciones traslada los datos a los input

     $(document).on( 'click' , '#precios ', function(e) {
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));


$("#habitacion option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
   
     $('#fechadesde ').val($(this).find("td:eq( 1 )").text());
      $('#fechahasta ').val($(this).find("td:eq( 2 )").text());
     $('#precio').val($(this).find("td:eq( 3 )").text());
     $('#adicional').val($(this).find("td:eq( 4 )").text());
     $("#estado option:contains(" + $(this).find("td:eq( 5)").text() +")").attr("selected", true);

     
      
});

       $(document).on( 'click' ,'#cliente',function(e) {
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));

    $('#nombre').val($(this).find("td:eq( 0 )").text());
     $("#apellido").val($(this).find("td:eq( 1)").text());
     $("#cedula").val($(this).find("td:eq( 2)").text());
        $('#correo').val($(this).find("td:eq( 3 )").text());
     $("#telefono").val($(this).find("td:eq( 4)").text());
     $("#tarjeta").val($(this).find("td:eq( 5)").text());
      $("#fecha").val($(this).find("td:eq( 6)").text());
       $("#cvc").val($(this).find("td:eq( 7)").text());
  
});
     $(document).on( 'click' ,'#provedores',function(e) {
    
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));

    $('#codigo').val($(this).find("td:eq( 0 )").text());
     $("#nombre").val($(this).find("td:eq( 1)").text());
     $("#cedula").val($(this).find("td:eq( 2)").text());
        $('#correo').val($(this).find("td:eq( 3 )").text());
     $("#telefono").val($(this).find("td:eq( 4)").text());
     $("#cuenta").val($(this).find("td:eq( 5)").text());
      
  
});
       $(document).on( 'click' ,'#guardarreserva',function(e) {
        var elementos=new Array();
  $('tr').each(function(index, element){
    
  
   if ($(element).find("td").eq(0).html()!=null) {
      
  
    var  tipo = $(element).find("td").eq(0).html(),
        habitacion = $(element).find("td").eq(1).data("id"),
        entrada = $(element).find("td").eq(2).html(),
         salida = $(element).find("td").eq(3).html(),
          desayuno = $(element).find("td").eq(4).html();
          personas = $(element).find("td").eq(5).html();
          precio = $(element).find("td").eq(6).html();
           fecha = $(element).find("td").eq(7).html();
           descripcion = $(element).find("td").eq(8).html();
             var  valor=new Array(tipo  , habitacion,entrada  ,salida,desayuno,personas,precio,fecha,descripcion,$("#cedula").val(),$("#nombredevolver").val(),$("#apellidodevolver").val(),$("#correobuscar").val(),$("#telefonobuscar").val());
   
      elementos.push(valor);
          
       
   
        
      }
      
       

  
  
});

                  $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'guardarreserva',elemento:JSON.stringify(elementos)  }

  }).done(function ( data ) {
   
   if (data.trim()=="true") {
$('#alert').text('su reserva se ha hecho correctamente');

   }

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
});

          $(document).on( 'click' ,'#ordencompra',function(e) {
    
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));
  $("#provedor option:contains(" + $(this).find("td:eq( 5)").text() +")").attr("selected", true);
    $('#orden').val($(this).find("td:eq( 0 )").text());
     $("#fechainicio").val($(this).find("td:eq( 1)").text());
     $("#fechafinal").val($(this).find("td:eq( 2)").text());
        $("#condicion option:contains(" + $(this).find("td:eq( 3)").text() +")").attr("selected", true);
          
  if ($(this).find("td:eq( 3)").text()=="Contado") {

      $("#plazos").attr('hidden',true);

    }else{
       $("#plazos").removeAttr('hidden');
        $('#plazos').val($(this).find("td:eq(6 )").text());
    }

});

          $(document).on( 'click' ,'#listaorden',function(e) {
    
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));
      $("#producto option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
         $("#orden option:contains(" + $(this).find("td:eq( 1)").text() +")").attr("selected", true);
    $('#cantidad').val($(this).find("td:eq( 2)").text());
     $("#precio").val($(this).find("td:eq( 3)").text());
  
      
  
});
           $(document).on( 'click' ,'#habitaciones',function(e) {
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));
 $('#nombre').val($(this).find("td:eq( 0 )").text());
    $('#n_habitacion').val($(this).find("td:eq( 1 )").text());
    
   
     $("#cantidad").val($(this).find("td:eq( 2)").text());
    
$("#estados option:contains(" + $(this).find("td:eq( 3)").text() +")").attr("selected", true);
   $("#descripcion").val($(this).find("td:eq( 4)").text());
  
});


           $(document).on( 'click' ,'#reservarahora',function(e) {

esto=this;



        });



 $(document).on( 'click' ,'#modalhabitaciones',function(e) {
$("#img0").attr("src","");
$("#img1").attr("src","");
$("#img2").attr("src","");
$("#img3").attr("src","");
$("#img4").attr("src","");
  var cadena=$( this ).parent( ).parent().find('h6').find('strong').text();
  
     

       $('#producto').text($( this ).parent( ).parent().find('h4').text());
        $('#descripciones').text($( this ).parent( ).parent().find('h5').text());
         $('#costo').text( cadena.substring(0, cadena.length -1));

         $.ajax({
    type: 'POST',
    url: 'admi/basedatos.php',
    data: {key: 'imageneshabitaciones',habitacion: $( this ).parent( ).parent().find(' option:selected').val() }

  }).done(function ( data ) {
  
  var obj = JSON.parse(data);
  
   for (var i =0;i<= obj.length - 1; i++) {

     switch(i){

       case 0:
    $("#img0").attr("src",obj[i][0]);
    break;
      case 1:
    $("#img1").attr("src",obj[i][0]);
    break;
      case 2:
    $("#img2").attr("src",obj[i][0]);
    break;
      case 3:
    $("#img3").attr("src",obj[i][0]);
    break;
      case 4:
    $("#img4").attr("src",obj[i][0]);
    break;
     }
}
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
});
 $(document).on( 'click' ,'.product_imgcuadro',function(e) {
    
$("#img0").attr("src",$("#"+e.target.id).attr('src'));
});
$(document).on("click", ".borrar", function() {
  
     $(this).closest("tr").remove();
});

// Tabla del archivo lista_reservas.php actualiza y elimina
     $(document).on( 'click' ,'#reservacion',function(e) {

  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));

   //  $('#nombre').val($(this).find("td:eq( 0 )").text());
    $("#cedula").val($(this).find("td:eq( 1)").text());
    $('#cedula').trigger('change');
   //   $("#habitacion").val($(this).find("td:eq( 2)").text());
   //      $('#n_habitacion').val($(this).find("td:eq( 3 )").text());
         $("#estados option:contains(" + $(this).find("td:eq( 5)").text() +")").attr("selected", true);
   //   $("#fecha_reserva").val($(this).find("td:eq( 6)").text());
    $("#fechainicio").val($(this).find("td:eq( 7)").text());
        $("#fechafinal").val($(this).find("td:eq( 8)").text());
            $("#cantidad").val($(this).find("td:eq( 9)").text());
             
   //     $("#total").val($(this).find("td:eq( 10)").text());
   // $("#descripcion").val($(this).find("td:eq( 11)").text());
});


$(document).on( 'click' ,'#tours',function(e) {
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));
 $('#nombre').val($(this).find("td:eq( 0 )").text());
    
    
   
     $("#cantidad").val($(this).find("td:eq( 1)").text());
    
$("#estados option:contains(" + $(this).find("td:eq( 2)").text() +")").attr("selected", true);
   $("#descripcion").val($(this).find("td:eq( 3)").text());
  
});


//Traslada los datos a los input cuando se edita los precio de los tour 
$(document).on( 'click' , '#toursprecios ', function(e) {
  $('#id2').val($(this).find("td:eq( 0 )").data("id"));
$('#id').val($(this).find("td:eq( 0 )").data("id"));


$("#tour option:contains(" + $(this).find("td:eq( 0)").text() +")").attr("selected", true);
   
     $('#fechadesde ').val($(this).find("td:eq( 1 )").text());
      $('#fechahasta ').val($(this).find("td:eq( 2 )").text());
     $('#precio').val($(this).find("td:eq( 3 )").text());
   

     
      
});

});



// funciones de javascript



  function precioreservacion() {

   switch($("#tipo ").val()) {
  case "Booking":
    // code block
    break;
  case "Expedia":
    // code block
    break;
     case "ARBNB":
    // code block
    break;
     case "Llamada Local":
   var fecha1 = new Date($("#fechainicio ").val());
    var fecha2 = new Date($("#fechafinal ").val());

  var day =  fecha2.getDate()-fecha1.getDate();
 
          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'costohabitacion',habitacion: $("#habitacion option:selected").val(),fechadesde:$("#fechainicio ").val(),dias:day,cantidad:$("#cantidad ").val(),estado:$("#estados").val()}

  }).done(function ( data ) {
   
 
   $("#precio").val(data);

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    break;
  default:
    // code block
}
   
    
}

function costo() {

          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'costo',producto: $("#productos option:selected").val()}

  }).done(function ( data ) {
   
 
    var json = JSON.parse(data);
    
         var conversion = json[0] /json[1];
         var resultado = conversion* $("#cantidadconversion ").val();
           $("#totalconversion").val(resultado);

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}
function costoeditar() {
  
          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'costo',producto: $("#nombre option:selected").val()}

  }).done(function ( data ) {
   
 
    var json = JSON.parse(data);
    
         var conversion = json[0] /json[1];
         var resultado = conversion* $(".cantidadconversion ").val();
           $(".totalconversion").val(resultado);

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}

function guardarpedido() {
   $(".loader").fadeIn("slow");
  var elementos=new Array();
  $('tr').each(function(index, element){
   if ($(element).find("td").eq(0).data("id")!=null) {
      
  
          var $chkbox = $(element).find("td").find('input[type="checkbox"]');
          if ($chkbox.is(':checked')) {
    var  producto = $(element).find("td").eq(0).data("id"),
        pedido = $(element).find("td").eq(1).data("id"),
        cantidad = $(element).find("td").eq(2).html(),
         precio = $(element).find("td").eq(3).html(),
          fecha = $(element).find("td").eq(4).html();
             var  valor=new Array(producto  , pedido,cantidad  ,precio,fecha);
   
      elementos.push(valor);
          }
       
   
        
      }
      
       

  
  
});

                  $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'guardarpedido',elemento:JSON.stringify(elementos)  }

  }).done(function ( data ) {
  $("#botonpedido").prop("disabled",true);
   $('#alert').text(data);
 $(".loader").fadeOut("slow");
 location.reload();

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
  // body...
}

function buscarcatalogo() {
  
   var texto=$("#buscar").val();

          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'buscar',consultas:"SELECT id_producto,nombre,unidad,estado FROM  tbl_productos WHERE nombre LIKE '"+texto+"%'   order by nombre    LIMIT 0,10 "}

  }).done(function ( data ) {
   
     var obj = JSON.parse(data);
   $("tbody #catalogo").remove();
   for (var i =0;i<= obj.length - 1; i++) {

    $("tbody").append('<tr id="catalogo"> <td data-id="'+obj[i][0]+'">'+obj[i][1]+'</td> <td >'+obj[i][2]+'</td> <td>'+obj[i][3]+'</td><td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td></tr>');
   }

 
 

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}

function buscarentrada() {
 
   var texto=$("#buscar").val();


          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'buscar',consultas:"SELECT te.id_entrada,tp.nombre,te.cantidad,te.precio,te.numero_factura,te.fecha,te.descripcion,tp.unidad,te.estado FROM  tbl_entradas as te  INNER JOIN tbl_productos as tp on tp.id_producto =fk_producto  WHERE tp.nombre LIKE '"+texto+"%'   order by te.fecha  desc  LIMIT 0,10 "}

  }).done(function ( data ) {
   
   
     var obj = JSON.parse(data);
   $("tbody #entradas").remove();
   for (var i =0;i<= obj.length - 1; i++) {
  if (obj[i][7]=="GRAMOS") {
    $("tbody").append(' <tr id="entradas"> <td data-id="'+obj[i][0]+'">'+obj[i][1]+'</td> <td>'+obj[i][2]+' G</td> <td >'+obj[i][3]+'</td><td>'+obj[i][4]+'</td> <td>'+obj[i][5]+'</td><td>'+obj[i][6]+'</td><td>'+obj[i][8]+'</td>  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   }

    if (obj[i][7]=="UNIDAD") {
    $("tbody").append(' <tr id="entradas"> <td data-id="'+obj[i][0]+'">'+obj[i][1]+'</td> <td>'+obj[i][2]+' UD</td> <td >'+obj[i][3]+'</td><td>'+obj[i][4]+'</td> <td>'+obj[i][5]+'</td><td>'+obj[i][6]+'</td><td>'+obj[i][8]+'</td> <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   }
   if (obj[i][7]=="LITROS") {
    $("tbody").append(' <tr id="entradas"> <td data-id="'+obj[i][0]+'">'+obj[i][1]+'</td> <td>'+obj[i][2]+' ML</td> <td >'+obj[i][3]+'</td><td>'+obj[i][4]+'</td> <td>'+obj[i][5]+'</td><td>'+obj[i][6]+'</td><td>'+obj[i][8]+'</td> <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   } 
 }

 
 

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}

function buscarsalida() {
 
   var texto=$("#buscar").val();


          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'buscar',consultas:"SELECT ti.id_inventario,ti.cantidad,ti.fecha,ti.observacion,tl.email,tp.nombre,tp.unidad FROM  tbl_inventario as ti INNER JOIN tbl_login as tl on id_login=fk_usuario INNER JOIN tbl_productos as tp on tp.id_producto =fk_producto  WHERE tp.nombre LIKE '"+texto+"%'   order by ti.fecha  desc  LIMIT 0,10 "}

  }).done(function ( data ) {
   
   
     var obj = JSON.parse(data);
   $("tbody #salidas").remove();
   for (var i =0;i<= obj.length - 1; i++) {
  if (obj[i][6]=="GRAMOS") {
    $("tbody").append(' <tr id="salidas"> <td data-id="'+obj[i][0]+'">'+obj[i][5]+'</td> <td>'+obj[i][1]+' G</td> <td >'+obj[i][2]+'</td><td>'+obj[i][3]+'</td> <td>'+obj[i][4]+'</td><td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   }

    if (obj[i][7]=="UNIDAD") {
    $("tbody").append(' <tr id="salidas"> <td data-id="'+obj[i][0]+'">'+obj[i][5]+'</td> <td>'+obj[i][1]+' UD</td> <td >'+obj[i][2]+'</td><td>'+obj[i][3]+'</td> <td>'+obj[i][4]+'</td><td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   }
   if (obj[i][7]=="LITROS") {
    $("tbody").append(' <tr id="salidas"> <td data-id="'+obj[i][0]+'">'+obj[i][5]+'</td> <td>'+obj[i][1]+' ML</td> <td >'+obj[i][2]+'</td><td>'+obj[i][3]+'</td> <td>'+obj[i][4]+'</td><td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td> <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   } 
 }

 
 

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}
function buscarcomida() {
 
   var texto=$("#buscar").val();


          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'buscar',consultas:"SELECT id_comida,nombre,estado,fecha,total FROM  tbl_comidas  WHERE nombre LIKE '"+texto+"%'   order by nombre  desc  LIMIT 0,10 "}

  }).done(function ( data ) {
   
   
     var obj = JSON.parse(data);
   $("tbody #comidas").remove();
   for (var i =0;i<= obj.length - 1; i++) {

    $("tbody").append('<tr class="comidas" id="comidas"> <td data-id="'+obj[i][0]+'">'+obj[i][1]+'</td> <td>'+obj[i][2]+'</td><td >'+obj[i][3]+'</td> <td >'+obj[i][4]+'</td> <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td><td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
   

  
 }

 
 

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}
function agregarlinea() {

$("tbody").append('<tr class="reservas" id="comidas"><td>'+$("#tipo  option:selected").val()+'</td> <td data-id="'+$("#habitacion  option:selected").val()+'">'+$("#habitacion  option:selected").val()+'</td> <td>'+$("#fechainicio").val()+'</td><td >'+$("#fechafinal").val()+'</td> <td >'+$("#estados  option:selected").val()+'</td> <td >'+$("#cantidad").val()+'</td> <td >'+$("#precio").val()+'</td> <td >'+$("#fecha").val()+'</td><td >'+$("#descripciones").val()+'</td>  <td><p><button class="borrar btn btn-danger btn-xs"  ><span class="glyphicon glyphicon-trash"></span></button></p></td> </tr>');
}

function buscarcedula() {
 $("#nombredevolver").val('');
   $("#apellidodevolver").val('');
   $("#correobuscar").val('');
   $("#telefonobuscar").val('');

 $(".loader").fadeIn("slow");

          $.ajax({
    type: 'POST',
    url: 'fichero.php',
    data: {key: 'buscarcedula',cedula:$("#cedula").val()}

  }).done(function ( data ) {
    $(".loader").fadeOut("slow");
    
   var dividir = data.split(",");

   if(dividir[0].trim()=="simple"){
  
var json = JSON.parse(data.substring(9,data.length));
$("#nombredevolver").val(json[0]);
   $("#apellidodevolver").val(json[1]);
   $("#correobuscar").val(json[2]);
   $("#telefonobuscar").val(json[3]);
    }

 if(dividir[0].trim()=="compleja"){
 $("#nombredevolver").val(dividir[2]);
   $("#apellidodevolver").val(dividir[3].trim()+" "+dividir[4].trim());

    }
   //
  
 

 
 

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
    
}

function guardarreserva() {
  var elementos=new Array();
  $('tr').each(function(index, element){
  
   
   if ($("#cedula").val()!=null) {
      
  
    var  tipo = $(element).find("td").eq(0).html(),
        habitacion = $(element).find("td").eq(1).data("id"),
        entrada = $(element).find("td").eq(2).html(),
         salida = $(element).find("td").eq(3).html(),
          desayuno = $(element).find("td").eq(4).html();
          personas = $(element).find("td").eq(5).html();
          precio = $(element).find("td").eq(5).html();
           fecha = $(element).find("td").eq(6).html();
           descripcion = $(element).find("td").eq(7).html();
             var  valor=new Array(tipo  , habitacion,entrada  ,salida,desayuno,personas,precio,fecha,descripcion,$("#cedula").val(),$("#nombredevolver").val(),$("#apellidodevolver").val(),$("#correobuscar").val(),$("#telefonobuscar").val());
   
      elementos.push(valor);
          
       
   
        
      }
      
       

  
  
});

                  $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'guardarreserva',elemento:JSON.stringify(elementos)  }

  }).done(function ( data ) {
   
  if (data.trim()=="true") {

    $('#alert').text('su reserva se ha hecho correctamente');
  }


  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
  // body...
}
function consultarreserva() {
     $('#alert').text();
  $('#agregar').empty();
 $(".loader").fadeIn("slow");
  var today = new Date();
var dd = String(today.getDate()).padStart(2, '0'); 
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

 if ($('#checkin_date').val() && $('#checkout_date').val()  && $('#checkin_date').val()>= today && $('#checkout_date').val()>= today && $('#checkin_date').val()<$('#checkout_date').val()) {
var cantidad =parseInt($('#adultos option:selected').text()) + parseInt($('#ninos option:selected').text());

 var fecha1 = new Date($("#checkin_date ").val());
    var fecha2 = new Date($("#checkout_date ").val());

  var day =  fecha2.getDate()-fecha1.getDate();

          $.ajax({
    type: 'POST',
    url: 'admi/basedatos.php',
    data: {key: 'Consultarreserva',entrada:$('#checkin_date').val(),salida:$('#checkout_date').val(),personas:cantidad,dias:day}

  }).done(function ( data ) {

    $(".loader").fadeOut("slow");
     var obj = JSON.parse(data);
     var nombres = new Array();
     var paso = false;
  var cantidad =0;
     for (var i=0; i<obj.length; i++) {

if (nombres.length === 0) {
  
 nombres.push("");

}
     


       for (var j=0; j<nombres.length; j++) {
        
              if (obj[i][1].trim()==nombres[j].trim()) {
              paso=true; 

    
  

      }
   
       }
var opcion="";
  if (!paso  ) {
for (var k=0; k<obj.length; k++) {
if (obj[i][1]==obj[k][1] && obj[i][4]>0 ) {

  cantidad=cantidad+1;
opcion = opcion +'<option value="'+obj[k][0]+'">'+cantidad+'</option>'; 
}

}

 nombres.push(obj[i][1]);

    $('#agregar').append('<div class="row">   <div class="col-xs-2 col-md-2">  <a id="modalhabitaciones" data-toggle="modal" href="#product_view">  <img class="img-responsive" src="'+obj[i][3]+'" width="120" height="90" alt="prewiew" >   </a>     </div>      <div class="col-xs-4 col-md-6">                         <h4 class="product-name"><strong>'+obj[i][1]+'</strong></h4><h5><small>'+obj[i][2]+'</small></h5>     </div>   <div class="col-xs-6 col-md-3 row">      <div class="col-xs-6 col-md-6 text-right" style="padding-top: 5px">    <h6><strong>₡ '+obj[i][4]+' <span class="text-muted">x</span></strong></h6>                         </div>                         <div class="col-xs-3 col-md-5">                              <select name="" id="cantidades'+i+'" class="form-control">                                                                                  </select>                         </div>                         <div class="col-xs-2 col-md-12">                             <button type="button" id="reservarahora" data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary btn-block">                                 Reservar                             </button>                         </div>                     </div>                 </div>                 <hr>  '); 
 paso=false; 
$('#cantidades'+i).append(opcion);
cantidad=0;
    }else{
       paso=false;
    }

     }
     
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })

 }else{
 $(".loader").fadeOut("slow");
  $('#alert').text('Por favor escoger las fechas de entrada y salida validas');
 }
}

function cambiartexto(texto) {

 $.ajax({
    type: 'POST',
    url: 'admi/basedatos.php',
    data: {key: 'guardartexto',textos:$('#'+texto).val(),segmento:texto }

  }).done(function ( data ) {
   

alert("sus cambios se han hecho correctamente");

  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })

 

  

}


function consultardisponibilidad() {
     $('#habitacion  option').each(function(){
   $(this).remove();

     });
  $('#agregar').empty();
 
  var today = new Date();
var dd = String(today.getDate()).padStart(2, '0'); 
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

 if ($('#fechainicio').val() && $('#fechafinal').val()  && $('#cantidad').val() && $('#fechainicio').val()>= today && $('#fechafinal').val()>= today && $('#fechainicio').val()<$('#fechafinal').val()) {
$(".loader").fadeIn("slow");

 var fecha1 = new Date($("#fechainicio ").val());
    var fecha2 = new Date($("#fechafinal ").val());

  var day =  fecha2.getDate()-fecha1.getDate();

          $.ajax({
    type: 'POST',
    url: 'basedatos.php',
    data: {key: 'Consultarreserva',entrada:$('#fechainicio').val(),salida:$('#fechafinal').val(),personas:$('#cantidad').val(),dias:day}

  }).done(function ( data ) {
    
    $(".loader").fadeOut("slow");
     var obj = JSON.parse(data);
  
     for (var i=0; i<obj.length; i++) {

      $('#habitacion').append('<option value="'+obj[i][0]+'">'+obj[i][1]+'</option>');
   
       }

precioreservacion();

  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })

 }else{
 $(".loader").fadeOut("slow");
  
 }
}

function reservar() {
$(".loader").fadeIn("slow");

          $('#alert').text();
           if ($('#nombretarjeta').val() && $('#numerotarjeta').val() && $('#expiracion').val() && $('#expiracionfecha').val()) {
         if ($('#nombredevolver').val() && $('#apellidodevolver').val() && $('#telefonobuscar').val() && $('#correobuscar').val()) {


        
 var today = new Date();
var dd = String(today.getDate()).padStart(2, '0'); 
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;
var cantidad =parseInt($('#adultos option:selected').text()) + parseInt($('#ninos option:selected').text());

 var fecha1 = new Date($("#checkin_date ").val());
    var fecha2 = new Date($("#checkout_date ").val());
  var day =  fecha2.getDate()-fecha1.getDate();

 var selector = $( esto ).parent( ).parent().find('select').attr('id');
  
    $("#"+selector+ " option").each(function(){
 


           $.ajax({
    type: 'POST',
    url: 'admi/basedatos.php',
    data: {key: 'reservar',habitacion:$(this).attr('value'),entrada:$('#checkin_date').val(),salida:$('#checkout_date').val(),personas:cantidad,dias:day,cedula:$('#cedula').val(),nombre:$('#nombredevolver').val(),apellido:$('#apellidodevolver').val(),tel:$('#telefonobuscar').val(),correo:$('#correobuscar').val(),nombretarjeta:$('#nombretarjeta').val(),numerotarjeta: $('#numerotarjeta').val(),expiracion: $('#expiracion').val(),expiracionfecha:$('#expiracionfecha').val(),cvv:$('#cvv').val()}

  }).done(function ( data ) { 
  

 $(".loader").fadeOut("slow");
if (data.trim()=="No disponible") {

   $('#confirmacion').text('Ha ocurrido un error no se ha podido reservar con exito, por fovor volver ha intentarlo');
}

if (data.trim()=="exito") {

   $('#confirmacion').text('Su reserva ha sido exitosa, en transcurso de 48 Hrs se le enviara un mensaje de confirmación al correo '+$('#correobuscar').val()+ ' Nuestro hotel se complace por preferirnos gracias '+ $('#nombredevolver').val());
}else{

  
}


  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })

      if ($("#"+selector+ " option:selected" ).text()==$(this).text()) {
 return false;

      }

});
          } else{

            $('#alert').text('Por favor es necesario llenar todos los datos de cliente');
             $(".loader").fadeOut("slow");
          }
           } else{
 $(".loader").fadeOut("slow");
            $('#confirmacion').text('Por favor es necesario llenar todos los datos de cliente');
          }

}

function entradasvalor() {
 
if ($('#precioventas').val()=="") {

$("#utilidades").prop('disabled', true);
$("#precios").prop('disabled', true);
$("#impuestos").prop('disabled', true);
$("#utilidades").val('');
$("#precios").val('');
$("#impuestos").val('');
}else{
$('#precios').val($('#precioventas').val());
$("#utilidades").prop('disabled', false);
$("#precios").prop('disabled', false);
$("#impuestos").prop('disabled', false);

if ($('#utilidades').val()!="") {
if ($('#impuestos').val()!="") {
var precios=$('#precios').val();
 var utilidad= parseFloat($('#precioventas').val())/100*parseFloat($('#utilidades').val());
 var impuesto= (parseFloat($('#precioventas').val())+utilidad)/100*parseFloat($('#impuestos').val());

 precios=parseFloat(precios)+ parseFloat(utilidad)+ parseFloat(impuesto);

 $('#precios').val(precios);

}else{
   var precios=$('#precios').val();
 var utilidad= $('#precioventas').val()/100*$('#utilidades').val();

 precios=parseFloat(precios)+ parseFloat(utilidad);
 $('#precios').val(precios);

}
}



if ($('#impuestos').val()!="" && $('#utilidades').val()=="") {

var precios=$('#precios').val();
 var impuestos= $('#precioventas').val()/100*$('#impuestos').val();

 precios=parseInt(precios)+ parseInt(impuestos);
 $('#precios').val(precios);
}
}



  // body...
}

function entradasvalores() {
 
if ($('#precioventa').val()=="") {

$("#utilidad").prop('disabled', true);
$("#precio").prop('disabled', true);
$("#impuesto").prop('disabled', true);
$("#utilidad").val('');
$("#precio").val('');
$("#impuesto").val('');
}else{
$('#precio').val($('#precioventa').val());
$("#utilidad").prop('disabled', false);
$("#precio").prop('disabled', false);
$("#impuesto").prop('disabled', false);

if ($('#utilidad').val()!="") {
if ($('#impuesto').val()!="") {
var precios=$('#precio').val();
 var utilidad= $('#precioventa').val()/100*$('#utilidad').val();
 var impuesto= $('#precioventa').val()/100*$('#impuesto').val();
 precios=parseInt(precios)+ parseInt(utilidad)+ parseInt(impuesto);
 $('#precio').val(precios);

}else{
   var precios=$('#precio').val();
 var utilidad= $('#precioventa').val()/100*$('#utilidad').val();

 precios=parseInt(precios)+ parseInt(utilidad);
 $('#precio').val(precios);

}
}



if ($('#impuesto').val()!="" && $('#utilidad').val()=="") {

var precios=$('#precio').val();
 var impuestos= $('#precioventa').val()/100*$('#impuesto').val();

 precios=parseInt(precios)+ parseInt(impuestos);
 $('#precio').val(precios);
}
}



  // body...
}

function canton() {
  
  $.ajax({
                        dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincia/"+$( "#provincias option:selected" ).val()+"/cantones.json" ,
                        data: {},
                        success: function (data) {
                            var html = "<select>";
                            for(key in data) {
                                html += "<option value='"+key+"'>"+data[key]+"</option>";
                            }
                            html += "</select";
                            $('#cantones').html(html);
                        }
                    });
}



function distrito() {
  
  $.ajax({
                        dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincia/"+$( "#provincias option:selected" ).val()+"/canton/"+$( "#cantones option:selected" ).val()+"/distritos.json" ,
                        data: {},
                        success: function (data) {
                            var html = "<select>";
                            for(key in data) {
                                html += "<option value='"+key+"'>"+data[key]+"</option>";
                            }
                            html += "</select";
                            $('#distritos').html(html);
                        }
                    });
}