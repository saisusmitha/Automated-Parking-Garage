<?php
session_start();
$check_once = 0;
$check_twice = 0;

 $email = $_POST["email"];
 $password = $_POST["newPassword"];
 $password1 = $_POST["newPassword1"];
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
/*
foreach ($json_a as $key => $value){

    if($email == $value["email"] && $value["email"] != null && $email != null){
       
               $value['password'] = $password;
               $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);

                          if(file_put_contents($file, $jsondata)){ 
                         // echo 'Data successfully saved';
                          //header("location:../base.html");
                            $check_once == 1;
                          }
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                            $check_twice == 1;
                          }
    }
}
 */
for ($i = 0, $len = count($json_a); $i < $len;$i++) {
             
                if($email == $json_a[$i]['email'] && $json_a[$i]['email'] != null && $email != null)
                {
                           //$json_a[$i]['email'] = $email;
                           $json_a[$i]['password'] = "".$password."";
                           $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);
                           //$check_once == 1;
                          if(file_put_contents($file, $jsondata)){ 
                          //echo 'Data successfully saved';//header("location:../base.html");
                            ?>
                              <script type="text/javascript"> 
                              alert("Password Updated Successfully!!!!!!!!!!!");
                              location="../park.html";
                             </script>

                          <?php
                          
                          }
                          else {
                            //echo 'Sorry Data Not saved successfully in "data/users.txt"';
                            //$check_twice == 1;
                            ?>
                              <script type="text/javascript"> 
                             alert("Sorry,Something Went Wrong!!!!!!!!!"); 
                             location="../park.html";
                             //header('location:../base.php');
                             </script>

                            <?php
                          }                        
                }
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