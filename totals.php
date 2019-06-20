<?php include 'include/header.php'; ?>

<div class="container">
	<div class="section-main">
	<h2>Total Quantities</h2>
	<div class="card">
		<div class="card-header">Please enter the following information</div>
		<div class="card-body">
	<form method="post" action="caseMakingResults.php">

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Case Size</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose..</option>
            <option value="1">Slimline Size</option>
            <option value="2">A5 Size</option>
            <option value="3">A5+ Size</option>
            <option value="4">Management Size</option>
            <option value="5">A4 Size</option>
        </select>   
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Case Colour</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose..</option>
            <option value="1">Black</option>
            <option value="2">Navy</option>
            <option value="3">Burgundy</option>
            <option value="4">Red</option>
            <option value="5">Orange</option>
            <option value="6">Lime</option>
            <option value="7">Purple</option>
            <option value="8">Turquoise</option>
            <option value="9">Lilac</option>
        </select>   
    </div>

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