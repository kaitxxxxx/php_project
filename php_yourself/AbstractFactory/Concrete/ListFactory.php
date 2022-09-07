<?php
// require_once 'php_yourself/AbstractFactory/Abstract/Factory.php';

namespace Concrete;

use Factory;

class ListFactory extends Factory
{
    public function createLink(string $caption, string $url)
    {
        return new ListLink($caption, $url);
    }
}