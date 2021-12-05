<?php

namespace App\Entity;

class Author
{
    protected int $id;
    protected string $name;
    
    /**
     * __construct
     *
     
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}