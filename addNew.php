<?php
	require('config/config.php');
	require('config/db.php');
	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$wt = mysqli_real_escape_string($conn, $_POST['w_t']);
		$size = mysqli_real_escape_string($conn, $_POST['size']);
		$colour = mysqli_real_escape_string($conn,$_POST['colour']);
		$outwork = mysqli_real_escape_string($conn,$_POST['outwork']);
		$totalNeeded = mysqli_real_escape_string($conn,$_POST['total_needed']);
		$totalCompleted = mysqli_real_escape_string($conn,$_POST['total_completed']);
		$query = "INSERT INTO totalstable(w_t, size, colour, outwork, total_needed, total_completed) VALUES('$wt', '$size', '$colour', '$outwork', '$totalNeeded', '$totalCompleted')";
		if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
            header("Location: http://".$_SERVER['HTTP_HOST'].'/Printassistant/totals.php');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>

<?php include 'include/header.php'; ?>

<div class="container">
	<div class="section-main">
	<h2>Add new job</h2>
	<div class="card">
		<div class="card-header">Please enter the following information</div>
		<div class="card-body">
        <form method="POST" action="addNew.php">

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="workticketnumber">W/T Number</span>
        </div>
        <input type="number" class="form-control" placeholder="Workticket Number" aria-label="workticketNumber" aria-describedby="basic-addon1" name="w_t" required>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="caseSize">Case Size</label>
        </div>
        <select class="custom-select" id="caseSize" name="size" required>
            <option selected value="">Choose..</option>
            <option value="Slimline Size">Slimline Size</option>
            <option value="A5 Size">A5 Size</option>
            <option value="A5+ Size">A5+ Size</option>
            <option value="Management Size">Management Size</option>
            <option value="A4 Size">A4 Size</option>
            <option value="Other Size">Other Size</option>
        </select>   
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="caseColour">Case Colour</label>
        </div>
        <select class="custom-select" id="caseColour" name="colour" required>
            <option selected value="">Choose..</option>
            <option value="Black">Black</option>
            <option value="Navy">Navy</option>
            <option value="Burgundy">Burgundy</option>
            <option value="Red">Red</option>
            <option value="Orange">Orange</option>
            <option value="Lime">Lime</option>
            <option value="Purple">Purple</option>
            <option value="Turquoise">Turquoise</option>
            <option value="Lilac">Lilac</option>
            <option value="Printed Caseling">Printed Caseling</option>
        </select>   
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="outwork">Outwork</label>
        </div>
        <select class="custom-select" id="outwork" name="outwork" required>
            <option selected value="">Choose..</option>
            <option value="Perimter Stitch">Perimeter Stitch</option>
            <option value="No Perimeter Stitch">No Perimeter Stitch</option>
            <option value="Debossing/Blind Impression">Debossing/Blind Impression</option>
        </select>   
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="totalQuantity">Total</span>
        </div>
    <input type="number" class="form-control" placeholder="Total Quantity" aria-label="Total Quantity" aria-describedby="basic-addon1" name="total_needed" required>
    </div>
    <!-- Submit information -->
	<div class="text-center">
	<input class="text-center btn btn-primary" type="submit" name="submit" value="Submit">

	<a href="totals.php" type="button" class="btn btn-info">Back</a>
	</div>
	</form>

</div><!-- CARD-BODY -->
</div><!-- CARD -->
</div><!-- SECTION-MAIN -->
</div><!-- END OF CONTAINER -->

<?php include 'include/footer.php'; ?>