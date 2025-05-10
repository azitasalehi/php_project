<?php
require_once "Table.class.php";

class hero extends Table
{
    protected $data=array(
        "id"=>0,
        "title"=>"",
        "main_title"=>"",
        "content"=>"",
        "button"=>"",
        "hero"=>0,
        "banner_img"=>""
    );


    public static function getHeroById($id)
    {
        $conn=self::connect();
        $query="select * from `hero_slider` where `hero`=$id order by id";
        $result=$conn->query($query);
        if($result->num_rows){
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $sliders=[];
            foreach ($rows as $row){
                array_push($sliders,new hero($row));
            }
        $return=$sliders;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;


    }

}