<?php

namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    private $method;
    private $param = [];
    private $obj;

    protected function getMethod()
    {
        return $this->method;
    }

    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    protected function getParam()
    {
        return $this->param;
    }

    public function setParam(array $param)
    {
        $this->param = $param;
    }

    public function __construct()
    {
        self::addController();
    }

    private function addController()
    {
        $route_controller = $this->getRoute();
        $namespace = "App\\Controller\\$route_controller";
        $this->obj = new $namespace;

        if (isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }

    private function addMethod()
    {
        if (method_exists($this->obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->obj, $this->getMethod()], $this->getParam());
        }
    }

    private function addParam()
    {
        $countArray = count($this->parseUrl());

        if ($countArray > 2) {
            foreach ($this->parseUrl() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        }
    }
}
