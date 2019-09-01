<?php
	require('config/config.php');
	require('config/db.php');
	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$totalCompleted = mysqli_real_escape_string($conn,$_POST['total_completed']);

		$query = 	"UPDATE totalstable SET
						update_id='$update_id'
					WHERE id = {$update_id}";

		if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
            header("Location: http://".$_SERVER['HTTP_HOST'].'/Printassistant/totals.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	// $id = mysqli_real_escape_string($conn, $_GET['id']);

	//Create query from database
$query = 'SELECT * FROM totalstable ORDER BY id DESC';

//Get results from database
$result = mysqli_query($conn, $query);

//Fetch data from database
$totalstable = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free results form memory(must be last before close connection)
mysqli_free_result($result);

//Close connection
mysqli_close($conn);
?>

<?php include 'include/header.php'; ?>

<div class="container">
	<div class="section-main">
	<h2>Add to Job</h2>
	<div class="card">
		<div class="card-header">Update Quantity</div>
		<div class="card-body">
        <form method="POST" action="add.php">

    <div class="input-group mb-3">
        <input type="number" class="form-control" placeholder="Add to total completed" aria-label="workticketNumber" aria-describedby="basic-addon1" name="total_completed" required>
    </div>

    <!-- Submit information -->
	<div class="text-center">
	<input type="hidden" name="update_id" value="<?php echo $totalstable ?>">
	<input class="text-center btn btn-primary" type="submit" name="submit" value="Submit">
	<a href="totals.php" type="button" class="btn btn-info">Back</a>
	</div>
	</form>

</div><!-- CARD-BODY -->
</div><!-- CARD -->
</div><!-- SECTION-MAIN -->
</div><!-- END OF CONTAINER -->

<?php include 'include/footer.php'; ?>