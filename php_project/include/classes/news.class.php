<?php
require_once "Table.class.php";

class news extends Table
{
    protected $data=array(
        "id"=>0,
        "title"=>"",
        "sub_title"=>"",
        "image"=>"",
        "date"=>"",
        "blog_writer"=>"",
        "blog_txt"=>"",
        "blog_link"=>""
    );


    public static function getNews()
    {
        $conn=self::connect();
        $query="select * from `news` order by id";
        $result=$conn->query($query);
        if ($result->num_rows){
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $news=[];
            foreach ($rows as $row){
                array_push($news,new news($row));
            }
            $return=$news;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;


    }
    public static function getNewsById($id)
    {
        $conn=self::connect();
        $query="select * from `news` where id=$id order by id";
        $result=$conn->query($query);
        if ($result->num_rows){
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $news=[];
            foreach ($rows as $row){
                array_push($news,new news($row));
            }
            $return=$news;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;


    }

}