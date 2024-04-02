<?php

   $conn = mysqli_connect("localhost","root","","attendance");
   if($conn==FALSE)
   {
	   echo "Connection Failed";
   }
if(isset($_POST['submit']))
   {
   $numitems = $_POST["numitems"];
   $dates=$_POST['dates'];
   // Loop through subject data
   for ($i = 1; $i <= $numitems; $i++) {
        $items = $_POST["items" . $i];
       $product = $_POST["product" . $i];
       $byy =$_POST["subjectby" .$i];
       $item = $_POST["item" . $i];
      
       // Process or store the data as needed
       $que = "insert into mess(items,product,byy,item,dates)values('$items','$product','$byy','$item','$dates')";
	  $res = mysqli_query($conn,$que);
   }
   if($res)
	  {
		  echo '<script> alert("Products Added Successfully"); </script>';
        echo '<script> location.href="mess.php"; </script>';

	  }
}