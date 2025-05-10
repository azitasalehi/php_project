<?php

require_once "Table.class.php";

class instagram extends Table
{
    protected $data=array(
        "id"=>0,
        "image"=>""
    );

    public static function getPots()
    {
        $conn=self::connect();
        $query="select * from `instagram_posts` order by id";
        $result=$conn->query($query);
        if ($result->num_rows){
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $posts=[];
            foreach ($rows as $row){
                array_push($posts,new instagram($row));
            }
            $return=$posts;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;

    }

}