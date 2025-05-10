<?php
require_once "Table.class.php";

class users extends Table
{
    protected $data=array(
        "id"=>0,
        "firstname"=>"",
        "lastname"=>"",
        "email"=>"",
        "mobile"=>0,
        "address"=>"",
        "city"=>"",
        "country"=>"",
        "area"=>0,
        "postalcode"=>0,
        "signup_time"=>0,
        "password"=>0,
        "user_type"=>0
    );


    public static function getUsers()
    {
        $conn=self::connect();
        $query="select `user_types` from `user_type` inner join `users` on users.user_type=user_type.id";
        $result=$conn->query($query);
        if ($result->num_rows) {
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $users=[];
            foreach ($rows as $row) {
                array_push($users,new users($row));
            }
            $return=$users;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;
    }

    public  static function insertUser($userArray){
        $return = true ;
        $conn = self::connect();
        $firstname = $userArray["firstname"];
        $lastname = $userArray["lastname"];
        $email = $userArray['email'] ;
        $mobile = $userArray['mobile'] ;
        $address = $userArray['address'] ;
        $city = $userArray["city"] ;
        $country = $userArray["country"] ;
        $area = $userArray["area"] ;
        $postalcode = $userArray['postalcode'] ;
        $signup_time = time() ;
        $password = $userArray['password'] ;
        $user_type=$userArray['role'];
 
        $query = ("INSERT INTO `users` (firstname,lastname,email,mobile,address,city,country,area,postalcode,signup_time,password,user_type) VALUES ('$firstname','$lastname' , '$email' ,$mobile , '$address' ,'$city','$country',$area,$postalcode,$signup_time,$password,$user_type)");
        if(!$conn->query($query))$return = false;
        self::disconnect($conn);
        return $return ;
    }

    public static function isUserExist($email)
    {
        $conn = self::connect();
        $query="select * from `users` WHERE email='$email'";
        $result=$conn->query($query);
        if ($result->num_rows) {
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $return=$rows;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;
    }
    public static function checkLogin($email,$password)
    {
        $conn = self::connect();
        $query="select * from `admin` WHERE email='$email' and password='$password'";
        $result=$conn->query($query);
        if ($result->num_rows) {
            $rows=$result->fetch_all(MYSQLI_ASSOC);
            $return=$rows;
        }
        else $return=false;
        self::disconnect($conn);
        return $return;

    }
}
