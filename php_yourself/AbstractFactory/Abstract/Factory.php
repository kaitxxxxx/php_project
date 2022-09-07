<?php

abstract class Factory
{
    /**
     * @param string
     * @return factory|Exception
     */
    public static function getFactory(string $classname)
    {
        if (class_exists($classname)) {
            $factory = new $classname();
        }

        try{
            if ($factory instanceof Factory){
                return $factory;
            } else {
                throw new Exception(sprintf('Class %s is not a Factory.', $classname));
            }

        } catch(Exeption $e) {
            echo $e->getMessage();
        }
    }

    abstract public function createLink(string $caption, string $url);
    abstract public function createTray(string $caption);
    abstract public function createpage(string $title, string $author);
    
}