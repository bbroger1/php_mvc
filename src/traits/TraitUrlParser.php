<?php

namespace Src\Traits;

trait TraitUrlParser
{
    public function parseUrl(): array
    {
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}
