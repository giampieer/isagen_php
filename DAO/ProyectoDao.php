<?php
require_once '../UTIL/ConexionBD.php';
require_once '../BEAN/ProyectoBean.php';
class ProyectoDao {
        public function ListarProyectos(){
      
       try {
          
         $sql="select p.numero,p.titulo,p.duracion,p.descripcion,p.tipo,p.fases,p.inicio,p.fin,p.gastos,j.nombjefe from proy p inner join jefe j on p.codjefe=j.codjefe";
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
      
      public function EliminarProyecto(ProyectoBean $obj){
      $i=0;
       try {
          $numero=$obj->getNumero();
         $sql="delete from proy where numero='$numero'";
         $objc=new ConexionBD();
         $cn=$objc->getconecionBD();
         $i=mysqli_query($cn,$sql);
      
         mysqli_close($cn);
       } catch (Exception $exc) {
         $i=0;
       }
       return $i;
      }
      
     public function GenerarCodigo()
    {
        $codigo = 0;
        try
        {
            $sql = "SELECT MAX(NUMERO) FROM proy;";
            $objc = new ConexionBD();
            $cn = $objc->getconecionBD();
            $rs = mysqli_query($cn, $sql);
            if($fila = mysqli_fetch_row($rs))
            {
                $codigo = $fila[0] + 1;
            }
            mysqli_close($cn);
        } catch (Exception $ex)
        {
        }
        return $codigo;
    }
    
    
    public function InsertarProy(ProyectoBean $obj){
        $i=0;
        try {
            $numero=$obj->getNumero();
            $titulo=$obj->getTitulo();
            $duracion=$obj->getDuracion();
            $descripcion=$obj->getDescripcion();
            $tipo=$obj->getTipo();
            $fases=$obj->getFases();
            $inicio=$obj->getInicio();
            $fin=$obj->getFin();
            $gastos=$obj->getGastos();
            $codjefe=$obj->getCODJEFE();
            $sql="insert into proy(NUMERO,TITULO,DURACION,DESCRIPCION,TIPO,FASES,INICIO,FIN,GASTOS,CODJEFE) values ('$numero','$titulo','$duracion','$descripcion','$tipo','$fases','$inicio','$fin','$gastos','$codjefe')";
            $objc=new ConexionBD();
            $cn=$objc->getconecionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i=0;
        }
        return$i;
        }
        
         public function CargarProyecto(ProyectoBean $obj){
      
       try {
       $numero=$obj->getNumero();
         $sql=  "select p.numero,p.titulo,p.duracion,p.descripcion,p.tipo,p.fases,p.inicio,p.fin,p.gastos,j.codjefe,j.nombjefe  from proy p inner join jefe j on p.codjefe=j.codjefe where p.numero='$numero'";
         $objc=new ConexionBD();
         $cn=$objc->getconecionBD();
         $rs=mysqli_query($cn,$sql);
    
         if ($fila =mysqli_fetch_assoc($rs)){
             $objbean=new ProyectoBean();
             $objbean->setNumero($fila['numero']);
             $objbean->setTitulo($fila['titulo']);
             $objbean->setDuracion($fila['duracion']);
             $objbean->setDescripcion($fila['descripcion']);
             $objbean->setTipo($fila['tipo']);
             $objbean->setFases($fila['fases']);
             $objbean->setInicio($fila['inicio']);
              $objbean->setFin($fila['fin']);
             $objbean->setGastos($fila['gastos']);
             $objbean->setCODJEFE($fila['codjefe']);
             $objbean->setNOMBJEFE($fila['nombjefe']);
             
         }
         mysqli_close($cn);
       } catch (Exception $exc) {
         
       }
       return $objbean;
      }
        
        
      public function ModificarProy(ProyectoBean $obj){
        $i=0;
        try {
            $numero=$obj->getNumero();
            $titulo=$obj->getTitulo();
            $duracion=$obj->getDuracion();
            $descripcion=$obj->getDescripcion();
            $tipo=$obj->getTipo();
            $fases=$obj->getFases();
            $inicio=$obj->getInicio();
            $fin=$obj->getFin();
            $gastos=$obj->getGastos();
            $codjefe=$obj->getCODJEFE();
            $sql="UPDATE proy SET TITULO='$titulo',DURACION='$duracion',DESCRIPCION='$descripcion',TIPO='$tipo',FASES='$fases',INICIO='$inicio',FIN='$fin',GASTOS='$gastos',CODJEFE='$codjefe' WHERE NUMERO='$numero'";
            $objc=new ConexionBD();
            $cn=$objc->getconecionBD();
            $i= mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i=0;
        }
        return$i;
        }
      
    
}
?>