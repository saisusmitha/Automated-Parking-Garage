<?php
			/* $du=2;
			 $count = $du;
			 $count1 = $du;
			 $start_time = 9;
			 $time = $start_time; 

			$file = 'data/day_2.txt';
			if (!is_file($file) xor !is_readable($file)) {
			              trigger_error("File Not readable");
			              echo json_encode(array("login"=>"EDE"));
			}


	          $data = file_get_contents($file);
	          echo $data."bbbbbbb";
	          $data23 = json_decode($data, TRUE);
              echo $data23."aaaaaaaaa";
              */

$file = "day_2.txt";

if (!is_file($file) xor !is_readable($file)) {
    trigger_error("File Not readable");
    echo json_encode(array("login"=>"EDE"));
}


$data = file_get_contents($file);
$json_a = json_decode($data,true);

$start_time = 1;
$x=2;
$y = $start_time + 1;
$s1_time = $start_time."-".$y; 
foreach ($json_a as $key => $value){
    foreach ($value as $key => $val){
      if($key == $s1_time){
        $val = $val - 1;
        echo $val;
       // $data = array(
           //                $s1_time=> $val,
         //        );
$json_a[0][$s1_time] = "".$val."";
                    /*   //  $id++;
                          if (!is_file($file) xor !is_readable($file)) {
                            trigger_error("File Not readable");
                            echo "Unexpected error, Please Try Again";
                          }
                          $arr_data = array();  // to store all form data

                          // check if the file exists
                          if(file_exists($file)) {
                            // gets json-data from file
                            $jsondata = file_get_contents($file);
                            // converts json string into array
                            $arr_data = json_decode($jsondata);
                          }
                          // appends the array with new form data
                          $arr_data[] = $data; */
                          // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
                          $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);

                          // saves the json string in "data.txt" (in "dirdata" folder)
                          // outputs error message if data cannot be saved
                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }//
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }
      }
     // echo $key. "=>" . $val . '<br/>';
    }

}

	         // foreach ($json_a as $key => $value){
	             /* do{
	              $y = $start_time+1;
	              $s_time = $start_time."-".$y;
	              if($key == $s_time){
	            //    echo "hii11"; 
	                         if($value!=0){
	                          //$value = $value-1;
	                          //$count1++;
	                          echo $value;
	                          $count--;
	                          $start_time = $start_time+1;
	                          //echo "slot from ".$start_time." to ".$start_time+1." is free";
	                          //checkAvailability($start_time,$$count,$file)
	                         }
	                         else{
	                          echo "slot is not free from ".$start_time." to ".$start_time+1;
	                          break;
	                         }
	              }

	            }while($count!=0);*/

	          //} //1st for


         /* foreach ($json_a as $key => $value){
            if($count == 0){
            do{
              $z = $time+1;
              $s_time = $time."-".$z;
              if($key == $s_time){
            //    echo "hii11"; 
                          $value = $value-1;
                          //$count1++;
                          $count1--;
                          $time = $time+1;
                          $data = array(
                          $key=> $value,
                          );

                          //$id++;
                          if (!is_file($file) xor !is_readable($file)) {
                            trigger_error("File Not readable");
                            echo "Unexpected error, Please Try Again";
                          }
                          $arr_data = array();  // to store all form data

                          // check if the file exists
                          if(file_exists($file)) {
                            // gets json-data from file
                            $jsondata = file_get_contents($file);
                            // converts json string into array
                            $arr_data = json_decode($jsondata, true);
                          }
                          // appends the array with new form data
                          $arr_data[] = $data;
                          // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
                          $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

                          // saves the json string in "data.txt" (in "dirdata" folder)
                          // outputs error message if data cannot be saved
                          if(file_put_contents($file, $jsondata)){ echo 'Data successfully saved';//header("location:../base.html");
                          }//
                          else {
                            echo 'Sorry Data Not saved successfully in "data/users.txt"';
                          }
                          //echo "slot from ".$start_time." to ".$start_time+1." is free";
                          //checkAvailability($start_time,$$count,$file)
                  }       
              }while($count1!=0);
              // 

            }
            
          } //for
*/





















/*
$array1 = json_decode($str1);
$start_time = 1;
$x=2;
$i=0;
$y = $start_time + 1;
$s1_time = $start_time."-".$y; 
foreach ($array1 as $key => $value) {
   //echo $key."-----".$s1_time."<br/>";
   if($key == $s1_time){
   	echo $value;
   }
    //echo $[$key]."-----".$s1_time."<br/>";
}
*/
?>


