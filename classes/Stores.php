<?php

class Stores

{
    public $name;
    public $description;
    public $img;
    public $link;

    function __construct(string $name, string $description, string $img, string $link)
    {

        $this->name = $name;

        $this->description = $description;

        $this->img = $img;

        $this->link = $link;


    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setImg(string $img)
    {
        $this->img = $img;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function setLink(string $link)
    {
        $this->link = $link;
    }

    public function getLink(): string
    {
        return $this->link;
    }


}