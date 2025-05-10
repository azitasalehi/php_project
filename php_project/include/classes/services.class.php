<?php
require_once "Table.class.php";

class services extends Table
{
        protected $data=array(
            "id"=>0,
            "service_img"=>"",
            "title"=>"",
            "content"=>""

        );


        public static function getServices()
        {
            $conn=self::connect();
            $query="SELECT * FROM `services` order by id";
            $result=$conn->query($query);
            if ($result->num_rows){
                $rows=$result->fetch_all(MYSQLI_ASSOC);
                $services=[];
                foreach ($rows as $row){
                    array_push($services,new services($row));
                }
                $return=$services;
            }
            else $return=false;
            self::disconnect($conn);
            return $return;

        }

}