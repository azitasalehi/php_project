<?php
require_once "Table.class.php";

class titleBox extends Table
{
    protected $data=array(
        "id"=>0,
        "sub_title"=>"",
        "items"=>"",
        "title"=>"",
        "links"=>"",
        "logo"=>"",
        "footer"=>0
    );

    public static  function getBoxBySection($section,$id)
    {
        $conn=self::connect();
        $query="select * from `title_box` where footer=$section and id=$id  order by id limit 1";
        $result=$conn->query($query);
        if ($result->num_rows){
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $items=[];
            foreach ($rows as $row){
                array_push($items,new titleBox($row));
            }
            $return=$items;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;
    }




}