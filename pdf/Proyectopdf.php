<?php
session_start();
require_once '../dompdf/autoload.inc.php';
require_once '../BEAN/ProyectoBean.php';
require_once '../DAO/ProyectoDao.php';
use Dompdf\Dompdf;

$cod=$_POST['txtproy'];

$objdao=new ProyectoDao();
$objbean=new ProyectoBean();

$objbean1=new ProyectoBean();
$objbean->setNumero($cod);
$objbean1=$objdao->CargarProyecto($objbean);

$codigo=$objbean1->getNumero();
$titulo=$objbean1->getTitulo();
$duracion=$objbean1->getDuracion();
$descripcion=$objbean1->getDescripcion();
$tipo=$objbean1->getTipo();
$cantidad=$objbean1->getFases();
$inicio=$objbean1->getInicio();
$fin=$objbean1->getFin();
$gastos=$objbean1->getGastos();
$codjefe=$objbean1->getCODJEFE();
$nombjefe=$objbean1->getNOMBJEFE();
# Contenido HTML del documento que queremos generar en PDF.
 $html='<table border="1" class="table table-hover" id="tabla"cellspacing="0" width="100%">
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
                   </tr>
    </thead>
    <tbody >
             <tr >
             <td>'.$codigo.'</td>
             <td>'.$nombjefe.'</td>
             <td>'.$titulo.'</td>
             <td>'.$duracion.'</td>
             <td>'.$descripcion.'</td>
             <td>'.$tipo.'</td>
             <td>'.$cantidad.'</td>
             <td>'.$inicio.'</td>
             <td>'.$fin.'</td>
            <td>'.$gastos.'</td>
             </tr>
    </tbody>
                </table>';
 $dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape'); // (Opcional) Configurar papel y orientación portrait=parado
$dompdf->render(); // Generar el PDF desde contenido HTML
$pdf = $dompdf->output(); // Obtener el PDF generado
$dompdf->stream('proyecto.pdf'); // Enviar el PDF generado al navegador
