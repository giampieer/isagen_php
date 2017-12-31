<?php
session_start();
require_once '../DAO/ProyectoDao.php';
require_once '../DAO/JefeDao.php';
$objproydao=new ProyectoDao();

$lista=$_SESSION['listacombo'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
<script>
            function enfocar(){
                document.form.txttit.focus();
            }
 //calendario
    $('#txtini').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
  $('#txtfin').bootstrapMaterialDatePicker({ weekStart : 0, time: false }); 
</script>
    </head>
    <body onload="enfocar()" >
   <div class="container animated zoomIn" style="max-width: 500px;width: 100%;background-color: white;border-radius: 7px">
            <div class="row titulocontenedor" >
                <div class="col-lg-12 text-center" >
                    <h3>REGISTRAR  PROYECTO</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="form" ><br>
                             
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
                             <?php  $i=$objproydao->generarCodigo();
                     if($i==0){$i=1;}
                     else{$i=$objproydao->generarCodigo();}?>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Codigo</label>
                                <input type="text" class="form-control" placeholder="Codigo" name="txtnum" value="<?php echo $i?>" readonly="readonly">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Titulo del Proyecto</label>
                                <input type="text" class="form-control" name="txttit" placeholder="Titulo del Proyecto">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                              
                                <select name="txtcodjefe" id="txtcodjefe" class="form-control">
                                <option value="0">----- Seleccionar Coordinador -----</option>
                                <?php foreach ($lista as $reg){ ?>
                                <option value="<?php echo $reg['codjefe'];?>"><?php echo $reg['nombjefe'] ; ?></option>
                                <?php }; ?>
                </select>
                            </div>
                        </div>
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Duracion</label>
                                <input type="text" class="form-control" name="txtdur" placeholder="Duracion" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Descripcion del Proyecto</label>
                                <input type="text" class="form-control"name="txtdes" placeholder="Descripcion del Proyecto" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fecha Inicio</label>
                                <input type="text" class="form-control" name="txtini"  id="txtini" placeholder="Fecha Inicio">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
              
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fecha Fin</label>
                                <input type="text" class="form-control" name="txtfin" id="txtfin" placeholder="Fecha Fin">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                <br>
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <select  name="txttip" id="txttip" class="form-control" >
                                <option value="0">  --Seleccionar Tipo--  </option>
                                <option value="Publicos">PUBLICOS</option>
                                <option value="Privados">PRIVADOS</option>
                                <option value="Experimentales">EXPERIMENTALES</option>
                                <option value="Normalizados">NORMALIZADOS</option>
                                <option value="Productivos">PRODUCTIVOS</option>
                                <option value="Sociales">SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>
                </select>
                            </div>
                        </div>
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fases</label>
                                <input type="number" class="form-control"name="txtcan" placeholder="Fases" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Presupuesto</label>
                                <input type="text" class="form-control"name="txtpre" placeholder="Presupuesto">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                     
                        <br>
                        <div id="success"></div>
                        <center>
                        <div class="row">
                            <div class="form-group col-xs-12">
                            <input type="button" onclick="grabarProyecto('../Controlador')" value="grabar" class="btn btn-success btn-lg">
                            </div>
                           
                        </div>
                                        <div class="row">
                            <div class="form-group col-xs-12">
                <input type="button" onclick="salir('../Controlador','Proyecto',1)" value="salir" class="btn btn-success btn-lg">
                            </div>
                           
                        </div> 
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>