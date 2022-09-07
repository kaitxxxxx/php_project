<?php
require_once('BookShelf.php');

$book_shelf = new BookShelf();

$book_shelf->appendBook(new Book('Around the world in 80 days'));
$book_shelf->appendBook(new Book('bible'));
$book_shelf->appendBook(new Book('cindereralla'));
$book_shelf->appendBook(new Book('僕は明日、昨日の君とデートする'));

$iterator = $book_shelf->iterator();
var_dump(get_class($iterator));
exit;

while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getName()."<br>";
}


