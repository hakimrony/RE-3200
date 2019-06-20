
<?php
/* [SEARCH FOR USERS] */
if (isset($_POST['search'])) {
  require "search-result-connect.php";
}

/* [DISPLAY HTML] */ ?>
<!DOCTYPE html>



<html >
<head>

<style>

  h2{background-color:green;
  
  font-size:35px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 700px;
	margin:14px 0px;

  }
  h5{
	  background-color:green;
  }

</style>
</head>

<title></title>
	<link rel="stylesheet" type="text/css" href="Main-frontstyle.css">

<front size="+2">

	<div class="bgimage">
		<div class="menu">
			
			<div class="leftmenu">
			<h3> 
              <img src="ruet-monogram.png" alt="Monogram" width="150" height="100"></h3>
				
			</div>

			<div class="rightmenu">
				<ul>
					
					<li>  রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়</li>
                                                                                                                                                                   

					</div>

		
		
		  <!-- [SEARCH FORM] -->
    <form method="post">
      <h1>
        SEE RESULTS
      </h1>
      <input type="number" name="search" onkeyup="validate()" id="roll_number" />
      <input type="submit" value="Search" disabled  id="butt"/>
    </form>

    <!-- [SEARCH RESULTS] -->
    <?php
    if (isset($_POST['search'])) {
      if (count($results) > 0) {
        foreach ($results as $r) {
            printf("<h2><div>Roll Number: %s <br> Student Name: %s <br> First CT: %s <br> Second CT: %s <br> Last CT: %s   </div></h2>",  $r['roll_number'], $r['student_name'], $r['First_CT'] , $r['Second_CT'] , $r['Last_CT']);
        }
      } else {
        echo "No results found";
      }
    }
    ?>
  </body>
  
  <script type="text/javascript">
	
	
	function validate()
	{
		var roll = document.getElementById('roll_number').value;
		//alert(roll);
		var len = roll.length;
		if(len<7 || len>8)
		{
			document.getElementById('butt').disabled = true;
		}
		else
		{
			document.getElementById('butt').disabled = false;
		}
		//alert(len);
	}
	

</script>
  
  
		
	

	</div>

 </body>
 </html>