<?php

require_once 'data.php';

foreach ($books as $book):
    $book->book_info();
endforeach;

