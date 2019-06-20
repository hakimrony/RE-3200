<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM tbl_sample WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['roll_number'])  && isset($_POST['student_name']) && isset($_POST['First_CT']) && isset($_POST['Second_CT']) && isset($_POST['Last_CT']) ) {
  $roll_number = $_POST['roll_number'];
  $student_name = $_POST['student_name'];
$First_CT = $_POST['First_CT']; 
$Second_CT = $_POST['Second_CT']; 
$Last_CT = $_POST['Last_CT']; 

 
  $sql = 'UPDATE tbl_sample SET roll_number=:roll_number, student_name=:student_name,First_CT=:First_CT,Second_CT=:Second_CT,Last_CT=:Last_CT WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':roll_number' => $roll_number, ':student_name' => $student_name, ':First_CT' => $First_CT,':Second_CT' => $Second_CT,':Last_CT' => $Last_CT,':id' => $id])) {
    header("Location: /");
  } 
}
   ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Information</h2>
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
          <input value="<?= $person->roll_number; ?>" type="text" name="roll_number" id="roll_number" class="form-control">
        </div>
        <div class="form-group">
          <label for="student_name">Student Name</label>
          <input type="student_name" value="<?= $person->student_name; ?>" name="student_name" id="student_name" class="form-control">
        </div>
		 <div class="form-group">
          <label for="First_CT">First_CT</label>
          <input type="number" value="<?= $person->First_CT; ?>" name="First_CT" id="First_CT" class="form-control">
        </div>
		 <div class="form-group">
          <label for="Second_CT">Second_CT</label>
          <input type="number" value="<?= $person->Second_CT; ?>" name="Second_CT" id="Second_CT" class="form-control">
        </div>
		 <div class="form-group">
          <label for="Last_CT">Last_CT</label>
          <input type="number" value="<?= $person->Last_CT; ?>" name="Last_CT" id="Last_CT" class="form-control">
        </div>
		
		
		
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Information </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>