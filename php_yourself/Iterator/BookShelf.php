<?php
require_once('Aggregate.php');
require_once('Book.php');
require_once('BookShelfIterator.php');

class BookShelf implements Aggregate
{
    private $books;
    private $last = 0;

    public function getBookAt(int $index)
    {
        return $this->books[$index];
    }

    //本を追加
    public function appendBook(Book $book) {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * 何番目かを返す
     * @return int
     */
    public function getLength()
    {
        return $this->last;
    }

    /**
     * 
     */
    public function iterator() :BookIterator
    {
        return new BookShelfIterator($this);
    }
}
