<?php

use App\Model\ClassConexao;

header("Content-Type: text/html; charset=utf-8");

require_once("../src/vendor/autoload.php");
require_once("../config/config.php");

use App\Dispatch;

$dispatch = new Dispatch();
