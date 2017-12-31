<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JefeBean
 *
 * @author Home
 */
class JefeBean {
   public  $CODJEFE;
    public  $NOMBJEFE;
    public  $EMAJEFE;
    public  $TELFJEFE;
    public  $AREAJEFE;
    public  $ID;
    public  $PASS;
    
    function getCODJEFE() {
        return $this->CODJEFE;
    }

    function getNOMBJEFE() {
        return $this->NOMBJEFE;
    }

    function getEMAJEFE() {
        return $this->EMAJEFE;
    }

    function getTELFJEFE() {
        return $this->TELFJEFE;
    }

    function getAREAJEFE() {
        return $this->AREAJEFE;
    }

    function getID() {
        return $this->ID;
    }

    function getPASS() {
        return $this->PASS;
    }

    function setCODJEFE($CODJEFE) {
        $this->CODJEFE = $CODJEFE;
    }

    function setNOMBJEFE($NOMBJEFE) {
        $this->NOMBJEFE = $NOMBJEFE;
    }

    function setEMAJEFE($EMAJEFE) {
        $this->EMAJEFE = $EMAJEFE;
    }

    function setTELFJEFE($TELFJEFE) {
        $this->TELFJEFE = $TELFJEFE;
    }

    function setAREAJEFE($AREAJEFE) {
        $this->AREAJEFE = $AREAJEFE;
    }

    function setID($ID) {
        $this->ID = $ID;
    }

    function setPASS($PASS) {
        $this->PASS = $PASS;
    }


}

