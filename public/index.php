<?php


if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Mi dominio"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
    exit;
} else {
	var_dump("=>",$_POST);
    echo "<p>Usuario: {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Clave {$_SERVER['PHP_AUTH_PW']}.</p>";
}


function authbasic(user,pwd){
	$usuarios = array('admin' => 'micontraseña', 'invitado' => 'invitado');


}

