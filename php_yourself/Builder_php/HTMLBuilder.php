<?php
require_once 'Builder.php';

class HTMLBuilder extends Builder
{
    private string $filename;
    private $writer;

    public function makeTitle(string $title)
    {
        $this->filename = $title. '.html';

        try {
            $this->writer = fopen($this->filename, 'w');
        } catch (Exeption $e) {
            $e->getTrace();
        }

        $this->write("<html><head><title>" . $title . "</title></head><body>");
        $this->write("<h1>" . $title . "</h1>");
    }

    public function makeString(string $str)
    {
        $this->write("<p>" . $str . "</p>");
    }

    public function makeItems(array $lists)
    {
        $this->write("<ul>");
        foreach($lists as $i => $list){
            $this->write("<li>" . $list . "</li>");
        }
        $this->write("</ul>");
    }

    public function close()
    {
        $this->write("</body></html>");
        fclose($this->writer);
    }

    public function write(string $str)
    {
        fwrite($this->writer, $str.PHP_EOL);
    }

    public function getResult()
    {
        return $this->filename;
    }
}