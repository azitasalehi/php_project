<?php
 require_once "Table.class.php";
class Top_header extends Table {
 protected $data=array(
     "id"=>0,
     "title"=>"",
     "pages"=>"",
     "links"=>"",
     "icon_src"=>"",
     "menu"=>0,
     "a_class"=>"",
     "link_menu"=>""
 );


 public static function getRightNav()
 {
    $conn=self::connect();
    $query="SELECT * FROM `top_header` ORDER BY `id`";
    $result=$conn->query($query);
    if ($result->num_rows) {
        $nav_items=[];
       $rows= $result->fetch_all(MYSQLI_ASSOC);
       foreach ($rows as $row) {
           array_push($nav_items,new Top_header($row));
       }
       $return=$nav_items;
    }
    else{ $return=false;}

    self::disconnect($conn);
    return $return;
 }
    public static function getRightNavById($id)
    {
        $conn=self::connect();
        $query="SELECT * FROM `top_header` where `id`=$id ORDER BY `id`";
        $result=$conn->query($query);
        if ($result->num_rows) {
            $nav_items=[];
            $rows= $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                array_push($nav_items,new Top_header($row));
            }
            $return=$nav_items;
        }
        else{ $return=false;}

        self::disconnect($conn);
        return $return;
    }
}