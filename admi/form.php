
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-2.0.3.js"></script>
     <script src="js/bootstrap.min.js"></script>

</head>
<body>




  
<div class="container" id="principal">

<div>
    <div class="Product_Button col-lg-offset-6">
        
    </div>
</div>
<div class="clearfix"></div>
	<div class="row">
		<div><ul class="nav nav-tabs col-lg-12" role="tablist">
            <li class="active  "><a href="#Product_main"  style="color:black" role="tab" data-toggle="tab">Principal</a></li>
            <li class=""><a href="#Product_Images" role="tab"  style="color:black" data-toggle="tab">Imagenes</a></li>
           
            <li class=""><a href="#Product_Desc" role="tab" style="color:black" data-toggle="tab">Descripcion</a></li>
          
        </ul></div> 
        <div class="clearfix"></div>
        <div class="Product_Content tab-content">
            <div id="Product_main" class="tab-pane active">
            <form class="form-horizontal" action='' method="POST">
  <fieldset>
  <br>
 
    <div class=" col-lg-12 form-group">
      <label class="col-lg-2" for="ProductType">Subcategoria</label>
      <div class="col-lg-4">
        <select id="subcategoria" name="ProductType" class="form-control product-type">
          
        </select>
      </div>
    </div>

        <div class="col-lg-12 form-group ">
      <label class="col-lg-2"  for="Name">Cantidad disponible</label>
      <div class="col-lg-4">
        <input type="text" id="quantity" name="Name" placeholder="" class="form-control name" value="">
      </div>
    </div>
   
  
  
  
      <div class="col-lg-12 form-group">
      <label class="col-lg-2" for="ColorOptionPrompt">Color</label>
      <div class="col-lg-4">
        <input type="text" id="color" name="ColorOptionPrompt" placeholder="" class="form-control color-option-prompt" value="">
      </div>
    </div>
    <div class="col-lg-12 form-group">
      <label class="col-lg-2" for="SizeOptionPrompt">Tamaño</label>
      <div class="col-lg-4">
        <input type="text" id="size" name="SizeOptionPrompt" placeholder="" class="form-control size-option-prompt" value="">
      </div>
    </div>
     
    
    <h3>Informacion producto</h3>
    
     <div class="col-lg-12 form-group">
      <label class="col-lg-2" for="Price">Precio</label>
      <div class="col-lg-4">
        <input type="text" id="price" name="Price" placeholder="" class="form-control price" value="">
      </div>
    </div>
     <div class="col-lg-12 form-group">
      <label class="col-lg-2" for="Discount">Descuento</label>
      <div class="col-lg-1">
        <input type="text" id="discount" name="Discount" placeholder="" class="form-control price" value="">
      </div><label style=""></label>
    </div>
        <div class="col-lg-12 form-group">
      <label class="col-lg-2"  for="RequiresTextField">Envío incluído</label>
      <div class="col-lg-4">
        <input id="opcion2" type="radio"  name="RequiresTextField" class="input-xlarge" ><span>No</span>
         <input id="opcion" type="radio"  name="RequiresTextField"  class="input-xlarge" ><span>Si</span>
      
      </div>

    </div>
      <div id="ocultar" class="col-lg-12 form-group  ">
      <label class="col-lg-2" for="ColorOptionPrompt">Precio de envío</label>
      <div class="col-lg-4">
        <input type="text" id="shipping" name="ColorOptionPrompt" placeholder="" class="form-control color-option-prompt" value="">
      </div>
    </div>
    <div class="col-lg-12 form-group">
      <label class="col-lg-2" for="Weight">Peso</label>
      <div class="col-lg-4">
        <input type="text" id="weight" name="Weight" placeholder="" class="form-control weight" value="">
      </div>
    </div>
    <div class="col-lg-12 form-group">
      <label class="col-lg-2" for="DimentionsWidth">Dimensiones(ancho x alto en centímetros)</label>
      <div class="col-lg-10">
        <div class="col-lg-3"><input type="text" id="width" name="DimentionsWidth" placeholder="" class="ancho form-control dimentions-width" value="">  Ancho</div>
        <div class="col-lg-3"><input type="text" id="height" name="DimentionsHeight" placeholder="" class="form-control dimentions-height" value=""> Altura</div>
       
      </div>
    </div>

  </fieldset>
</form>
            </div>    

            <div id="Product_Images" class="tab-pane"><div class="col-lg-12 form-group margin50">
  
   
  </div>
  <form  action="" method="post" enctype="multipart/form-data" name="formulario" id="formimagenes">
                  <div class="row">
                              <div class="col-md-5">
                                  <div class="col-lg-12 form-group">
                                  <label class="col-sm-3"  for="exampleInputFile">Imagen 1</label>
                                  <div class="col-sm-3">
                                  <input  onchange="" name="foto[]" type="file"  id="pickphoto1" class="inputfile inputfile-4>">
                                </div>
                                </div>
                                
                                <div class="col-lg-12 form-group">
                                  <label class="col-sm-3" for="exampleInputFile">Imagen 2</label>
                                  <div class="col-sm-3">
                                  <input onchange="" name="foto[]" type="file" id="pickphoto2">
                                </div>
                                </div>
                                  <div class="col-lg-12 form-group">
                                  <label class="col-sm-3" for="exampleInputFile">Imagen 3</label>
                                  <div class="col-sm-3">
                                  <input onchange="" name="foto[]" type="file" id="pickphoto3" value="hola">
                                </div>
                                </div>
                                  <div class="col-lg-12 form-group">
                                  <label class="col-sm-3" for="exampleInputFile">Imagen 4</label>
                                  <div class="col-sm-3">
                                  <input onchange="" name="foto[]" type="file" id="pickphoto4">
                                </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                              
      
                              </div>
                            </div>

              
    </form>           
    </div>
 

  <br>
            <div id="Product_Desc" class="tab-pane">
             <div class="col-lg-12 form-group margin50">
      <label class="col-lg-2" for="SizeOptionPrompt">Titulo</label>
      <div class="col-lg-4">
        <input type="text" id="title" name="SizeOptionPrompt" placeholder="" class="form-control size-option-prompt" value="">
      </div>
    </div>


    <div class=" col-lg-12 form-group">
      <label class="col-lg-2" for="ProductType">Garantia</label>
      <div class="col-lg-4">
        <input type="text" id="warranty" name="SizeOptionPrompt" placeholder="" class="form-control size-option-prompt" value="">
      </div>
    </div>

    <div class="col-lg-12 form-group margin50">
    <label class="col-sm-2" for="Description">Descripcion</label>

    <div class="col-sm-6">

     <textarea class="form-control description" id="description" name="Description" rows="4" cols="50" ></textarea>
    </div>

  </div>
     <div id="alert"  class="col-lg-6 form-group"> </div>
  <div class="col-sm-6 col-sm-offset-3" >
    <a id="save" class="btn btn-primary btn-lg " role="button"></a>


  </div>
            
    </div>
  </div>
</div>
        </div>
	</div>

</div>






</body>
</html>