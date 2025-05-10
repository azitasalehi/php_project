<?php

class Table {
    protected $data = array();
    public function __construct($data)
    {
        foreach ($data as $key => $value){
            if (array_key_exists($key, $this->data)){
                if(is_numeric($value))$this->data[$key] = intval($value);
                else $this->data[$key] = $value;
            }
        }
    }

    public function __get($property){
    if (array_key_exists($property, $this->data))return $this->data[$property];
    else die("invalid property $property");
    }

    protected static function connect ()
    {
        $conn=new mysqli(HOST_NAME,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

        $conn -> set_charset("utf8");

        return$conn;

    }

    protected static function disconnect($conn){

        unset($conn);

    }
}