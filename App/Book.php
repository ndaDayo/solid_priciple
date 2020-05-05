<?php

namespace App;

class Book
{
    /** @var string */
    public $title;

    /** @var string */
    public $author;

    /** @var int */
    public $page;

    /** @var int */
    public $current_page;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }
}