<?php

namespace App\Entity;
use DateTime;

class Book
{
    protected int $id;
    protected int $isbn;
    protected string $name;
    protected string $cover;
    protected dateTime $publication;
    protected string $summary;
    protected int $category_id;
    protected int $author_id;

    
    
    public function __construct()
    {
        
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIsbn(): int
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getName(): string
    {
       return $this->name;
    }

    public function setName($name)
    {
        $this->name =$name;
    }

    public function getCover(): string
    {
        return $this->cover;
    }

    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    public function getPublication(): DateTime 
    {
        return $this->publication;
    }

    public function setPublication($publication)
    {
        $this->publication = $publication;
    }

    public function getSummary(): string 
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }

}
