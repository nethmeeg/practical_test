<?php 

$type = $_GET['tp'];  
if($type=='login') login(); 
private $conn;
private $table = 'user';

/*public function __construct($db) {
    $this->conn = $db;
}*/

function login() 
{ 
    require '../../config/Database.php';
  
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();
  
    // Get raw posted data
    $json = json_decode(file_get_contents('php://input'), true); 
    $username = $json['username']; $password = $json['password']; 
    $userData =''; $query = "SELECT * FROM '$table' WHERE username = '$username'  AND password= '$password'"; 
    $result= $db->query($query);
    $rowCount=$result->num_rows;
             
    if($rowCount>0)
    {
        $userData = $result->fetch_object();
        $user_id=$userData->user_id;
        $userData = json_encode($userData);
        echo '{"userData":'.$userData.'}';
    }
    else 
    {
        echo '{"error":"Wrong username and password"}';
    }

    
}