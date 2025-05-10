<?php
require_once "Table.class.php";
class Top_menu extends Table{
    protected $data=array(
        "id"=>0,
        "title"=>"",
        "content"=>"",
        "submenu"=>"",
        "link"=>""
    );
    public static function getMenu()
    {
        $conn=self::connect();
        $query="SELECT * FROM `top_menu` ORDER BY `id`";
        $result=$conn->query($query);
        if($result->num_rows) {
            $menu_items=[];
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            foreach($rows as $row) {
                array_push($menu_items,new Top_menu($row));
            }
            $return=$menu_items;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;
    }
}