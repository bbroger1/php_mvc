<?php

header("Content-Type: text/html; charset=utf-8");

require_once("../src/vendor/autoload.php");
require_once("../config/config.php");

use Src\Classes\ClassRoutes;
use App\Dispatch;

$dispatch = new Dispatch();

?>

<!--<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= DIRCSS ?>style.css">
</head>

<body>
    <div class="text-center">
        <figure class="figure image">
            <img class="figure-img img-fluid rounded" src="<?php echo DIRIMG . "deserto.jpg" ?>" alt="teste">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>-->