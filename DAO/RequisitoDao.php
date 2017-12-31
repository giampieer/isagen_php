<?php
require_once '../BEAN/RequisitoBean.php';
require_once '../UTIL/ConexionBD.php';
class RequisitoDao {
   public function ListarRequsito(){
       try {
           $sql="select r.numero,r.alcance,r.personal,r.reuniones,r.descripcion,p.titulo,r.numproy from requisito r inner join proy p on p.numero=r.numproy";
           $obj=new ConexionBD();
           $cn=$obj->getconecionBD();
           $rs= mysqli_query($cn, $sql);
           $fila=array();
           while ($fila= mysqli_fetch_assoc($rs)){
               $lista[]=$fila;
           }
       } catch (Exception $exc) {
         
       }
       return $lista;
      }
}
