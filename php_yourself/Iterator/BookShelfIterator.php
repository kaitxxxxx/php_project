<?php
require_once 'BookIterator.php';

class BookShelfIterator implements BookIterator
{
    private $book_shelf;
    private $index;

    public function __construct(BookShelf $book_shelf)
    {
        $this->book_shelf = $book_shelf;
        /**
         * 現在注目している本を表す
         */
        $this->index = 0;
    }

    public function hasNext() :Bool
    {
        if ($this->index < $this->book_shelf->getLength()) {
            return true;
        }

        return false;
    }

    public function next() :Book
    {
        $book = $this->book_shelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }
}