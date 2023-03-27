<?php
class Tile {
    public $name;
    public $description;

    function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;

        echo 'New object '.$name.' has been created.';
    }

    // Methods
    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setDesc($desc) {
        $this->description = $desc;
    }

    function getDesc() {
        return $this->description;
    }
}