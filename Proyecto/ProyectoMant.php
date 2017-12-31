
   
<?php
session_start();
$lista=$_SESSION['lista'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
       
<script>
              paginacion();
               </script>
    </head>
    <body>
         <br>
         <div class="animated zoomIn"  >
        <div class="panel ">
            <div class="panel-heading titulocontenedor">
                <h3 ><strong><center>Relacion de los Proyectos</center></strong></h3>  
                <hr class="star-primary">
            </div>
            <br>
            <div class="btntabla">
            <input class="btn btn-success btn-lg" type="button" value="Nuevo" onclick="MenuOpciones('../Controlador','Proyecto',3,'')" >              
            </div>
            <div class="container-fluid">
                <div class="panel-body">                      
                        <div class="form-group text-center">
            <div class="table-responsive ">
             <?php
                 if(isset($_SESSION['mensaje'])){
                     $mensaje=$_SESSION['mensaje'];
                 
                 ?>
                    <div class="alert alert-success animated bounceInRight" >
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <strong ><?php echo  $mensaje?></strong>

                    </div> 
                    <?php  }   ?>
                              <table class="table table-hover" id="tabla"cellspacing="0" width="100%" >                 
                    <thead >
                        <tr >
                
                    <th>COD</th>
                    <th>COORDINADOR</th>
                    <th>TITULO</th>
                    <th>DURACION</th>
                    <th>DESCRIPCION</th>
                    <th>TIPO</th>
                    <th>FASES</th>
                    <th>F.INICIO</th>
                    <th>F.FIN</th>
                    <th>GASTOS</th>
                    <th> </th>
                    
                    <th> </th>
                    <th> </th>
             
             </tr>
    </thead>
    <tbody >
             <?php
             foreach ($lista as $reg ){
             ?>
             <tr >
                    
                    <td><?php echo $reg['numero'] ; ?></td>
                     <td><?php echo $reg['titulo']  ;?></td>
                      <td><?php echo $reg['duracion'] ; ?></td>
                    <td><?php echo $reg['descripcion'] ; ?></td>
                     <td><?php echo $reg['tipo']  ;?></td>
                      <td><?php echo $reg['fases'] ; ?></td>
                        <td><?php echo $reg['inicio'] ; ?></td>
                     <td><?php echo $reg['fin']  ;?></td>
                      <td><?php echo $reg['gastos'] ; ?></td>
                        <td><?php echo $reg['nombjefe'] ; ?></td>

                  
             
              <td align="center"><input  class="animated infinite pulse" type="image" width="30px" src="../imagenes/pdf.png" name="elegir"  onclick="cargar('../Controlador','Proyecto',8,'cod='+<?php echo $reg['numero'] ; ?>)"></td>                 
              <td align="center"><input class="animated infinite pulse"type="image" width="30px" src="../imagenes/write.png" name="elegir"  onclick="cargar('../Controlador','Proyecto',5,'cod='+<?php echo $reg['numero'] ; ?>)"></td>
                    <td align="center"><input class="animated infinite pulse"type="image" width="30px" src="../imagenes/delete.png" name="elegir"  onclick="eliminar('../Controlador','Proyecto',2,'cod='+<?php echo $reg['numero'] ;?>)"></td>
                  <?php    }   ?> 
                </tr>
    </tbody>
                </table>
                        </div>
                </div>
            </div>
        </div>   
        </div>
         </div>
    </body>
</html>

