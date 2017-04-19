<?php
session_start();
$check_once = 0;
$check_twice = 0;

 $email = $_POST["email"];
 $password = $_POST["password"];
// $check = $_POST["check"];
/*Code for serveer side validation for Security of website*/
//echo $email;
//echo $password;
//echo $check;

$file = "../data/manager.txt";

if (!is_file($file) xor !is_readable($file)) {
    trigger_error("File Not readable");
    echo json_encode(array("login"=>"EDE"));
}


$data = file_get_contents($file);
$json_a = json_decode($data,true);

foreach ($json_a as $key => $value){

    if($email == $value["email"] && $value["email"] != null && $email != null){
       
               if($password == $value["password"] && $value["password"] != null && $password != null){

                                $check_twice = 1;
                                $_SESSION["email"] = $value["email"];
                                $_SESSION["manager_name"] = $value["name"];
                                //$_SESSION["manager_name"] = $value["manager_name"];
                                $_SESSION["time_stamp"] = $value["time_stamp"];
                                
               }else{

                      $check_once = 1;
     
               }
    }
}

if($check_once == 1 && $check_twice == 0){
      
          //echo json_encode(array("login"=>"EPDM"));
          //echo "Email Password Does not match";
          //header('location:../park.html'); ?>
          <script type="text/javascript">                                                                                        
          alert("Email Password Does not match");
          location="../park.html";
         </script>

<?php
}else if($check_once == 0 && $check_twice == 0){
       
           //echo json_encode(array("login"=>"EDE"));
           //echo "Email Does Not Exist";
           //header('location:../park.html');?>
           <script type="text/javascript">                                                                                        
         alert("Email Does Not Match");                                                                                          
         location="../park.html";
         //header('location:../base.php');
         </script>

<?php
}else if($check_twice == 1 && $check_once == 0){

           //echo json_encode(array("login"=>"Success"));
           //header('location:../park_walkin.php'); ?>
           <script type="text/javascript">                                                                                        
         alert("manager Login Success");                                                                                          
         location="../park_walkin.php";
         //header('location:../base.php');
         </script>
<?php
}
/*
if(isset($_SESSION['user_name'])){
    header('location:../profile.php');
}

if(!isset($_SESSION['user_name'])){
    header('location:../base.php');
}
*/
?>