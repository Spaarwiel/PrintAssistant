<?php
//Require config file to connect to database
require('config/config.php');
require('config/db.php');

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

<!-- Include header file -->
<?php include('include/header.php'); ?>

<div class="container">
	<div class="section-main">
	  <h2>Total Quantities</h2>
	<div class="card">
		<div class="card-header">Summary of Completed Work</div>
		  <div class="card-body">
	      <table class="table table-bordered">
          <thead>
            <div class="text-center">
              <a href="addNew.php" class="btn btn-outline-primary">
                Add new job
              </a>
            </div>
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
              <?php foreach($totalstable as $total) : ?>
                <tr>
                  <th>
                    <?php echo $total['w_t']; ?>
                  </th>
                  <th>
                    <?php echo $total['size']; ?>
                  </th>
                  <th>
                    <?php echo $total['colour']; ?>
                  </th>
                  <th>
                    <?php echo $total['outwork']; ?>
                  </th>
                  <th>
                    <?php echo $total['total_needed']; ?>
                  </th>
                  <th>
                    <?php echo $total['total_completed']; ?>
                  </th>
                  <th>
                    <a class="btn btn-primary" href="add.php?id=<?php echo $total['id']; ?>">
                      Add
                    </a>
                  </th>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div><!-- CARD-BODY -->
    </div><!-- CARD -->
  </div><!-- SECTION-MAIN -->
</div><!-- END OF CONTAINER -->

<!-- Include footer file -->
<?php include('include/footer.php'); ?>