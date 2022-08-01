<?php

//Arquivos diretórios raízes
$pastaInterna = "";
define('DIRINTERN', "cursos/php_mvc");
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$_SERVER['REDIRECT_URL']}{$pastaInterna}");

if (substr($_SERVER['DOCUMENT_ROOT'], -1) === '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/");
}

//diretórios específicos
define("DIRIMG", DIRPAGE . "public/img/");
define("DIRCSS", DIRPAGE . "public/css/");
define("DIRJS", DIRPAGE . "public/js/");

//acesso banco de dados
define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");
