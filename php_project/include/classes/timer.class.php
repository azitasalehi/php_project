<?php
require_once "Table.class.php";
class timer extends Table
{
    protected $data=array(
        "id"=>0,
        "discount"=>"",
        "title"=>"",
        "paragraph"=>"",
        "day"=>"",
        "hour"=>"",
        "minutes"=>"",
        "seconds"=>"",
        "bg_banner"=>""
    );
    public static function bannerTimer()
    {
        $conn=self::connect();
        $query="select * from `timer` order by id";
        $result=$conn->query($query);
        if ($result->num_rows){
            $banner_timer=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row){
                array_push($banner_timer,new timer($row));
            }
            $return=$banner_timer;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;

    }

}