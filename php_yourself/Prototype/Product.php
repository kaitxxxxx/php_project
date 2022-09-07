<?php

interface Product
{
    public function use(string $S);

    public function createClone(Product $p);
}