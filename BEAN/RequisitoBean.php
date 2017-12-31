<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RequisitoBean
 *
 * @author Home
 */
class RequisitoBean {
    public $numero;
    public $alcance;
    public $personal;
    public $reunion;
    public $descripcion;
    public $NUMPROY;
 public $NOMBPROY;
 
 function getNumero() {
     return $this->numero;
 }

 function getAlcance() {
     return $this->alcance;
 }

 function getPersonal() {
     return $this->personal;
 }

 function getReunion() {
     return $this->reunion;
 }

 function getDescripcion() {
     return $this->descripcion;
 }

 function getNUMPROY() {
     return $this->NUMPROY;
 }

 function getNOMBPROY() {
     return $this->NOMBPROY;
 }

 function setNumero($numero) {
     $this->numero = $numero;
 }

 function setAlcance($alcance) {
     $this->alcance = $alcance;
 }

 function setPersonal($personal) {
     $this->personal = $personal;
 }

 function setReunion($reunion) {
     $this->reunion = $reunion;
 }

 function setDescripcion($descripcion) {
     $this->descripcion = $descripcion;
 }

 function setNUMPROY($NUMPROY) {
     $this->NUMPROY = $NUMPROY;
 }

 function setNOMBPROY($NOMBPROY) {
     $this->NOMBPROY = $NOMBPROY;
 }


 
}
