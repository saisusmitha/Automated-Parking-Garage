<?php  	
   //$_SESSION['email'] = $_POST['email'];
        if(isset($_POST['member_price']) && isset($_POST['guest_price'])) {
        if(empty($_POST['member_price']) || empty($_POST['guest_price'])) {
            //echo 'All fields are required';
             ?>
           <script type="text/javascript">                                                                                       
         alert("All fields are required");                                                           
         location="../admin/price.php";
         //header('location:../base.php');
         </script>
        <?php
        }
        else {
		    $member_price = $_POST['member_price'];
	      $guest_price = $_POST['guest_price'];
		    $time_stamp = date("Y-m-d");
	   

        // path and name of the file
        $file = '../data/price_plan.txt';
        $data = file_get_contents($file);
        $json_a = json_decode($data,true);
                                      //echo $data;
                        foreach ($json_a as $key => $value){
                              foreach ($value as $key => $val){
                                  $json_a[0]['member_price'] = $member_price;
                                  $json_a[0]['guest_price'] = $guest_price;
                                  $json_a[0]['time_stamp'] = $time_stamp;
                                  
                          }
                        }
        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($json_a, JSON_PRETTY_PRINT);

        // saves the json string in "data.txt" (in "dirdata" folder)
        // outputs error message if data cannot be saved
        if(file_put_contents($file, $jsondata)){ 
        //echo 'Data successfully saved';
        //header("location:../admin/admin.php");}
        ?>
           <script type="text/javascript">                                                                                       
         alert("Price Plan Successfully Updated!!!!!!!!!!");                                                           
         location="../admin/admin.php";
         //header('location:../base.php');
         </script>
        <?php
        }else{
          //echo 'Sorry Data Not saved successfully in "../data/price_plan.txt"';
          ?>
           <script type="text/javascript">                                                                                       
         alert("Sorry, Price Plan Not Updated Successfully!!!!!!!!!!");                                                           
         location="../admin/price.php";
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
         alert("Sorry, Form fields not submited!!!!!!!!!!");                                                           
         location="../admin/price.php";
         //header('location:../base.php');
         </script>
        <?php
    }
    
    ?>
