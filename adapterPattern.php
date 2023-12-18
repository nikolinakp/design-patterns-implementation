<?php

    class SimpleBook{
        private $title;
        private $author;

        function __construct($title,$author){
            $this->author=$author;
            $this->title=$title;
        }

        function getTitle(){
            return $this->title;
        }

        function getAuthor(){
            return $this->author;
        }
    }

    class BookAdapter{
        private $book;

        function __construct(SimpleBook $currentBook){
            $this->book=$currentBook;
        }

        function getAuthorandTitle(){
            return $this->book->getTitle().' by '.$this->book->getAuthor();
        }
    }

    //client
    $book = new SimpleBook( "Design Patterns","Gamma, Helm, Johnson, and Vlissides");
    $bookAdapter = new BookAdapter($book);
    echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();
?>