 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "company");  
 if(isset($_POST["date"]))  
 {  
      $date = mysqli_real_escape_string($connect, $_POST["date"]);  
      $message = mysqli_real_escape_string($connect, $_POST["message"]);  
      $sql = "INSERT INTO tbl_form(date, message) VALUES ('".$date."', '".$message."')";  
      if(mysqli_query($connect, $sql))  
      {  
           echo "Message Saved";  
      }  
 }  
 ?>  