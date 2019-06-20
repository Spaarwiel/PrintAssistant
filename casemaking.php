<?php include 'include/header.php'; ?>

<div class="container">
	<div class="section-main">
	<h2>Start a new job</h2>
	<div class="card">
		<div class="card-header">Please enter the following information</div>
		<div class="card-body">
	<form method="post" action="caseMakingResults.php">
	<div class="form-group">
	<label for="">Book Height:</label>
	<input type="number" class="form-control" name="book_height" placeholder="mm" required>
	</div>
	<div class="form-group">
	<label for="">Book width:</label>
	<input type="number" class="form-control" name="book_width" placeholder="mm" required>
	</div>
	<div class="form-group">
	<label for="">Spine Width:</label>
	<input type="number" class="form-control" name="spine_width" placeholder="mm" required>
	</div>
	<div class="form-group">
	<label for="">Board Thickness:</label>
	<input type="number" class="form-control" name="board_thickness" placeholder="micron" required>
	</div>
	<div class="text-center">
	<input class="text-center btn btn-primary" type="submit" name="submit" value="Submit">
	<a href="index.php"><button type="button" class="btn btn-info">Back</button></a>
	</div>
	</form>

</div><!-- CARD-BODY -->
</div><!-- CARD -->
</div><!-- SECTION-MAIN -->
</div><!-- END OF CONTAINER -->

<?php include 'include/footer.php'; ?>








