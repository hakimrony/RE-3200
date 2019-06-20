<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color:blue;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: black;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Srudent Name</th> 
  <th>Roll Number</th> 
  <th>First CT </th>
  <th>Second CT</th>
  <th>Last CT</th>
  
  
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "company");
  //  connection cheaking
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT student_name, roll_number,First_CT,Second_CT,Last_CT FROM tbl_sample";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["student_name"]. "</td><td>" 
. $row["roll_number"] . "</td><td>"
.  $row["First_CT"]. "</td><td>"
.  $row["Second_CT"]. "</td><td>"
.  $row["Last_CT"]."</td><td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>