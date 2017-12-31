<?php
session_start();
$cod=$_SESSION['codigo'];
$nombre=$_SESSION['nombre'];
$email=$_SESSION['email'];
$telefono=$_SESSION['telefono'];
$area=$_SESSION['area'];
$id=$_SESSION['id'];
$pass=$_SESSION['pass'];

?>
<html>
    <head>

    </head>
    <body>
                <div class="container animated zoomIn" style="max-width: 500px;width: 100%;background-color: white;border-radius: 7px">
            <div class="row titulocontenedor" >
                <div class="col-lg-12 text-center" >
                    <h3>MODIFICAR  CLAVE</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                   <form name="form" >
                        <input type ="hidden" name="txtcod" value="<?php echo $cod?>">
                <input type ="hidden" name="txtnom" value="<?php echo $nombre?>">
                <input type ="hidden" name="txtema" value="<?php echo $email?>">
                <input type ="hidden" name="txttel" value="<?php echo $telefono?>">
                <input type ="hidden" name="txtare" value="<?php echo $area?>">
                <input type ="hidden" name="txtid" value="<?php echo $id?>">
                <input type ="hidden" name="txtpass" value="<?php echo $pass?>">
      <div class="mens">
            <?php
                 if(isset($_SESSION['mensaje'])){
                     $mensaje=$_SESSION['mensaje'];
                 
                 ?>
                    <div class="alert alert-success animated bounceInRight" >
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <strong ><?php echo  $mensaje?></strong>

                    </div> 
                    <?php  }   ?>
            </div>
                                     <div class="row control-group">

                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contraseña Actual</label>
                                <input type="password"  maxlength="4"class="form-control" name="txtactual" placeholder="&#128273;contraseña actual"></div>
                                <p class="help-block text-danger"></p>
                            </div>
                        
                           <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contraseña Nueva</label>
                      <input type="password" maxlength="4"class="form-control" name="txtnuevo" placeholder="&#128273;nueva contraseña">                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
              
                        <div id="success"></div>
                        <center>
                        <div class="row">
                            <div class="form-group col-xs-12">
                <input type="button" onclick="modificarLoginClaveJefe('<%=request.getContextPath()%>')" value="modificar" class="btn btn-success btn-lg">                            </div>
                           
                        </div>
                                        <div class="row">
                            <div class="form-group col-xs-12">
                  <input type="button" onclick="salir('<%=request.getContextPath()%>','Jefe',12)" value="salir" class="btn btn-success btn-lg">
                            </div>
                           
                        </div> 
                                               <div class="row">
                            <div class="form-group col-xs-12">
                <input type="button" onclick="correojefe('../Controlador')"  value="Enviar correo" class="btn btn-success btn-lg">
                            </div>
                           
                        </div> 
                        </center>

                   </form>
                </div>
                             
            </div>
                </div>
    </body>
</html>



