<?php
session_start();
require_once '../BEAN/JefeBean.php';
require_once '../DAO/JefeDao.php';
$id=$_SESSION['id'];
$codigo=$_SESSION['cod'];
?>
<!DOCTYPE html>
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
    
    
<!--animacion-->
          <link rel="Stylesheet" type="text/css"href="../css/animate.css">
  
               <script src="../js/jquery.min.js"></script>
              <script src="../js/jquery.dataTables.min.js"></script>
           <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.min.css">
              <script src="../js/dataTables.bootstrap.min.js"></script>
              <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
         <script  src="../js/bootstrap.min.js" ></script>
     

             <!-- CSS principal-->
         <link rel="Stylesheet" type="text/css" href="../css/lado.css">
     

       <!-- redireccion del ajax-->
         <script type="text/javascript" src="../js/ajax300.js"></script>
        
         <!--alerta-->
         <link rel="Stylesheet" type="text/css" href="../css/sweetalert.css">
         <script src="../js/sweetalert.min.js"></script>
         
         <!--diseño template-->
         <link rel="Stylesheet" type="text/css" href="../css/freelancer.min.css">
         <!--iconos freelancer-->
           <link rel="Stylesheet" type="text/css" href="../css/font-awesome.min.css">

        <!--reloj,barra lado-->
         <script type="text/javascript" src="../js/complementos.js"></script>

         

           <!--validacion-->
         <link rel="Stylesheet" type="text/css" href="../css/alertify.min.css">
         <link rel="Stylesheet" type="text/css" href="../css/default.min.css">
         <script src="../js/alertify.min.js"></script>
         
         <!--loading-->
         <link rel="Stylesheet" type="text/css" href="../css/prelodr.min.css">
         <script src="../js/prelodr.min.js"></script>
         
         <!--notificacion-->
         <script src="../js/push.min.js"></script>
         
         <!--fuente  google-->
           <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

           <!--calendario-->
           <script type="text/javascript" src="../js/moment-with-locales.min.js"></script>
         <link rel="Stylesheet" type="text/css" href="../css/bootstrap-material-datetimepicker.css">
         <script src="../js/bootstrap-material-datetimepicker.js"></script>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--icono para calendario-->
          <title>Gestion de Proyectos Administrador</title>
             <!--color barra chrome android-->
         <meta name="theme-color" content="#009688" />
          
</head>

<body id="page-top" class="index " onload="ingresarmenu('<?php echo $id;  ?>')" >

 
    <div id="wrapper" >
        <div class="overlay" ></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                     <a class="navbar-brand" href="javascript:cargar('../Controlador','Jefe',12)"  >ISAGEN</a>
    </li>
                     <li class="dropdown">
                     

                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"  > BIENVENIDO: <?php echo $id;  ?>  </a>          
          <ul class="dropdown-menu" role="menu">
                 <li class="dropdown-header">Seleccione</li>
                 <li><a  id="menu" href="javascript:cargar('../Controlador','Jefe',2,'cod='+ <?php echo $codigo; ?>   )"><img class="imglado" src="../imagenes/actualizarmenu.png" >Actualizar Datos</a></li>
                 <li><a  id="menu" href="javascript:cargar('../Controlador','Jefe',3,'cod='+ <?php echo $codigo; ?>     )"><img class="imglado"src="../imagenes/contrasenamenu.png" >Cambiar  Password</a></li>
</ul>

        </li>
          <li class="dropdown">
                    <a   class="dropdown-toggle"  data-toggle="dropdown" href="#">PROYECTO</a>
        <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Seleccione</li>
            <li><a  id="menu"  href="javascript:MenuOpciones('../Controlador','Proyecto',1,'')"> <img class="imglado" src="../imagenes/guardarmenu.png"  >Nuevo  </a></li>
            <li><a   id="menu"href="javascript:MenuOpciones('../Controlador','Requisito',1,'')"><img class="imglado" src="../imagenes/requisitomenu.png"  >Requisito</a> </li>
            <li><a id="menu"  href="javascript:MenuOpciones('<%=request.getContextPath()%>','Problema',1,'')"><img class="imglado"src="../imagenes/problemamenu.png"  >Problema</a></li>
            <li><a   id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Objetivo',1,'')"><img class="imglado"src="../imagenes/objetivomenu.png" >Objetivos</a></li>
                  </ul>
                </li>
               
                    <li class="dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">PERSONAL</a>
                  <ul class="dropdown-menu" role="menu">
                      <li class="dropdown-header">Seleccione</li>
                      <li><a   id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Jefe',1,'')"><img class="imglado"src="../imagenes/jefemenu.png" >Jefe</a></li>
                      <li><a   id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Personal',1,'')"><img class="imglado"src="../imagenes/trabajadormenu.png" >Colaboradores</a></li>
           </ul>
                </li>
                    
                <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">SEGUIMIENTO</a>
                  <ul class="dropdown-menu" role="menu">
                      <li class="dropdown-header">Seleccione</li>
                      <li><a id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Reuniones',1,'')"><img class="imglado"src="../imagenes/reunionmenu.png" >Reuniones</a></li>
                      <li><a id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Cambios',1,'')"><img class="imglado" src="../imagenes/cambiomenu.png"  >Cambios</a></li>
                      <li><a  id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Interesados',1,'')"><img class="imglado"src="../imagenes/interesadomenu.png" >Interesados</a></li>
               <li><a  id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','Riesgos',1,'')"><img class="imglado" src="../imagenes/riesgosmenu.png" >Riesgos</a></li>
                <li><a   id="menu"href="javascript:MenuOpciones('<%=request.getContextPath()%>','Solucion',1,'')"><img class="imglado" src="../imagenes/solucionmenu.png" >Solucion</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">CRONOGRAMA</a>
                  <ul class="dropdown-menu" role="menu">
                      <li class="dropdown-header">Seleccione</li>
                  <li><a  id="menu"href="javascript:MenuOpciones('<%=request.getContextPath()%>','Actividades',1,'')"><img class="imglado"src="../imagenes/actividadesmenu.png" >Actividades</a></li>
              <li><a  id="menu" href="javascript:MenuOpciones('<%=request.getContextPath()%>','ControldeCalidad',1,'')"><img class="imglado"src="../imagenes/controlmenu.png" >Control de Calidad</a></li>
          </ul>
                </li>
                <li class="dropdown">
                       <li><a  id="cerrar"   href="javascript:cerrarsesion('../Controlador')">CERRAR SESION</a></li>
     
                </li>
  </ul>
        </nav>
      
          
          <!--hamburgueza-->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed animated bounceInLeft " data-toggle="offcanvas">
                <span class="hamb-top"></span>
    	<span class="hamb-middle"></span>
	<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!--<a class="navbar-brand" href="#page-top">Start Bootstrap</a>-->
                
                <a class="navbar-brand" href="#contact"  >BIENVENIDO: <?php echo $id; ?>  </a>
        <!--llama el reloj-->
         <a class="navbar-brand "href="#page-top"  id="tick2" > </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
             
                     <li class="page-scroll">
                        <a href="#contact" >Gestion de Proyectos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="animated fadeInDown" >
        
        <div class="container">
             <div aria-busy="true" aria-label="Loading, please wait." class="header1"role="progressbar"></div>

            
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="../imagenes/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">EMPRESA </span>
                     <hr class="star-light">
                        <span class="skills">Energia Productiva</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    


    <!-- Contact Section -->
    <section id="contact" >
     
        <div class="container anchoformulario" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="tituloblanco">SISTEMA DE GESTION DE PROYECTOS</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" id="carrusel">
<div class="carousel fade-carousel slide  container animated zoomIn"  data-ride="carousel" data-interval="4000" id="bs-carousel">
  <div class="overlay"></div>
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
     </ol>
    <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero" >
                  <hgroup >
            <h1>ISAGEN</h1>        
            <h4>Somos una empresa de generación y comercialización de energía concebida como un grupo humano que
              busca satisfacer las necesidades de otros grupos humanos y construir con ellos bienestar
              y desarrollo para el país.</h4>
        </hgroup>
            </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">    
        <hgroup>
            <h1>MISION</h1>        
            <h4>ISAGEN desarrolla proyectos de generación, produce y comercializa energía eléctrica y ofrece soluciones asociadas,
              para satisfacer las necesidades energéticas de sus clientes y crear valor empresarial.</h4>
        </hgroup>       
             </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>VISION</h1>        
            <h4>Generamos energía inteligente y prosperidad para la sociedad. </h4>
        </hgroup>
       </div>
    </div>
  </div> 
</div> 
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="text-center animated fadeInUp">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Enlaces</h3>
                        <ul class="list-inline">
                            <li>
                                <a href=https://www.isagen.com.co target="_blank" class="btn-social btn-outline"><i class="fa fa-google" aria-hidden="true" style="padding: 10px"></i></a>
                            </li>
                            <li>
                                <a href=https://www.facebook.com/IsagenEnergiaProductiva/?fref=ts target="_blank" class="btn-social btn-outline"><i class="fa fa-facebook" aria-hidden="true" style="padding: 10px"></i></a>
                            </li>
                            <li>
                                <a  href=https://www.youtube.com/user/ISAGENVideos target="_blank" class="btn-social btn-outline"><i class="fa fa-youtube-play" aria-hidden="true" style="padding: 10px"></i></a>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                         </div>
                </div>
            </div>
            
        </div>
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">



                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
            </div>
        </div>
    </div>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   <!--diseño template -->
    <script src="../js/freelancer.min.js"></script>
</body>
</html>
