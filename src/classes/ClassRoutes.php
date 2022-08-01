<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{
    use TraitUrlParser;

    private $route;

    public function getRoute()
    {
        $url = $this->parseUrl();
        $controller = $url[0];

        $this->route = array(
            ""          => "ControllerHome",
            "home"      => "ControllerHome",
            "sitemap"   => "ControllerSitemap",
            "carros"    => "ControllerCarros"
        );

        if (array_key_exists($controller, $this->route)) {
            if (file_exists(DIRREQ . DIRINTERN . "/app/controller/{$this->route[$controller]}.php")) {
                return $this->route[$controller];
            }
        }

        return "ControllerHome";
    }
}
