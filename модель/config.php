<?php 
 ################### Подключение к базе ##############
$host       = "localhost";
$user       = "user_name";
$pass       = "user_pass";
$database   = "user_base";

switch(isset($_GET['apicall'])){
			
			case '1':
			    $this->db = new mysqli($host, $user, $pass, $database);
                $this->db->query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
                
            break;
            
            case '2':
			    $connect = new mysqli($host, $user, $pass, $database);

                if (!$connect)
                {
                die ("соединенися не удалось: " . mysqli_connect_error());
                
                }else{
                    
                $connect->set_charset('utf8');
                }
            break;
}
?>
