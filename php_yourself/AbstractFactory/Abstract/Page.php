<?php
require_once 'Item.php';

abstract class Page
{
    protected string $title;
    protected string $author;
    protected array $content = [];

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function add(Item $item)
    {
        $this->content = $item;
    }

    public function output()
    {
        try {
            $filename = $this->title. ".html";
            $fopen = fopen($filename, "w");
            fwrite($fopen, $this->makeHTML());
            fclose($fopen);

            echo $filename. "を作成しました";
        } catch(Exception $e) {
            print($e-> getTraceAsString());
        }
    }

    abstract public function makeHTML();
}