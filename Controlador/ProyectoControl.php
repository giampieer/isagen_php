<?php
session_start();
require_once '../DAO/ProyectoDao.php';
require_once '../BEAN/ProyectoBean.php';
require_once '../DAO/JefeDao.php';
$OPCION=$_REQUEST['op'];
switch ($OPCION){
    case 1:{
            unset($_SESSION['mensaje']);
    $objproydao=new ProyectoDao();
        $lista=$objproydao->ListarProyectos();
     
            $_SESSION['lista']=$lista;
            $destino="../Proyecto/ProyectoMant.php";
         
              
        
            break;
}
//declare(strict_types=1);activamos el mododo estricto
    case 2:{
            unset($_SESSION['mensaje']);
        $codigoproy=$_REQUEST['cod'];
          $objproydao=new ProyectoDao();
          $objproybean=new ProyectoBean();
          $objproybean->setNumero($codigoproy);
            $i=$objproydao->EliminarProyecto($objproybean);
             if($i == 1)
        {
            $mensaje="Registro Eliminado Satisfactoriamente";
        }else
        {
            $mensaje="Registro no Eliminado";
        }
        $_SESSION['mensaje']= $mensaje;
                         $lista=$objproydao->ListarProyectos();
     
            $_SESSION['lista']=$lista;
         $destino="../Proyecto/ProyectoMant.php";
        break;
}    
    case 3:{
        unset($_SESSION['mensaje']);
        $objjefedao=new JefeDao();
        $lista=$objjefedao->ListarJefedeProyecto();
        $_SESSION['listacombo']=$lista;
       $destino="../Proyecto/GrabarProyecto.php";
       
            break;
        
    }
    case 4:{
            unset($_SESSION['mensaje']);
    $numero=$_REQUEST['txtnum'];
    $titulo=$_REQUEST['txttit'];
            $duracion=$_REQUEST['txtdur'];
            $descripcion=$_REQUEST['txtdes'];
            $tipo=$_REQUEST['txttip'];
            $cantidad=$_REQUEST['txtcan'];
            $inicio=$_REQUEST['txtini'];
            $fin=$_REQUEST['txtfin'];
            $gastos=$_REQUEST['txtpre'];
            $codjefe=$_REQUEST['txtcodjefe'];
            
            $objproydao=new ProyectoDao();
            $objproybean=new ProyectoBean();
            $objproybean->setNumero($numero);
            $objproybean->setTitulo($titulo);
            $objproybean->setDuracion($duracion);
            $objproybean->setDescripcion($descripcion);
            $objproybean->setTipo($tipo);
            $objproybean->setFases($cantidad);
            $objproybean->setInicio($inicio);
            $objproybean->setFin($fin);
            $objproybean->setGastos($gastos);
            $objproybean->setCODJEFE($codjefe);
           $i=$objproydao->InsertarProy($objproybean);
            if($i == 1){
            $mensaje="Registro Insertado Satisfactoriamente";
        }else
        {
            $mensaje="Registro no Insertado";
        }
        
        $_SESSION['mensaje']= $mensaje;
             $destino = "../Proyecto/GrabarProyecto.php"; 
           
            
    break;
    }
    case 5:{
            unset($_SESSION['mensaje']);
     $cod=$_REQUEST['cod'];
     $objbean=new ProyectoBean();
     $objbean->setNumero($cod);
     $objdao=new ProyectoDao();
     
     $objbean=$objdao->CargarProyecto($objbean);
     $numero=$objbean->getNumero();
     $titulo=$objbean->getTitulo();
     $duracion=$objbean->getDuracion();
     $descripcion=$objbean->getDescripcion();
     $tipo=$objbean->getTipo();
     $cantidad=$objbean->getFases();
     $inicio=$objbean->getInicio();
     $fin=$objbean->getFin();
     $gastos=$objbean->getGastos();
     $codjefe=$objbean->getCODJEFE();
     $duracion=$objbean->getDuracion();
     $nombjefe=$objbean->getNOMBJEFE();
        $_SESSION['numero']=$numero;
           $_SESSION['titulo']=$titulo;
              $_SESSION['duracion']=$duracion;
                 $_SESSION['descripcion']=$descripcion;
                    $_SESSION['tipo']=$tipo;
                       $_SESSION['fases']=$cantidad;
                          $_SESSION['inicio']=$inicio;
                             $_SESSION['fin']=$fin;
                                $_SESSION['gastos']=$gastos;
                                   $_SESSION['codjefe']=$codjefe;
                                   $_SESSION['nombjefe']=$nombjefe;
                                   
                                    $objjefedao=new JefeDao();
        $lista=$objjefedao->ListarJefedeProyecto();
        $_SESSION['listacombo']=$lista;
    $destino="../Proyecto/ModificarProyecto.php";
   
        break;
    }
    case 6:{
            unset($_SESSION['mensaje']);
      $numero=$_REQUEST['txtnum'];
    $titulo=$_REQUEST['txttit'];
            $duracion=$_REQUEST['txtdur'];
            $descripcion=$_REQUEST['txtdes'];
            $tipo=$_REQUEST['txttip'];
            $cantidad=$_REQUEST['txtcan'];
            $inicio=$_REQUEST['txtini'];
            $fin=$_REQUEST['txtfin'];
            $gastos=$_REQUEST['txtpre'];
            $codjefe=$_REQUEST['txtcodjefe'];
            
            $objproydao=new ProyectoDao();
            $objproybean=new ProyectoBean();
            $objproybean->setNumero($numero);
            $objproybean->setTitulo($titulo);
            $objproybean->setDuracion($duracion);
            $objproybean->setDescripcion($descripcion);
            $objproybean->setTipo($tipo);
            $objproybean->setFases($cantidad);
            $objproybean->setInicio($inicio);
            $objproybean->setFin($fin);
            $objproybean->setGastos($gastos);
            $objproybean->setCODJEFE($codjefe);
           $i=$objproydao->ModificarProy($objproybean);
           if($i == 1){
            $mensaje="Registro Modificado Satisfactoriamente";
        }else
        {
            $mensaje="Registro no Modificado";
        }
         $_SESSION['mensaje']= $mensaje;
         $objproydao=new ProyectoDao();
        $lista=$objproydao->ListarProyectos();
     
            
       
        $_SESSION['lista']=$lista;    
        $destino = "../Proyecto/ProyectoMant.php"; 
            
    }
    case 7:{

        break;
    }
    case 8:{
            unset($_SESSION['mensaje']);
    $cod=$_SESSION['cod'];
    $_SESSION['codigo']=$cod;
    $destino="../Proyecto/FrmInfo.php";
   
        break;
    }
}
   header("Location:$destino");
?>

