<?php
        session_start();
          $manager_name = $_SESSION['manager_name'];
          date_default_timezone_set("Asia/Calcutta");
          $temp_date = date("Y-m-d H");
          $current_date = date("Y-m-d");
          $dateplus2 = date('Y-m-d', strtotime('+2 days'));
          $current_time = substr($temp_date, 11, 13);

            $file = "data/day_1.txt";
             $data = file_get_contents($file);
             $json_a = json_decode($data,true);

             $file1 = "data/day_2.txt";
             $data1 = file_get_contents($file1);
             $json_a1 = json_decode($data1,true);

             $file2 = "data/day_3.txt";
             $data2 = file_get_contents($file2);
             $json_a2 = json_decode($data2,true);

           //     echo $key . "       " .$val."<br>";
             if( $json_a[0]["current_date"] < $current_date || $json_a1[0]["current_date"] < $current_date || $json_a2[0]["current_date"] < $current_date ){
                if($json_a[0]["current_date"] < $current_date){
                           $json_a[0]["current_date"] = "".$dateplus2."";
                           $json_a[0]["0-1"] = "50";
                           $json_a[0]["1-2"] = "50";
                           $json_a[0]["2-3"] = "50";
                           $json_a[0]["3-4"] = "50";
                           $json_a[0]["4-5"] = "50";
                           $json_a[0]["5-6"] = "50";
                           $json_a[0]["6-7"] = "50";
                           $json_a[0]["7-8"] = "50";
                           $json_a[0]["8-9"] = "50";
                           $json_a[0]["9-10"] = "50";
                           $json_a[0]["10-11"] = "50";
                           $json_a[0]["11-12"] = "50";
                           $json_a[0]["12-13"] = "50";
                           $json_a[0]["13-14"] = "50";
                           $json_a[0]["14-15"] = "50";
                           $json_a[0]["15-16"] = "50";
                           $json_a[0]["16-17"] = "50";
                           $json_a[0]["17-18"] = "50";
                           $json_a[0]["18-19"] = "50";
                           $json_a[0]["19-20"] = "50";
                           $json_a[0]["20-21"] = "50";
                           $json_a[0]["21-22"] = "50";
                           $json_a[0]["22-23"] = "50";
                           $json_a[0]["23-24"] = "50";
                           $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);

                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }
                }else if($json_a1[0]["current_date"] < $current_date){
                           $json_a1[0]["current_date"] = "".$dateplus2."";
                           $json_a[0]["0-1"] = "50";
                           $json_a1[0]["1-2"] = "50";
                           $json_a1[0]["2-3"] = "50";
                           $json_a1[0]["3-4"] = "50";
                           $json_a1[0]["4-5"] = "50";
                           $json_a1[0]["5-6"] = "50";
                           $json_a1[0]["6-7"] = "50";
                           $json_a1[0]["7-8"] = "50";
                           $json_a1[0]["8-9"] = "50";
                           $json_a1[0]["9-10"] = "50";
                           $json_a1[0]["10-11"] = "50";
                           $json_a1[0]["11-12"] = "50";
                           $json_a1[0]["12-13"] = "50";
                           $json_a1[0]["13-14"] = "50";
                           $json_a1[0]["14-15"] = "50";
                           $json_a1[0]["15-16"] = "50";
                           $json_a1[0]["16-17"] = "50";
                           $json_a1[0]["17-18"] = "50";
                           $json_a1[0]["18-19"] = "50";
                           $json_a1[0]["19-20"] = "50";
                           $json_a1[0]["20-21"] = "50";
                           $json_a1[0]["21-22"] = "50";
                           $json_a1[0]["22-23"] = "50";
                           $json_a1[0]["23-24"] = "50";
                           $jsondata = json_encode($json_a1, JSON_PRETTY_PRINT);

                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }
                }else{
                           $json_a2[0]["current_date"] = "".$dateplus2."";
                           $json_a2[0]["0-1"] = "50";
                           $json_a2[0]["1-2"] = "50";
                           $json_a2[0]["2-3"] = "50";
                           $json_a2[0]["3-4"] = "50";
                           $json_a2[0]["4-5"] = "50";
                           $json_a2[0]["5-6"] = "50";
                           $json_a2[0]["6-7"] = "50";
                           $json_a2[0]["7-8"] = "50";
                           $json_a2[0]["8-9"] = "50";
                           $json_a2[0]["9-10"] = "50";
                           $json_a2[0]["10-11"] = "50";
                           $json_a2[0]["11-12"] = "50";
                           $json_a2[0]["12-13"] = "50";
                           $json_a2[0]["13-14"] = "50";
                           $json_a2[0]["14-15"] = "50";
                           $json_a2[0]["15-16"] = "50";
                           $json_a2[0]["16-17"] = "50";
                           $json_a2[0]["17-18"] = "50";
                           $json_a2[0]["18-19"] = "50";
                           $json_a2[0]["19-20"] = "50";
                           $json_a2[0]["20-21"] = "50";
                           $json_a2[0]["21-22"] = "50";
                           $json_a2[0]["22-23"] = "50";
                           $json_a2[0]["23-24"] = "50";
                           $jsondata = json_encode($json_a2, JSON_PRETTY_PRINT);

                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }

                }
              }



        function checkAvailability($start_time,$duration,$file){
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

          foreach ($json_a as $key => $value){
              foreach ($value as $key => $val){
                $z = $start_time+1;
                $s1_time = $start_time."-".$z;
               // $mark=1;
                if($key == $s1_time && $val >= 1 && $count > 0)
                {
                  $start_time = $start_time +1;
                  $count--;
                }  

          } //nested for
          } //1st for
          //$auto_key=$count;

         // echo "count: ".$count;

         //$data = file_get_contents($file);
         $json_a1 = json_decode($data,true);


         $inc=0;$mark=0;
        // $time = $start_time;  
         //echo $time ."    start " . $start_time ."<br>";
        if($count ==0 ) { 

          foreach ($json_a1 as $key => $value1){
           
            foreach ($value1 as $key => $val){
             //  echo $key . "       " .$val."<br>";
                $z = $time+1;
                $s1_time = $time."-".$z;
                $mark=1;
                if($key== $s1_time && $inc < $duration  && $val >=1)
                {
                           $val = $val -1; 
                           $json_a1[0][$s1_time] = "".$val."";
                           $jsondata = json_encode($json_a1, JSON_PRETTY_PRINT);

                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }//
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }
                          $inc= $inc+1;
                          $time = $time+1;


                          
                }

          }// nested for
           
          } //for

          
        //$_COOKIE['id']++;
        
      }
      else{
        echo "slots not available" ; 
      }
          
  } //function 




        if(isset($_POST['walkin_name']) && isset($_POST['start_time']) && isset($_POST['duration']) && isset($_POST['vehicle_id'])&& isset($_POST['mobile_no'])) {

        if(empty($_POST['walkin_name']) || empty($_POST['start_time']) || empty($_POST['duration']) || empty($_POST['vehicle_id'])|| empty($_POST['mobile_no'])) {
            //echo 'All fields are required';
            ?>
           <script type="text/javascript">                                                                                       
         alert("All fields are required");                                                           
         location="park_walkin.php";
         //header('location:../base.php');
         </script>
        <?php
        }
        else {
         // $id=0;
          $name = $_POST['walkin_name'];
          $ar_date = $current_date;
          $start_time = $_POST['start_time'];
          $duration = $_POST['duration'];
          $vehicle_id = $_POST['vehicle_id'];

          $file = "data/day_1.txt";
          $file1 = "data/day_2.txt";
          $file2 = "data/day_3.txt";



          $dateplus1 = date('Y-m-d', strtotime('+1 day'));
          $dateplus2 = date('Y-m-d', strtotime('+2 days'));
          //$dateplus2 = date('Y-m-d', strtotime('+2 days'));


          date_default_timezone_set("Asia/Calcutta");
                 // $temp_date = date("Y-m-d H");
                  //$current_date = date("Y-m-d");
          
          echo $current_time." HIIIIII ".$start_time;
          if($ar_date == $current_date){
          if($current_time < $start_time){

                                    $data = file_get_contents($file);
                                       $json_a = json_decode($data,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a[$i]['current_date']){
                                        echo "Hiii111";
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                       checkAvailability($start_time,$duration,$file);
                                       }

                                      }

                                      $data1 = file_get_contents($file1);
                                        $json_a1 = json_decode($data1,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a1); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a1[$i]['current_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        echo "Hiii111222";
                                       checkAvailability($start_time,$duration,$file1);
                                        
                                      }
                                      }

                                      $data2 = file_get_contents($file2);
                                        $json_a2 = json_decode($data2,true);
                                      //echo $data;
                                      for ($i = 0, $len = count($json_a2); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($ar_date == $json_a2[$i]['current_date']){
                                        echo "Hiii111333";
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                       checkAvailability($start_time,$duration,$file2);
                                      }
                                      }

                                      $data1 = array(
                                                'id'=> uniqid(),
                                                'user_name'=> $name,
                                                'arrival_date' => $current_date,
                                                'start_time' => $_POST['start_time'],
                                                'duration' => $_POST['duration'],
                                                'vehicle_id' => $_POST['vehicle_id'],
                                                'mobile_no' => $_POST['mobile_no'],
                                                'manager_name' => $manager_name,
                                                'time_stamp' => date("Y-m-d") 
                                       );

                                      // path and name of the file
                                     $filetxt = 'data/walkin_users.txt';
                                      if (!is_file($filetxt) xor !is_readable($filetxt)) {
                                        trigger_error("File Not readable");
                                        echo "Unexpected error, Please Try Again";
                                      }
                                      $arr_data = array();  // to store all form data

                                      // check if the file exists
                                      if(file_exists($filetxt)) {
                                        // gets json-data from file
                                        $jsondata = file_get_contents($filetxt);
                                        // converts json string into array
                                        $arr_data = json_decode($jsondata, true);
                                      }
                                      // appends the array with new form data
                                      $arr_data[] = $data1;
                                      // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
                                      $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

                                      // saves the json string in "data.txt" (in "dirdata" folder)
                                      // outputs error message if data cannot be saved
                                      if(file_put_contents($filetxt, $jsondata)){
                                       //echo 'Data successfully saved';
                                       //popup 
                                       //header("location:park_walkin.php");
                                     // $id = $id + 1;
                                       ?>
                                         <script type="text/javascript">                                                         
                                       alert("Successfully Parked!!!!!!!!!!!!"); 
                                       location="park_walkin.php";
                                       //header('location:../base.php');
                                       </script>
                                      <?php
                                       }//
                                      else {
                                        //echo 'Sorry Data Not saved successfully in "data/users.txt"';
                                        ?>
                                         <script type="text/javascript">                                                         
                                       alert("Sorry, You Have Not Parked Successfully!!!!");                     
                                       location="park_walkin.php";
                                       //header('location:../base.php');
                                       </script>
                                      <?php
                                      }
                    
          }
          else{
           // echo "hii2222222222";
            //header('location:park_walkin.php');
            ?>
           <script type="text/javascript">                                                                                       
         alert("Choose Valid Time!!!!!!!");                                                           
         location="park_walkin.php";
         //header('location:../base.php');
         </script>
        <?php
          }
    }
    else{
      //echo "hii333333";
      //header('location:park_walkin.php');
      ?>
           <script type="text/javascript">                                                                                       
         alert("InValid Date!!!!!!!");                                                           
         location="park_walkin.php";
         //header('location:../base.php');
         </script>
        <?php
    }
     // }
      } //inner else case
    } //1st if condition
    else{
         //echo 'Form fields not submited';
         ?>
           <script type="text/javascript">                                                                                       
         alert("Sorry, Form fields Are Not Submitted!!!!!!!");                                                           
         location="park_walkin.php";
         //header('location:../base.php');
         </script>
        <?php
    }
    ?>