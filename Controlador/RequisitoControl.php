<?php
session_start();
require_once '../BEAN/RequisitoBean.php';
require_once '../DAO/RequisitoDao.php';
$op=$_REQUEST['op'];
switch ($op){
    case 1:{
            unset($_SESSION['mensaje']);
        $objdao=new RequisitoDao();
        $lista=$objdao->ListarRequsito();
        $_SESSION['lista']=$lista;
        $destino="../Requisito/RequisitoMant.php";
     
            break;
        
    }
}
   header("Location:$destino");

?>
