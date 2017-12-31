<!DOCTYPE html>
<?php
session_start();

?>

<html lang="en" > 
    <head>
               <meta charset="utf-8">
         <meta http-equiv=?Content-Language? content=?es?/>
       <meta name="author" content="Giampieer Mariscal">
       <meta name="classification" content="proyecto gestion,isagen,ejemplo,practica gestion">
       <meta name="keywords" content="proyecto gestion,isagen,ejemplo,practica,gestion">
       <META NAME="robots" content="index,follow">
       <META NAME="distribution" content="global">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--adaptar el bootstrap para android--> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Gestion de proyectos">
        <meta name="twitter:site" content="@miweb"/>
        <meta property="article:publisher" content="https://www.facebook.com/miweb"/>
        
    <!--sitemap-->
    <urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

</urlset>

               <script src="../js/jquery.min.js"></script>
               <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
               <script  src="../js/bootstrap.min.js" ></script>
                  <!--alerta-->
                  <link rel="Stylesheet" type="text/css" href="../css/sweetalert.css">
                  <script src="../js/sweetalert.min.js"></script>
<!--principal-->
         <link rel="Stylesheet" type="text/css" href="../css/lado.css">
           <!--diseño template-->
         <link rel="Stylesheet" type="text/css" href="../css/freelancer.min.css">
                 <!--ajax-->
                <script src="../js/ajax300.js"></script>
               <!--animacion-->
               <link rel="Stylesheet" type="text/css"href="../css/animate.css">
                 <link rel="Stylesheet" type="text/css" href="../css/alertify.min.css">
                 <link rel="Stylesheet" type="text/css" href="../css/default.min.css">
                <script src="../js/alertify.min.js"></script>
                <script src="../js/push.min.js"></script>
  

           <!--color barra chrome android-->
         <meta name="theme-color" content="#009688" />
<script>
 
             function enfocar(){
            document.form.txtnombre.focus();
     
        }
 
</script>

       <title>Login</title>
   
</head>

<body onload="enfocar(),bloqueo()" style="  padding-top: 70px;" >
    <div class="container animated zoomIn" style="max-width: 500px;width: 96%;background-color: white;border-radius: 7px">
            <div class="row titulocontenedor" >
                <div class="col-lg-12 text-center" >
                    <h3> LOGIN</h3>
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
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <select   name="txtseleccion" id="txtseleccion"  class="form-control" >
                                <option value="0">------------SELECCIONAR-----------</option>
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                <option value="PERSONAL">PERSONAL</option></select>
                </select>
                            </div>
                        </div>
                   
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Usuario</label>
                                <input maxlength="20" type="text" class="form-control"name="txtnombre" placeholder="&#128273; Usuario">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                                <br>
                     
                 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contraseña</label>
                                <input type="password" maxlength="4"class="form-control" name="txtcontra" placeholder="&#128274; Contraseña">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                           <div id="success"></div>
                        <center>
                            <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input style="padding: 5px" type="button" onclick="enter('../Controlador')" value="INGRESAR" class="btn btn-success btn-lg">
                            </div>
                           
                        </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    <script src="../js/freelancer.min.js"></script>  
</body>
</html>