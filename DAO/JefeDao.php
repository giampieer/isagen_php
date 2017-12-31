<?php
require_once '../UTIL/ConexionBD.php';
require_once '../BEAN/JefeBean.php';
class JefeDao {
   public function DatosAdmin(JefeBean $obj){
      
       try {
          
         $sql=  "select codjefe,nombjefe,emajefe,telfjefe,areajefe,id,pass from jefe where ID='$obj->ID ' and PASS='$obj->PASS'";
         $objc=new ConexionBD();
         $cn=$objc->getconecionBD();
         $rs=mysqli_query($cn,$sql);
    
         if ($fila =mysqli_fetch_assoc($rs)){
             $objbean=new JefeBean();
             $objbean->setCODJEFE($fila['codjefe']);
             $objbean->setNOMBJEFE($fila['nombjefe']);
             $objbean->setEMAJEFE($fila['emajefe']);
             $objbean->setTELFJEFE($fila['telfjefe']);
             $objbean->setAREAJEFE($fila['areajefe']);
             $objbean->setID($fila['id']);
             $objbean->setPASS($fila['pass']);
             
         }
         mysqli_close($cn);
       } catch (Exception $exc) {
         
       }
       return $objbean;
      }
          public function ValidarJefe(JefeBean $obj){
      $i=0;
       try {
       
         $sql="select codjefe,nombjefe,emajefe,telfjefe,areajefe,id,pass from jefe where ID='$obj->ID ' and PASS='$obj->PASS'";
         $objc=new ConexionBD();
         $cn=$objc->getconecionBD();
         $rs=mysqli_query($cn,$sql);
      $lista= array();
      while($fila= mysqli_fetch_assoc($rs)){
          $lista[]=$fila;
      }
      if(count($lista)==1){
          $i=1;
      }
         mysqli_close($cn);
       } catch (Exception $exc) {
      
       }
       return $i;
      }
      public function CargarDatosJefe(JefeBean $obj){
          $codigo=$obj->getCODJEFE();
          try{
                   $sql=  "select codjefe,nombjefe,emajefe,telfjefe,areajefe,id,pass from jefe where codjefe='$codigo'";
         $objc=new ConexionBD();
         $cn=$objc->getconecionBD();
         $rs=mysqli_query($cn,$sql);
    
         if ($fila = mysqli_fetch_assoc($rs)){
             $objbean=new JefeBean();
             $objbean->setCODJEFE($fila['codjefe']);
             $objbean->setNOMBJEFE($fila['nombjefe']);
             $objbean->setEMAJEFE($fila['emajefe']);
             $objbean->setTELFJEFE($fila['telfjefe']);
             $objbean->setAREAJEFE($fila['areajefe']);
             $objbean->setID($fila['id']);
             $objbean->setPASS($fila['pass']);
             
         }
         mysqli_close($cn);
       } catch (Exception $exc) {
         
       }
       return $objbean;
      }


      
        //combobox en proyecto
   public function ListarJefedeProyecto() {
    try {
          
         $sql="select j.codjefe,j.nombjefe,j.emajefe,j.telfjefe,j.areajefe,j.id,j.pass from jefe j  left join proy pr on pr.codjefe=j.codjefe where pr.codjefe is null";
         $objc=new ConexionBD();
         $cn=$objc->getconecionBD();
         $rs=mysqli_query($cn,$sql);
         $fila=array();
         while ($fila= mysqli_fetch_assoc($rs)){
          $lista[]=$fila;
             
         }
         mysqli_close($cn);
       } catch (Exception $exc) {
         
       }
       return $lista;
        
    }

}
?>