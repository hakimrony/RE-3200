    <!DOCTYPE html>
    <html>
    <head>
     <title>Table with database</title>
     <style>
      table {
       border-collapse: collapse;
       width: 100%;
	   height:500%
       color: #588c7e;
       font-family: monospace;
       font-size: 20px;
       text-align: left;
         } 
      th {
       background-color:black;
       color: white;
        }
      tr:nth-child(even) {background-color: #f2f2f2}
     </style>
    </head>
    <body>
     <table>
     <tr>
      
      <th>Date</th> 
      <th>message</th>
     </tr>
     <?php
    $conn = mysqli_connect("localhost", "root", "", "company");
      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT date, message FROM tbl_form";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" 
    . $row["message"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    </body>
    </html>