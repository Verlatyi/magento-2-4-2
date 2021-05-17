<?php

namespace Training\TestOM\Model;

class Test
{
    private $arrayList;
    private $name;
    private $number;

    public function __construct(
        $name,
        int $number,
        array $arrayList
    ) {
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
    }

    public function log()
    {
        echo "<pre>";
        echo "<br>";
        print_r($this->name);
        echo "<br>";
        print_r($this->number);
        echo "<br>";
        print_r($this->arrayList);
    }
}
