<?php
require 'db.php';
$sql = 'SELECT * FROM tbl_sample';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
        

          <th>Student Roll</th>
          <th>Student Name</th>
		  <th>First_CT</th>
		   <th>Second_CT</th>
		    <th>Last_CT</th>
		 
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            
            <td><?= $person->roll_number; ?></td>
            <td><?= $person->student_name; ?></td>
			<td><?= $person->First_CT; ?></td>
			<td><?= $person->Second_CT; ?></td>
			<td><?= $person->Last_CT; ?></td>
			
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
</div>
<?php require 'Application-teacher-corner.php'; ?>
 