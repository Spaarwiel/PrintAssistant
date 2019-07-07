<?php
//Require config file to connect to database
require('config/config.php');
require('config/db.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Include header file
include('include/header.php');

//Select data from database
$sql = "SELECT * FROM totalstable";

//Set free results..I think
$result = $conn->query($sql);
?>

<div class="container">
	<div class="section-main">
	<h2>Total Quantities</h2>
	<div class="card">
		<div class="card-header">Summary of Completed Work</div>
		<div class="card-body">
	
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">W/T#</th>
      <th scope="col">Size</th>
      <th scope="col">Colour</th>
      <th scope="col">Outwork</th>
      <th scope="col">Total Needed</th>
      <th scope="col">Total Completed</th>
    </tr>
  </thead>

  <tbody>

  <?php
//Loop through posts and display
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>'. '<th>' . $row["w_t"] . '<td>' . $row["size"] . '</td>' . '<td>' . $row["colour"] . '</td>' . '<td>' . $row["outwork"] . '<td>' . $row["total_needed"] . '<td>' . $row["total_completed"] . '</td>' . '<td>' . '<a class="btn btn-primary" href="#">' . 'Add' . '</a>' . '</td>' . '</th>' . '</tr>';
    }
} else {
    echo '<p>' . 'There is no jobs' . '</p>';
}
$conn->close();
?>



    <div class="text-center"><a href="addNew.php" class="btn btn-outline-primary">Add new job</a></div>
  
  </tbody>
  
</table>

</div><!-- CARD-BODY -->
</div><!-- CARD -->
</div><!-- SECTION-MAIN -->
</div><!-- END OF CONTAINER -->

<?php
//Include footer file
include('include/footer.php');
?> 

	
		
	

