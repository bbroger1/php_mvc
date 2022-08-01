<?php

namespace App;

use Src\Classes\ClassRoutes;
use Src\Traits\TraitUrlParser;

class teste extends ClassRoutes
{
    use TraitUrlParser;
    public function teste(): void
    {
        echo "<pre>";
        var_dump($this->getRoute());
        echo "</pre>";
    }
}
