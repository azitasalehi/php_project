<?php
require_once "Table.class.php";
class products_cats extends Table
{
protected $data=array(
    "id"=>0,
    "cat_id"=>0,
    "icon_class"=>"",
    "icon_src"=>"",
    "title"=>"",
    "count"=>""
);
    public static function getAllProduct_cats()
    {
        $conn=self::connect();
        $query="SELECT * FROM `products_cats` ORDER BY `id`";
        $result=$conn->query($query);
        if ($result->num_rows) {
            $cats=[];
            $rows= $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                array_push($cats,new products_cats($row));
            }
            $return=$cats;
        }
        else{ $return=false;}

        self::disconnect($conn);
        return $return;
    }







}