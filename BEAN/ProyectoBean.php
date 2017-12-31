<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProyectoBean
 *
 * @author Home
 */
class ProyectoBean {
    public $numero;
    public $titulo;
    public $duracion;
    public $descripcion;
    public $tipo;
    public $fases;
    public $inicio;
    public $fin;
    public $gastos;
    public $CODJEFE;
    public $NOMBJEFE;
    
    function getNumero() {
        return $this->numero;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDuracion() {
        return $this->duracion;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getFases() {
        return $this->fases;
    }

    function getInicio() {
        return $this->inicio;
    }

    function getFin() {
        return $this->fin;
    }

    function getGastos() {
        return $this->gastos;
    }

    function getCODJEFE() {
        return $this->CODJEFE;
    }

    function getNOMBJEFE() {
        return $this->NOMBJEFE;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setFases($fases) {
        $this->fases = $fases;
    }

    function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    function setFin($fin) {
        $this->fin = $fin;
    }

    function setGastos($gastos) {
        $this->gastos = $gastos;
    }

    function setCODJEFE($CODJEFE) {
        $this->CODJEFE = $CODJEFE;
    }

    function setNOMBJEFE($NOMBJEFE) {
        $this->NOMBJEFE = $NOMBJEFE;
    }


}
?>