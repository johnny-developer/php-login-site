<?php
    session_start();
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
        require 'session/login.php';
    }else{
        // Comment these lines to hide errors
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        require 'includes/config.php';
        require 'includes/functions.php';
        init();
    }
