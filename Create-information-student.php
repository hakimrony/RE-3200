<?php
require 'db.php';
$message = '';
if (isset ($_POST['roll_number'])  && isset($_POST['student_name']) && isset($_POST['First_CT']) && isset($_POST['Second_CT']) && isset($_POST['Last_CT']) ) {
  $roll_number = $_POST['roll_number'];
  $student_name = $_POST['student_name'];
 $First_CT = $_POST['First_CT'];
  $Second_CT = $_POST['Second_CT'];
   $Last_CT= $_POST['Last_CT'];
  
  $sql = 'INSERT INTO tbl_sample(roll_number,student_name,First_CT,Second_CT,Last_CT) VALUES(:roll_number, :student_name, :First_CT , :Second_CT, :Last_CT)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':roll_number' => $roll_number, ':student_name' => $student_name,':First_CT' => $First_CT ,':Second_CT' => $Second_CT,':Last_CT' => $Last_CT])) {
    $message = 'data inserted successfully';
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>GIVE Necessary Information</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="roll_number">Roll Number</label>
          <input type="number" name="roll_number" id="roll_number" class="form-control">
        </div>
        <div class="form-group">
          <label for="student_name">Student Name</label>
          <input type="varchar" name="student_name" id="student_name" class="form-control">
        </div>
		
		 <div class="form-group">
          <label for="First_CT">First_CT</label>
          <input type="number" name="First_CT" id="First_CT" class="form-control">
        </div>
				
		 <div class="form-group">
          <label for="Second_CT">Second_CT</label>
          <input type="number" name="Second_CT" id="Second_CT" class="form-control">
        </div>
				
		 <div class="form-group">
          <label for="Last_CT">Last_CT</label>
          <input type="number" name="Last_CT" id="Last_CT" class="form-control">
        </div>
		
		
		
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Information</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<?php require 'footer.php'; ?>