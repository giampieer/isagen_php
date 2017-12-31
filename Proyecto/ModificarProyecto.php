<?php
session_start();
  $numero=$_SESSION['numero'];
  $titulo=$_SESSION['titulo'];
  $duracion=$_SESSION['duracion'];
  $descripcion=$_SESSION['descripcion'];
  $tipo=$_SESSION['tipo'];
  $cantidad=$_SESSION['fases'];
  $inicio=$_SESSION['inicio'];
  $fin=$_SESSION['fin'];
  $gastos=$_SESSION['gastos'];
  $nombjefe=$_SESSION['nombjefe'];
  $codjefe=$_SESSION['codjefe'];
  $lista=$_SESSION['listacombo'];
?>
<html lang="en">
     <head>
     <script>
          //calendario
    $('#txtini').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
  $('#txtfin').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
         
     </script>
    </head>
    <body>
<div class="container animated zoomIn" style="max-width: 500px;width: 100%;background-color: white;border-radius: 7px;">
            <div class="row" style="background-color: #009688">
                <div class="col-lg-12 text-center">
                    <h3>MODIFICAR PROYECTO</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                 <form name="form" id="contactForm" novalidate>
                      <input class="form-control" placeholder="Codigo" name="txtnum"   readonly="readonly"type ="hidden"   value="<?php echo $numero;?>">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Titulo del Proyecto</label>
                                <input type="text" class="form-control" name="txttit" placeholder="Titulo del Proyecto" value="<?php echo $titulo;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                              
                                <select name="txtcodjefe" id="txtcodjefe" class="form-control">
                                <option value="<?php echo $codjefe?>"><?php echo $nombjefe;?></option>
                                <?php foreach ($lista as $reg){?>
                                <option value="<?php echo $reg['codjefe'];?>"><?php echo $reg['nombjefe'];?></option>
                                <?php };?>
                </select>
                            </div>
                        </div>
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Duracion</label>
                                <input type="text" class="form-control" name="txtdur" placeholder="Duracion" value="<?php echo $duracion;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Descripcion del Proyecto</label>
                                <input type="text" class="form-control"name="txtdes" placeholder="Descripcion del Proyecto" value="<?php echo $descripcion;?>" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fecha Inicio</label>
                                <input type="text" class="form-control" name="txtini" id="txtini" placeholder="Fecha Inicio"value="<?php echo $inicio;?>" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fecha Fin</label>
                                <input type="text" class="form-control" name="txtfin" id="txtfin" placeholder="Fecha Fin"value="<?php echo $fin;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <br>
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <select  name="txttip" id="txttip" class="form-control" >
           
                                 
                                 <?php 
                                 if($tipo=="Publicos"){?>
                                   <option value="Publicos"selected >PUBLICOS</option>
                                <option value="Privados" >PRIVADOS</option>
                                <option value="Experimentales" >EXPERIMENTALES</option>
                                <option value="Normalizados" >NORMALIZADOS</option>
                                <option value="Productivos" >PRODUCTIVOS</option>
                                 <option value="Sociales">SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>
                                 <?php  }
                                 else{
                                     if($tipo=="Privados"){?>
                                               <option value="Publicos" >PUBLICOS</option>
                                <option value="Privados"selected >PRIVADOS</option>
                                <option value="Experimentales" >EXPERIMENTALES</option>
                                <option value="Normalizados" >NORMALIZADOS</option>
                                <option value="Productivos" >PRODUCTIVOS</option>
                                 <option value="Sociales">SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>
                                     <?php  }else{
                                         if($tipo=="Normalizados"){?>
                                                   <option value="Publicos" >PUBLICOS</option>
                                <option value="Privados" >PRIVADOS</option>
                                <option value="Experimentales" >EXPERIMENTALES</option>
                                <option value="Normalizados" selected>NORMALIZADOS</option>
                                <option value="Productivos" >PRODUCTIVOS</option>
                                 <option value="Sociales">SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>
                                        <?php   }else{
                                             if($tipo=="Experimentales"){?>
                                                       <option value="Publicos" >PUBLICOS</option>
                                <option value="Privados" >PRIVADOS</option>
                                <option value="Experimentales" selected>EXPERIMENTALES</option>
                                <option value="Normalizados" >NORMALIZADOS</option>
                                <option value="Productivos" >PRODUCTIVOS</option>
                                 <option value="Sociales">SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>
                                              <?php }else{
                                                 if($tipo=="Productivos"){?>
      <option value="Publicos" >PUBLICOS</option>
                                <option value="Privados" >PRIVADOS</option>
                                <option value="Experimentales" >EXPERIMENTALES</option>
                                <option value="Normalizados" >NORMALIZADOS</option>
                                <option value="Productivos" selected>PRODUCTIVOS</option>
                                 <option value="Sociales">SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>                                                <?php   }else{
                                                     if($tipo=="Sociales"){?>
                                                          <option value="Publicos" >PUBLICOS</option>
                                <option value="Privados" >PRIVADOS</option>
                                <option value="Experimentales" >EXPERIMENTALES</option>
                                <option value="Normalizados" >NORMALIZADOS</option>
                                <option value="Productivos">PRODUCTIVOS</option>
                                 <option value="Sociales" selected>SOCIALES</option>
                                <option value="Investigacion">INVESTIGACION</option>
                                                      <?php }else{
                                                         if($tipo=="Investigacion"){?>
                                                               <option value="Publicos" >PUBLICOS</option>
                                <option value="Privados" >PRIVADOS</option>
                                <option value="Experimentales" >EXPERIMENTALES</option>
                                <option value="Normalizados" >NORMALIZADOS</option>
                                <option value="Productivos">PRODUCTIVOS</option>
                                 <option value="Sociales">SOCIALES</option>
                                 <option value="Investigacion" selected>INVESTIGACION</option>
                                                        <?php   }
                                                     }
                                                 }
                                             }
                                         }
                                     }
                                 }
                                 
                                 ?>
                </select>
                            </div>
                        </div>
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fases</label>
                                <input type="number" class="form-control"name="txtcan" placeholder="Fases" value="<?php echo $cantidad;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                      <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Presupuesto</label>
                                <input type="text" class="form-control"name="txtpre" placeholder="Presupuesto" value="<?php echo $gastos;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                     
                        <br>
                        <div id="success"></div>
                        <center>
                        <div class="row">
                            <div class="form-group col-xs-12">
                            <input type="button" onclick="modificarProyecto('../Controlador')" value="modificar" class="btn btn-success btn-lg">
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