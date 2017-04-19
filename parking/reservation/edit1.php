<?php
        session_start();
       /// $_COOKIE['id'] = 0;

        //$auto_key=0;  
        $user_name = $_SESSION['user_name'];
function cancel($start_time,$duration,$file,$id){
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

                   $inc=0;
        

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

                                    if(file_put_contents($file, $jsondata)){ 
                                   // echo 'Data successfully saved242424242424';//header("location:../base.html");
                                    }//
                                    else {
                                      //echo 'Sorry Data Not saved successfully in "data/users.txt"';
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
                                                                         // echo 'Data successfully saved123455';//header("location:../base.html");
                                                                          }//
                                                                          else {
                                                                           // echo 'Sorry Data Not saved successfully in "data/users.txt"';
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
                                                                          //echo 'Data successfully saved23435353535';//header("location:../base.html");
                                                                          }//
                                                                          else {
                                                                            //echo 'Sorry Data Not saved successfully in "data/users.txt"';
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
                                                                          //echo 'Data successfully saved';//header("location:../base.html");
                                                                          }//
                                                                          else {
                                                                           // echo 'Sorry Data Not saved successfully in "data/users.txt"';
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

                $file1 = "../data/user_reserve.txt";
                $data1 = file_get_contents($file1);
                $json_a1 = json_decode($data1,true); 
                 for ($i = 0, $len = count($json_a1); $i < $len; ++$i) {
                          if($json_a1[$i]['id'] == $id){
                    
                           unset($json_a1[$i]);
                          }
                      
                 }
                   
                 $jsondata1 = json_encode($json_a1, JSON_PRETTY_PRINT);
                 if(file_put_contents($file1,$jsondata1))
                 { 
                    //echo 'Data successfully edited';//header("location:../base.html");
                      //  header('location:list.php');
                    ?>
            <script type="text/javascript"> 
             //location="edit_reserve.php";                                                                                     
             alert("Data successfully edited");                                                   
             //header('location:../base.php');
             </script>
             <?php 
                 }//
                 else{
                     // echo 'Sorry Data Not  edited successfully';// in "data/user_reserve.txt"';
                      ?>
            <script type="text/javascript"> 
             location="list.php";                                                                                     
             alert("Sorry Data Not edited successfully");                                                   
             //header('location:../base.php');
             </script>
             <?php 
                 }
                 

          
  } //function 

        


  if(isset($_GET['id'])){

                         $id1=$_GET['id'];
                         $id=substr($id1, 1, 13);
                        // $_SESSION['id'] = $id;
                        //$ar_date = $_POST['arrival_date'];
                        $temp_date = $_POST['arrival_date'];
                        $a = substr($temp_date, 6, 10);
                        $b = substr($temp_date, 0, 2);
                        $c = substr($temp_date, 3, 5);
                        $x_date = $a."-".$b."-".$c;
                        //echo $x_date."*************<br/>";
                        $ar_date = substr($x_date, 0, 10);

                        $start_time = $_POST['start_time'];
                        $duration = $_POST['duration'];
                        $vehicle_id = $_POST['vehicle_id'];
                        // $ar_date1 = "";
                        // $start_time1 = "";
                        // $duration1 = "";
                        // $vehicle_id1 = "";


                         //echo $id;
                         //echo "srikanth";
                         $file = "../data/user_reserve.txt";
                         $data = file_get_contents($file);
                         $json_a = json_decode($data,true);
                          //echo $data;
                         for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                          //echo $json_a[$i]['id']."--srikanth--".$id;
                          if($id == $json_a[$i]['id']){
                            //echo $json_a[$i]['id']."--srikanth--".$id;
                           $ar_date1 = $json_a[$i]['arrival_date'];
                           $start_time1 = $json_a[$i]['start_time'];
                           $duration1 = $json_a[$i]['duration'];
                           $vehicle_id1 = $json_a[$i]['vehicle_id'];
                          }
                           //echo $ar_date1."-----".$start_time1."-----".$duration1."--------".$vehicle_id1;   
                        }
                   //echo $ar_date1."-----".$start_time1."-----".$duration1."--------".$vehicle_id1;

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
                 
                  if($ar_date == $current_date){
                      //echo $current_date."----"."arrival". $ar_date1."<br/>";
                       //echo $start_time1."----"."current". $current_time."<br/>";
                      //$x = $start_time1-$current_time;
                     // echo $x."<br/>";
                  if($start_time > $current_time){
                      //echo "printing timeeee";
                     
                    //if($ar_date >= $current_date){
                                   // if($ar_date1 == $current_date){
                                       
                                                     //$file = "../data/user_reserve.txt";
                                                    $data = file_get_contents($file);
                                                    $json_a = json_decode($data,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a[$i]['current_date']){  //increse availabilty
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  cancel($start_time1,$duration1,$file,$id);
                                                    include 'edit_reserve.php';
                                                  }
                                                  }

                                                  $data1 = file_get_contents($file1);
                                                    $json_a1 = json_decode($data1,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a1[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file1,$id);
                                                   include 'edit_reserve.php';
                                                  }
                                                  }

                                                  $data2 = file_get_contents($file2);
                                                    $json_a2 = json_decode($data2,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a2[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file2,$id);
                                                   include 'edit_reserve.php';
                                                  }
                                                  } 
                                                  //echo "HIIIIIIIIIIIIIIIIIIIIIIII";
                              //header('location:edit_reserve.php');    
                          
                       // } //if($ar_date >= $current_date) (137)
                    }  // $start_time > $current_time if (252)
                    else{
                      //header('location:list.php');  //popup U have selected the wrong time
                       ?>
                  <script type="text/javascript"> 
                   location="list.php";                                                                                     
                   alert("Sorry You have selected wrong time");                                                   
                   //header('location:../base.php');
                   </script>
                   <?php
                    }
                    
                  } //$ar_date == $current_date if (247)
                  else if($ar_date == $dateplus1){
                        
                                                   $data = file_get_contents($file);
                                                    $json_a = json_decode($data,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file,$id);
                                                    include 'edit_reserve.php';
                                                  }
                                                  }

                                                  $data1 = file_get_contents($file1);
                                                    $json_a1 = json_decode($data1,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a1[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file1,$id);
                                                   include 'edit_reserve.php';
                                                   //echo "<script type='text/javascript'>window.location.href = 'edit_reserve.php';</script>";
                                                  }
                                                  }

                                                  $data2 = file_get_contents($file2);
                                                    $json_a2 = json_decode($data2,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a2[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file2,$id);
                                                   include 'edit_reserve.php';
                                                  }
                                                  }

                                                
                                                
                                          //echo "NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
                      //header('location:edit_reserve.php');
                  } //date less than  else if($current_date < $ar_date1)
                  else if($ar_date == $dateplus2){
                    if($start_time + $duration <= 24){      
                                                   $data = file_get_contents($file);
                                                    $json_a = json_decode($data,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file,$id);
                                                    include 'edit_reserve.php';
                                                  }
                                                  }

                                                  $data1 = file_get_contents($file1);
                                                    $json_a1 = json_decode($data1,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a1[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file1,$id);
                                                   include 'edit_reserve.php';
                                                   //echo "<script type='text/javascript'>window.location.href = 'edit_reserve.php';</script>";
                                                  }
                                                  }

                                                  $data2 = file_get_contents($file2);
                                                    $json_a2 = json_decode($data2,true);
                                                  //echo $data;
                                                  for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                                  //echo $json_a[$i]['id']."--srikanth--".$id;
                                                  if($ar_date1 == $json_a2[$i]['current_date']){
                                                    //echo $json_a[$i]['id']."--srikanth--".$id;
                                                   cancel($start_time1,$duration1,$file2,$id);
                                                   include 'edit_reserve.php';
                                                  }
                                                  }

                                                }
                                                else{
                                                    ?>
                                                      <script type="text/javascript"> 
                                                       location="list.php";                                                                                    
                                                       alert("You Are Selecting Invalid Time");                                                   
                                                       //header('location:../base.php');
                                                       </script>
                                                       <?php

                                                }
                                          //echo "NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
                      //header('location:edit_reserve.php');
                  }
                  else{
                   // $id1=$_GET['id'];
                     // $id=substr($id1, 1, 13);
                    ?>
                  <script type="text/javascript"> 
                   location="list.php";                                                                                    
                   alert("You Are Selecting Date Which You Can't Reserve");                                                   
                   //header('location:../base.php');
                   </script>
                   <?php
                  }
        }
        else {
         
         //header("location:list.php");
          ?>
                  <script type="text/javascript"> 
                   location="list.php";                                                                                     
                   alert("Sorry Wrong Id");                                                   
                   //header('location:../base.php');
                   </script>
                   <?php
      } 
    ?>