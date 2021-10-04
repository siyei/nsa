<?php

class MainController extends ActionController
{

    function index()
    {
        $GLOBALS['title'] = "NSA - Bienvenidos";
        $GLOBALS['menu'] = 1;

        $this->destinos = Destino::find_by_sql("SELECT * FROM destinos de INNER JOIN pais pa ON pa.idpais = de.idpais ORDER BY de.iddestino ASC LIMIT 4");
    }

    function envio_de_dinero()
    {
        $GLOBALS['title'] = "NSA - Envio de dinero";
        $GLOBALS['menu'] = 2;
    }

    function tracking()
    {
        $GLOBALS['title'] = "NSA - Tracking";
        $GLOBALS['menu'] = 3;
    }

    function destinos()
    {
        $GLOBALS['title'] = "NSA - Destinos";
        $GLOBALS['menu'] = 0;

        $this->allDestino = Destino::find_by_sql("SELECT * FROM destinos de INNER JOIN pais pa ON pa.idpais = de.idpais ORDER BY de.iddestino ASC");
    }

    function destinos_detalles()
    {
        $GLOBALS['title'] = "NSA - Destinos detalles";
        $GLOBALS['menu'] = 0;

        $iddestino = $this->params['get']['iddestino'];


        $this->data = Destino::find_by_sql("SELECT * FROM destinos de INNER JOIN pais pa ON pa.idpais = de.idpais WHERE de.iddestino = '$iddestino' ORDER BY de.iddestino ASC");
        $this->allDestino = Destino::find_by_sql("SELECT * FROM destinos de INNER JOIN pais pa ON pa.idpais = de.idpais ORDER BY de.iddestino ASC");
    }

    function encomiendas()
    {
        $GLOBALS['title'] = "NSA - Encomiendas";
        $GLOBALS['menu'] = 0;
    }

    function cargas_internacionales()
    {
        $GLOBALS['title'] = "NSA - Cargas internacionales";
        $GLOBALS['menu'] = 0;
    }

    function parque_industrial()
    {
        $GLOBALS['title'] = "NSA - Parque industrial";
        $GLOBALS['menu'] = 0;
    }

    function turismo()
    {
        $GLOBALS['title'] = "NSA - Turismo";
        $GLOBALS['menu'] = 0;

        $this->allTurismo = Turismo::find_by_sql("SELECT * FROM turismos tu INNER JOIN pais pa ON pa.idpais = tu.idpais ORDER BY tu.idturismo ASC");
    }

    function turismo_detalles()
    {
        $GLOBALS['title'] = "NSA - Turismo detalles";
        $GLOBALS['menu'] = 0;

        $idturismo = $this->params['get']['idturismo'];

        $this->data = Turismo::find_by_sql("SELECT * FROM turismos tu INNER JOIN pais pa ON pa.idpais = tu.idpais WHERE tu.idturismo = '$idturismo' ORDER BY tu.idturismo ASC");
        $this->allTurismo = Turismo::find_by_sql("SELECT * FROM turismos tu INNER JOIN pais pa ON pa.idpais = tu.idpais ORDER BY tu.idturismo ASC");
    }

    function nosotros()
    {
        $GLOBALS['title'] = "NSA - Nosotros";
        $GLOBALS['menu'] = 0;
    }

    function operador_logistico()
    {
        $GLOBALS['title'] = "NSA - Operador Logístico";
        $GLOBALS['menu'] = 0;
    }

    function contacto()
    {
        $GLOBALS['title'] = "NSA - Contacto";
        $GLOBALS['menu'] = 0;
    }
}