<?php  	
   //$_SESSION['email'] = $_POST['email'];
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
        if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password_confirm'])) {
           // echo 'All fields are required';
          ?>
           <script type="text/javascript">                                                                                       
         alert("All fields are required");                                                           
         location="../register.html";
         //header('location:../base.php');
         </script>
        <?php
        }
        else {
          $admin = null;
        $data = array(
	      'first_name'=> $_POST['first_name'],
  		  'last_name'=> $_POST['last_name'],
	      'email'=> $_POST['email'],
	      'password'=> $_POST['password'],
        'admin'=> $admin,
	   	  'time_stamp' => date("Y-m-d")
	   );

        // path and name of the file
        $filetxt = '../data/users.txt';
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
        if(file_put_contents($filetxt, $jsondata)){ 
        //echo 'Data successfully saved';
        //header("location:../base.php");
        ?>
           <script type="text/javascript">                                                                                       
         alert("You Have Successfully Registered!!!!!!");                                                                                          
         location="../base.php";
         //header('location:../base.php');
         </script>
        <?php
        }//
        else{
         // echo 'Sorry Data Not saved successfully in "data/users.txt"';
          ?>
           <script type="text/javascript">                                                                                       
         alert("Sorry You Have Not Registered Successfully, Something Went Wrong!!!!!!");                                                                                          
         location="../register.html";
         //header('location:../base.php');
         </script>
        <?php
        }
      }
    }
    else{
         //echo 'Form fields not submited';
         ?>
           <script type="text/javascript">                                                                                       
         alert("Sorry, Form fields not submited!!!!!!!!!");                                                           
         location="../register.html";
         //header('location:../base.php');
         </script>
        <?php
    }
    
    ?>
