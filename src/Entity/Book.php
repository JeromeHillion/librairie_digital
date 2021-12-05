<?php

class Book
{
    protected int $id;
    protected string $cover;
    protected dateTime $publication;
    protected string $summary;
    protected int $category_id;
    protected int $author_id;

    
    /**
     * __construct
     *
     * @param  mixed $cover
     * @param  mixed $publication
     * @param  mixed $summary
     * @param  mixed $category_id
     * @param  mixed $author_id
     * @return void
     */
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

    public function getCover(): string
    {
        return $this->cover;
    }

    public function setCover($cover)
    {
        $this->nom = $cover;
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
        $this->nom = $category_id;
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
