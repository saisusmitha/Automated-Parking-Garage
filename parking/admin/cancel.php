<?php
        session_start();
       /// $_COOKIE['id'] = 0;

        //$auto_key=0;  
        //$user_name = $_SESSION['user_name'];

        if(isset($_GET['id'])){
                         $id=$_GET['id'];
                         //echo "Id:  ".$id;
                         $file = "../data/manager.txt";
                         $data = file_get_contents($file);
                         $json_a = json_decode($data,true);

                         for ($i = 0, $len = count($json_a); $i < $len; ++$i) {
                          if($json_a[$i]['id'] == $id){
                           unset($json_a[$i]);
                          }
                      
                       }
                      
                       $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);
                       if(file_put_contents($file,$jsondata))
                       { 
                          //echo 'Data successfully cancelled';//header("location:../base.html");
                            //  header('location:list.php');
                           ?>
                              <script type="text/javascript"> 
                               location="view.php";                                                                                     
                               alert("Data successfully deleted");                                                   
                               //header('location:../base.php');
                               </script>
                               <?php
                       }//
                       else{
                            //echo 'Sorry Data Not CANCELLED successfully in "data/user_reserve.txt"';
                             ?>
                              <script type="text/javascript"> 
                               location="view.php";                                                                                     
                               alert("Sorry Data Not deleted successfully");                                                   
                               //header('location:../base.php');
                               </script>
                               <?php

                       }

                    
        }
        else {
         
         //header("location:list.php");
         ?>
                        <script type="text/javascript"> 
                         location="view.php";                                                                                     
                         alert("Sorry Invalid Id");                                                   
                         //header('location:../base.php');
                         </script>
                         <?php
      } 
    ?>