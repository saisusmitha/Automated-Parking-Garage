<?php  	
   //$_SESSION['email'] = $_POST['email'];
	$total_slots = 200;
	$available_slots = $_SESSION['available_slots'];
	$slot = $total_slots - $available_slots +1;
        if(isset($_POST['vehicle_id'])) {
        if(empty($_POST['vehicle_id'])) {
            echo 'All fields are required';
        }
        else {
        $data = array(
	      'vehicle_id'=> $_POST['vehicle_id'],
		  'slot'=> $slot,
		  'time_stamp' => date("Y-m-d h:ia")
	   );

        // path and name of the file
        $filetxt = '../data/walk_in.txt';
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
        $arr_data[] = $data;
        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        // saves the json string in "data.txt" (in "dirdata" folder)
        // outputs error message if data cannot be saved
        if(file_put_contents($filetxt, $jsondata)){ echo 'Successfully You Have been assigned Slot Numbered: $slot';//
		//echo '';
        else {echo 'Sorry Data Not saved successfully in "data/users.txt"';}
      }
    }
    else{
         echo 'Form fields not submited';
    }
    
    ?>
