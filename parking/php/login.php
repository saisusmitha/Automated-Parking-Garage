<?php
session_start();
$check_once = 0;
$check_twice = 0;

 $email = $_POST["email"];
 $password = $_POST["password"];
 $check = $_POST["check"];
/*Code for serveer side validation for Security of website*/
//echo $email;
//echo $password;
//echo $check;

$file = "../data/users.txt";

if (!is_file($file) xor !is_readable($file)) {
    trigger_error("File Not readable");
    echo json_encode(array("login"=>"EDE"));
}


$data = file_get_contents($file);
$json_a = json_decode($data,true);

foreach ($json_a as $key => $value){

    if($email == $value["email"] && $value["email"] != null && $email != null){
       
               if($password == $value["password"] && $value["password"] != null && $password != null){

                                //$check_twice = 1;
                                $_SESSION["email"] = $value["email"];
                                $_SESSION["user_name"] = $value["first_name"];
                                $_SESSION["time_stamp"] = $value["time_stamp"];
                                if($check == $value["admin"] && $check != null && $value["admin"] != null){
                                  $check_twice = 1;

                                }
                                else{
                                        $check_twice = 2;

                                }
               
               }else{

                      $check_once = 1;
     
               }
    }
}

if($check_once == 1 && $check_twice == 0){
      
          //echo json_encode(array("login"=>"EPDM"));
          //echo "Email Password Does not match";?>
         <script type="text/javascript">
         alert("Email Password Does not match");
         location="../base.php";
         //header('location:../base.php');
         </script>
         <?php
         //exit;

}else if($check_once == 0 && $check_twice == 0){
       
           //echo json_encode(array("login"=>"EDE"));
           //echo "Email Does Not Exist";?>
         <script type="text/javascript">                                                                                        
         alert("Email Does Not Exist");                                                                                          
         location="../base.php";
         //header('location:../base.php');
         </script>
         
<?php
}else if($check_twice == 1 && $check_once == 0){

           //echo json_encode(array("login"=>"Success"));
        // header('location:../admin/admin.php'); ?>
        <script type="text/javascript">                                                                                       
         alert("Admin Login Success");                                                                                          
         location="../admin/admin.php";
         //header('location:../base.php');
         </script>
<?php
}else if($check_twice == 2 && $check_once == 0){

           //echo json_encode(array("login"=>"Success"));
          // header('location:../profile.php'); ?>
           <script type="text/javascript">                                                                                       
         alert("User Login Success");                                                                                          
         location="../profile.php";
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
