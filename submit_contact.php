<?php 
  
  require './include/db_conn.php';

    
  // Check connection 
  if($con === false){ 
      die("ERROR: Could not connect. " 
          . mysqli_connect_error()); 
  } 
    
  // Taking all 5 values from the form data(input) 
  $name =  $_REQUEST['name'] ?? ""; 
 
  $comment = $_REQUEST['message'] ?? ""; 
  $email = $_REQUEST['email'] ?? ""; 
    
  // Performing insert query execution 
  // here our table name is college 
  $query = "INSERT INTO contact(name, email, comment)  VALUES ('$name','$email' ,  
  '$comment')"; 
    
  if(mysqli_query($con, $query)==1){ 
    echo "<head><script>alert(' submitted successfully ');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
        

    
  } else{ 
      echo "ERROR: Hush! Sorry $query. " 
          . mysqli_error($con); 
  } 
    
  // Close connection 
  mysqli_close($con); 
  ?> 