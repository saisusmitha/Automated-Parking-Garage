<?php
        session_start();
       /// $_COOKIE['id'] = 0;

        //$auto_key=0;  
        //$user_name = $_SESSION['user_name'];

        function cancel($start_time,$duration,$file,$id){
          //echo "Id22:  ".$id;
          $count = $duration;
         // $count1 = $x;
          $time = $start_time;          
          if (!is_file($file) xor !is_readable($file)) {
              trigger_error("File Not readable");
              echo json_encode(array("login"=>"EDE"));
          }


          $data = file_get_contents($file);
          //echo $data;
          $json_a = json_decode($data,true);

         $inc=0;$mark=0;
        // $time = $start_time;  
         //echo $time ."    start " . $start_time ."<br>";

          foreach ($json_a as $key => $value1){
           
            foreach ($value1 as $key => $val){
             //  echo $key . "       " .$val."<br>";
                $z = $time+1;
                $s1_time = $time."-".$z;
                //$mark=1;
                if($key== $s1_time && $inc < $duration  && $val >=1)
                {
                           $val = $val + 1; 
                           $json_a[0][$s1_time] = "".$val."";
                           $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);

                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }//
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }
                          $inc= $inc+1;
                          $time = $time+1;


                          
                }
                if($time == 24){
                  $time = 0;
                  date_default_timezone_set("Asia/Calcutta");
                  $dateplus1 = date('Y-m-d', strtotime('+1 day'));
                  $ar_date = $dateplus1;          
                                                   $file3 = "../data/day_1.txt";
                                                  $data = file_get_contents($file3);
                                                  $json_a = json_decode($data,true);
                                                  //echo $data;
                                                  //for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  //if($ar_date == $json_a[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   //checkAvailability($start_time,$count,$file);
                                                    //include 'edit_reserve.php';
                                                  foreach ($json_a as $key => $value){
                                                  foreach ($value as $key => $val){
                                                      if($ar_date == $json_a[0]['current_date']){
                                                      $z = $time+1;
                                                      $s1_time = $time."-".$z;
                                                      $mark=1;
                                                      if($key== $s1_time && $inc < $duration  && $val >=1)
                                                      {
                                                                 $val = $val +1; 
                                                                 $json_a1[0][$s1_time] = "".$val."";
                                                                 $jsondata = json_encode($json_a1, JSON_PRETTY_PRINT);

                                                                if(file_put_contents($file, $jsondata)){ 
                                                                echo 'Data successfully saved';//header("location:../base.html");
                                                                }//
                                                                else {
                                                                  echo 'Sorry Data Not saved successfully in "data/users.txt"';
                                                                }
                                                                $inc= $inc+1;
                                                                $time = $time+1;
                                                                //$count2--;
                                                                
                                                      }
                                                    }
                                                  }
                                                  }

                                                  $file1 = "../data/day_2.txt";
                                                  $data1 = file_get_contents($file1);
                                                  $json_a1 = json_decode($data1,true);
                                                  //echo $data;
                                                  foreach ($json_a1 as $key => $value){
                                                  foreach ($value as $key => $val){
                                                      if($ar_date == $json_a1[0]['current_date']){
                                                      $z = $time+1;
                                                      $s1_time = $time."-".$z;
                                                      $mark=1;
                                                      if($key== $s1_time && $inc < $duration  && $val >=1)
                                                      {
                                                                 $val = $val +1; 
                                                                 $json_a1[0][$s1_time] = "".$val."";
                                                                 $jsondata = json_encode($json_a1, JSON_PRETTY_PRINT);

                                                                if(file_put_contents($file1, $jsondata)){ 
                                                                echo 'Data successfully saved';//header("location:../base.html");
                                                                }//
                                                                else {
                                                                  echo 'Sorry Data Not saved successfully in "data/users.txt"';
                                                                }
                                                                $inc= $inc+1;
                                                                $time = $time+1;
                                                                //$count2--;
                                                                
                                                      }
                                                    }
                                                  }
                                                  }

                                                  $file2 = "../data/day_3.txt";
                                                  $data2 = file_get_contents($file2);
                                                  $json_a2 = json_decode($data2,true);
                                                  foreach ($json_a2 as $key => $value){
                                                  foreach ($value as $key => $val){
                                                      if($ar_date == $json_a2[0]['current_date']){
                                                      $z = $time+1;
                                                      $s1_time = $time."-".$z;
                                                      $mark=1;
                                                      if($key== $s1_time && $inc < $duration  && $val >=1)
                                                      {
                                                                 $val = $val +1; 
                                                                 $json_a2[0][$s1_time] = "".$val."";
                                                                 $jsondata = json_encode($json_a2, JSON_PRETTY_PRINT);

                                                                if(file_put_contents($file2, $jsondata)){ 
                                                                echo 'Data successfully saved';//header("location:../base.html");
                                                                }//
                                                                else {
                                                                  echo 'Sorry Data Not saved successfully in "data/users.txt"';
                                                                }
                                                                $inc= $inc+1;
                                                                $time = $time+1;
                                                                //$count2--;
                                                                
                                                      }
                                                    }
                                                  }
                                                  }
                } 

          }// nested for
           
          } //for
//echo "Id444:  ".$id;
           $file1 = "../data/user_reserve.txt";
           $data1 = file_get_contents($file1);
           $json_a1 = json_decode($data1,true);
                 for ($i = 0, $len = count($json_a1); $i < $len; ++$i) {
                  //echo $json_a[$i]['id']."==".$id."<br/>";
                          if($json_a1[$i]['id'] == $id){
                          
                           unset($json_a1[$i]);
                          }
                      
                 }
                   
                 $jsondata1 = json_encode($json_a1, JSON_PRETTY_PRINT);
                 if(file_put_contents($file1,$jsondata1))
                 { 
                    //echo 'Data successfully cancelled';//header("location:../base.html");
                      //  header('location:list.php');
                     ?>
                        <script type="text/javascript"> 
                         location="list.php";                                                                                     
                         alert("Data successfully cancelled");                                                   
                         //header('location:../base.php');
                         </script>
                         <?php
                 }//
                 else{
                      //echo 'Sorry Data Not CANCELLED successfully in "data/user_reserve.txt"';
                       ?>
                        <script type="text/javascript"> 
                         location="list.php";                                                                                     
                         alert("Sorry Data Not CANCELLED successfully");                                                   
                         //header('location:../base.php');
                         </script>
                         <?php

                 }

          
  } //function 




        if(isset($_GET['id'])){
                         $id=$_GET['id'];
                         echo "Id:  ".$id;
                         $file = "../data/user_reserve.txt";
                         $data = file_get_contents($file);
                         $json_a = json_decode($data,true);

                         for ($i = 0, $len = count($json_a); $i < $len; ++$i) {
                          if($json_a[$i]['id'] == $id){
                           $ar_date = $json_a[$i]['arrival_date'];
                           $start_time = $json_a[$i]['start_time'];
                           $duration = $json_a[$i]['duration'];
                           $vehicle_id = $json_a[$i]['vehicle_id'];
                            //$json_a[$i]['time_stamp'] = date("Y-m-d");
                           //unset($json_a[$i]);
                          }
                      
                      }
                   
                  date_default_timezone_set("Asia/Calcutta");
                  $temp_date = date("Y-m-d H");
                  $current_date = date("Y-m-d");
                  $current_time = substr($temp_date, 11, 13);

                   $file = "../data/day_1.txt";
                   $file1 = "../data/day_2.txt";
                   $file2 = "../data/day_3.txt";


                  $dateplus1 = date('Y-m-d', strtotime('+1 day'));
                  $dateplus2 = date('Y-m-d', strtotime('+2 days'));
                  //$dateplus2 = date('Y-m-d', strtotime('+2 days'));
                 
                  if($current_date == $ar_date){
                    if($start_time - $current_time > 1){           //ERROR
                       //$x = $start_time-$current_time;
                       //echo $x;
                          //if($ar_date == $current_date){
                                      $data = file_get_contents($file);
                                       $json_a = json_decode($data,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333111";
                                       cancel($start_time,$duration,$file,$id);
                                       header('location:list.php');
                                       }

                                      }

                                      $data1 = file_get_contents($file1);
                                        $json_a1 = json_decode($data1,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a1[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333222";
                                       cancel($start_time,$duration,$file1,$id);
                                       header('location:list.php');
                                       //echo "Id1:  ".$id;
                                        
                                      }
                                      }

                                      $data2 = file_get_contents($file2);
                                        $json_a2 = json_decode($data2,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a2[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333333";
                                       cancel($start_time,$duration,$file2,$id);
                                       header('location:list.php');
                                      }
                                      }
                         // } //239

                        /*  else if($ar_date == $dateplus1){
                            $data = file_get_contents($file);
                                       $json_a = json_decode($data,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333111";
                                       cancel($start_time,$duration,$file,$id);
                                       header('location:list.php');
                                       }

                                      }

                                      $data1 = file_get_contents($file1);
                                        $json_a1 = json_decode($data1,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a1[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333222";
                                       cancel($start_time,$duration,$file1,$id);
                                       header('location:list.php');
                                      }
                                      }

                                      $data2 = file_get_contents($file2);
                                        $json_a2 = json_decode($data2,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a2[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333333";
                                       cancel($start_time,$duration,$file2,$id);
                                       header('location:list.php');
                                      }
                                      }
                            
                          } //281

                          else if($ar_date == $dateplus2){
                             $data = file_get_contents($file);
                                       $json_a = json_decode($data,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333111";
                                       cancel($start_time,$duration,$file,$id);
                                       header('location:list.php');
                                       }

                                      }

                                      $data1 = file_get_contents($file1);
                                        $json_a1 = json_decode($data1,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a1[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333222";
                                       cancel($start_time,$duration,$file1,$id);
                                       header('location:list.php');
                                        
                                      }
                                      }

                                      $data2 = file_get_contents($file2);
                                        $json_a2 = json_decode($data2,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a2[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333333";
                                       cancel($start_time,$duration,$file2,$id);
                                       header('location:list.php');
                                      }
                                      }
                            
                          }  */
                        }
                          else{
                           // header('location:list.php');  //popup
                            ?>
                        <script type="text/javascript"> 
                         location="list.php";                                                                                     
                         alert("Sorry ,You Can't Cancel The Reservation,You Time Has Been Exceeded ");                                                   
                         //header('location:../base.php');
                         </script>
                         <?php

                          }
                    }//326
                    else if($ar_date == $dateplus1 || $ar_date == $dateplus2){
                                       $data = file_get_contents($file);
                                       $json_a = json_decode($data,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333111";
                                       cancel($start_time,$duration,$file,$id);
                                       header('location:list.php');
                                       }

                                      }

                                      $data1 = file_get_contents($file1);
                                        $json_a1 = json_decode($data1,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a1[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333222";
                                       cancel($start_time,$duration,$file1,$id);
                                       header('location:list.php');
                                      }
                                      }

                                      $data2 = file_get_contents($file2);
                                        $json_a2 = json_decode($data2,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a2[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333333";
                                       cancel($start_time,$duration,$file2,$id);
                                       header('location:list.php');
                                      }
                                      }
                            
                  } 
                  else
                  {
                     // echo "Sorry You Have Exceeded The Time";
                    //header('location:list.php');  //popup
                    ?>
                        <script type="text/javascript"> 
                         location="list.php";                                                                                     
                         alert("Sorry You Have Exceeded The Date");                                                   
                         //header('location:../base.php');
                         </script>
                         <?php
                  }

                  


                  //file_put_contents('data.txt', json_encode($json_data));       
        }
        else {
         
         //header("location:list.php");
         ?>
                        <script type="text/javascript"> 
                         location="list.php";                                                                                     
                         alert("Sorry Invalid Id");                                                   
                         //header('location:../base.php');
                         </script>
                         <?php
      } 
    ?>