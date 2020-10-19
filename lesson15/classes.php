<?php

class Book {
    public $id ; 
    public $name;
    public $author;
    public $file_path;
    public $type;
    public $sort_order;
    function __construct($raw) {
        $this->id = $raw['id'];
        $this->name = $raw['name'];
        $this->author = $raw['author'];
        $this->file_path = $raw['file_path'];
        $this->type = $raw['type'];
        $this->sort_order = $raw['sort_order'];
    }
}

class BookPdf extends Book{
    public function book_info(){
        echo '<p>';
        echo '<img src ="/lesson15/images/'.$this->type.'.png">';
        echo '<a href ="'.$this->file_path.'">'.$this->name.'</a>';
        echo '</p>';
    }
}

class BookTxt extends Book{
    public function book_info(){
        echo '<p>';
        echo '<img src ="/lesson15/images/'.$this->type.'.png">';
        echo '<a href ="'.$this->file_path.'">'.$this->name.'</a>';
        echo '</p>';
    }
}

class BookDoc extends Book{
    public function book_info(){
        echo '<p>';
        echo '<img src ="/lesson15/images/'.$this->type.'.png">';
        echo '<a href ="'.$this->file_path.'">'.$this->name.'</a>';
        echo '</p>';
    }
}