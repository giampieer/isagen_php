<?php
session_start();
require_once '../DAO/JefeDao.php';
require_once '../BEAN/JefeBean.php';
require '../correo/PHPMailerAutoload.php';
$OPCION=$_REQUEST['op'];
switch ($OPCION){
    case 1:{
         unset($_SESSION['mensaje']);
        $select=$_REQUEST['txtseleccion'];
         $usuario=$_REQUEST['txtnombre'];
        $clave=$_REQUEST['txtcontra'];
        $objdao=new JefeDao();
       
        $objbean=new JefeBean();
        $objbean->setID($usuario);
        $objbean->setPASS($clave);
       $i= $objdao->ValidarJefe($objbean);
      
        if($i==1)
        {
            $objbean=$objdao->DatosAdmin($objbean);
          $id=$objbean->getID();
       $codigo=$objbean->getCODJEFE();
       $_SESSION['id']=$id;
       $_SESSION['cod']=$codigo;;
          $destino = "../inicio/menuadmi.php";         
        
        }
        else
        {
          $mensaje="Datos Incorrectos , vuelva Ingresar correctamente";
    $_SESSION['mensaje']= $mensaje;
          $destino = "../index.php";     
         
        }
        break;   
    }
    case 2:{
         unset($_SESSION['mensaje']);
    $objbean=new JefeBean();
    $objdao=new JefeDao();
        $cod=$_REQUEST['cod'];
        $objbean->setCODJEFE($cod);
    $objbean=$objdao->CargarDatosJefe($objbean);
    $codi=$objbean->getCODJEFE();
    $nombjefe=$objbean->getNOMBJEFE();
    $email=$objbean->getEMAJEFE();
    $telefono=$objbean->getTELFJEFE();
    $area=$objbean->getAREAJEFE();
    $id=$objbean->getID();
    $pass=$objbean->getPASS();
    $_SESSION['codigo']=$codi;
    $_SESSION['nombre']=$nombjefe;
    $_SESSION['email']=$email;
    $_SESSION['telefono']=$telefono;
    $_SESSION['area']=$area;
    $_SESSION['id']=$id;
    $_SESSION['pass']=$pass;
    $destino="../Jefe/FrmModificarJefeLogin.php";
   
        break;
    }
    case 3:{
    unset($_SESSION['mensaje']);
    $objbean=new JefeBean();
    $objdao=new JefeDao();
        $cod=$_REQUEST['cod'];
        $objbean->setCODJEFE($cod);
    $objbean=$objdao->CargarDatosJefe($objbean);
    $codi=$objbean->getCODJEFE();
    $nombjefe=$objbean->getNOMBJEFE();
    $email=$objbean->getEMAJEFE();
    $telefono=$objbean->getTELFJEFE();
    $area=$objbean->getAREAJEFE();
    $id=$objbean->getID();
    $pass=$objbean->getPASS();
    $_SESSION['codigo']=$codi;
    $_SESSION['nombre']=$nombjefe;
    $_SESSION['email']=$email;
    $_SESSION['telefono']=$telefono;
    $_SESSION['area']=$area;
    $_SESSION['id']=$id;
    $_SESSION['pass']=$pass;
    $destino="../Jefe/FrmModificarClaveJefe.php";
    
        break;
    }
    case 4:{
          unset($_SESSION['mensaje']);
        $codigo=$_REQUEST['txtcod'];
        $nombre=$_REQUEST['txtnom'];
        $email=$_REQUEST['txtema'];
       $telefono=$_REQUEST['txttel'];
       $area=$_REQUEST['txtare'];
      $id=$_REQUEST['txtid'];
       $pass=$_REQUEST['txtpass'];
        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'isagen24@gmail.com';                 // SMTP username
$mail->Password = 'isagen2424';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, 'Empresa Isagen');
$mail->addAddress($email, $id);     // Add a recipient

$mail->addReplyTo('isagen24@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'SEGURIDAD ISAGEN';//asunto
$mail->Body    = 'RECORDAR QUE SU CONTRASEÑA DE ADMINISTRADOR ES :'.$pass;
$mail->AltBody = '';

if(!$mail->send()) {
      $mensaje="CORREO ELECTRONICO NO ENVIADO";
} else {
   
    $objbean=new JefeBean();
    $objdao=new JefeDao();
    $objbean->setCODJEFE($codigo);
    $objbean=$objdao->CargarDatosJefe($objbean);
    $codi=$objbean->getCODJEFE();
    $nombjefe=$objbean->getNOMBJEFE();
    $email=$objbean->getEMAJEFE();
    $telefono=$objbean->getTELFJEFE();
    $area=$objbean->getAREAJEFE();
    $id=$objbean->getID();
    $pass=$objbean->getPASS();
    $_SESSION['codigo']=$codi;
    $_SESSION['nombre']=$nombjefe;
    $_SESSION['email']=$email;
    $_SESSION['telefono']=$telefono;
    $_SESSION['area']=$area;
    $_SESSION['id']=$id;
    $_SESSION['pass']=$pass;
    $mensaje="CORREO ELECTRONICO ENVIADO SATISFACTORIAMENTE";
      
}
    $_SESSION['mensaje']= $mensaje;
    $destino="../Jefe/FrmModificarClaveJefe.php";
   
        break;
    }
    case 5:{
     $destino="../index.php";
        break;
    }
    
}
 header("location:$destino");
?>