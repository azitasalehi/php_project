<?php
require_once "Table.class.php";
class Top_category extends Table {
    protected $data =array(
        "id"=>0,
        "category_name"=>"",
        "parent_id"=>0,
        "content"=>""

    );
    public static function getTopCategory()
    {
        $conn=self::connect();
        $query="SELECT * FROM `top_category` Order by id" ;
        $result=$conn->query($query);
        if ($result->num_rows){
            $Category=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row){
                array_push($Category,new Top_category($row));
            }
            $return=$Category;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;
    }


    public static function getTopCategoryByParent_Id($id)
    {
        $conn=self::connect();
        $query="SELECT * FROM `top_category`  WHERE parent_id=$id Order by id" ;
        $result=$conn->query($query);
        if ($result->num_rows){
            $Category=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row){
               array_push($Category,new Top_category($row));
            }
            $return=$Category;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;
    }

    public static function addCategory($categoryArray)
    {
        $return=true;
        $conn=self::connect();
        $category_name=$categoryArray['category_name'];
        $parent_id=$categoryArray['parent_id'];
        $content=$categoryArray['content'];
    $query="INSERT INTO `top_category` ( `category_name`, `parent_id`, `content`)values ('$category_name','$parent_id','$content')";
   if(!$conn->query($query)) $return=false;
    self::disconnect($conn);
    return $return;

    }

}
