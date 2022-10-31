<?php

class Model
{
    public $string;

    public function __construct()
    {
        $this->string = "Olá World..";
    }

    public function get_string()
    {
        return $this->string;
    }
}