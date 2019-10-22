<?php

require 'functions/file.php';

class FileDB {

    private $file_name;
    private $data;

    public function __construct($file_name) {
        $this->file_name = $file_name;
    }
    
    public function load() {
        $array = file_to_array($this -> file_name);
        return $array;
    }
}
