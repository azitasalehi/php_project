<?php
require_once "Table.class.php";

class products extends Table
{
    protected $data=array(
        "id"=>0,
        "image_1"=>"",
        "image_2"=>"",
        "flag"=>"",
        "flag_mode"=>"",
        "info"=>"",
        "star_filled"=>"",
        "new_price"=>"",
        "old_price"=>"",
        "title"=>"",
        "section"=>0,
        "category"=>0,
        "count"=>0,
        "size"=>'',

    );
    public static function getAll()
    {
        $conn=self::connect();
        $query=("SELECT * FROM `products`");
        $result=$conn->query($query);
        if ($result->num_rows){
            $products=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row){
                array_push($products,new products($row));
            }
            $return=$products;
        }
        else   $return=false;
        self::disconnect($conn);
        return $return;
    }
    public static function getAllProductsBySection($section)
    {
    $conn=self::connect();
    $query="SELECT * FROM `products`where section=$section order by `id`";
    $result=$conn->query($query);
    if ($result->num_rows){
        $products=[];
        $rows=$result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row){
            array_push($products,new products($row));
        }
        $return=$products;
    }
     else   $return=false;
    self::disconnect($conn);
    return $return;

    }
    public static function getProductsById($id)
    {
        $conn=self::connect();
        $query="SELECT * FROM `products`where id=$id order by `id`";
        $result=$conn->query($query);
        if ($result->num_rows){
            $products=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row){
                array_push($products,new products($row));
            }
            $return=$products;
        }
        else   $return=false;
        self::disconnect($conn);
        return $return;

    }
    public static function getProductsByCategory_Section($category,$section)
    {
        $conn=self::connect();
        $query="SELECT * FROM `products` where section=$section AND category=$category order by `id`";
        $result=$conn->query($query);
        if ($result->num_rows){
            $products=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row){
                array_push($products,new products($row));
            }
            $return=$products;
        }
        else   $return=false;
        self::disconnect($conn);
        return $return;
    }

    public  static  function insertProduct($productArray)
    {
        $return=true;
        $conn=self::connect();
        $info=$productArray["info"];
        $title=$productArray["title"];
        $category=$productArray["category"];
        $new_price=$productArray["new_price"];
        $count=$productArray["count"];
        $flag=$productArray["flag"];
        $size=$productArray["size"];
        $image_1=$productArray["image_1"];
        $query=("INSERT INTO `products`(image_1,image_2,flag,info,new_price,old_price,title,star_filled,flag_mode,section,category,count,size)values ('$image_1','empty','$flag','$info',$new_price,'--','$title','0','new','1','$category','$count','$size')");
        if(!$conn->query($query))$return = false;
        self::disconnect($conn);
        return $return ;

    }


}