<!-- INCLUDE HEADER -->
<?php include 'include/header.php'; ?>

<?php
// define variables and set to empty values
$book_height = $book_width  = $spine_width = $board_thickness = "";

// FUNCTION FOR CALCULATING ALL THE VALUES
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// GET ALL VALUES FROM FORM AND ENTER INTO VARIABLES
    $book_height = ($_POST["book_height"]);
    $book_width = ($_POST["book_width"]);
    $spine_width = ($_POST["spine_width"]);
    $board_thickness = ($_POST["board_thickness"]);
    $book_height_add = '6';
// BOOK HEIGHT CALC
$book_height_calc = ((int)$book_height + (int)$book_height_add);
// BOOK WIDTH CALC
if ($board_thickness <= 1000) {
    $book_width_calc = ((int)$book_width - '2');

}  elseif ($board_thickness > 1000 && $board_thickness < 3000) {
    $book_width_calc = ((int)$book_width - '3');
}  else {
        $book_width_calc = ((int)$book_width - '4');
    }
// SPINE WIDTH CALC
if ($board_thickness <= 1000) {
    $spine_width_calc = ((int)$spine_width + '0');
    
}  elseif ($board_thickness > 1000 && $board_thickness < 3000) {
    $spine_width_calc = ((int)$spine_width + '1');

}  else {
    $spine_width_calc = ((int)$spine_width + '2');
    }
// OPEN SIZE CALC
    $open_size = ((int)'15.4' + ((int)$spine_width_calc) + (((int)$board_thickness / 1000) * 2) + ((int)$book_width_calc * '2'));
// MATERIAL CALC
    $material_height_calc = ((int)$book_height_calc + '32');
    $material_width_calc = ((int)$open_size + '32');
}
?>

	<div class="container">

		<div class="section-main">
			<h2 class="text-center">Board/Caselining Dimensions:</h2>
		</div><!--section-main-->

		<div class="kaartjie">

		<div class="card1">	  
		<div class="card">  
    		<img class="card-img-top" src="images/bookcase-model-image.png" alt="Template image" style="width:100%">
    	<div class="card-body">
        <hr>

            <h4 class="card-title">Turn-in width(1)</h4>
                <?php
                    echo "16mm" . "<br>";
                ?>
                <hr>

            <h4 class="card-title">Open format(A):</h4>
                <?php
                    echo $open_size . "mm" . "<br>";
                    ?>
                <hr>

            <h4 class="card-title">Case width(B):</h4>
                <?php
                    echo $book_width_calc . "mm" . "<br>";
                ?>
                <hr>

            <h4 class="card-title">Spine width(C):</h4>
                <?php
                    echo $spine_width_calc . "mm" . "<br>";
                ?>
                <hr>

            <h4 class="card-title">Caselining width(E):</h4>
                <?php
                    echo $material_width_calc . "mm" . "<br>";
                ?>
                <hr>

            <h4 class="card-title">Case height(F):</h4>
                <?php
                    echo $book_height_calc . "mm" . "<br>";
                ?>
                <hr>

            <h4 class="card-title">Caselining height(G):</h4>
                <?php
                    echo $material_height_calc . "mm" . "<br>";
                ?>
                <hr>

      		<p class="card-text text-center">This template layout is for <strong>square/straight</strong> spine hard cover books only.</p>
		  	<div class="text-center"><a href="casemaking.php" class="btn btn-info">Back</a></div>
		</div><!--card-body-->
		</div><!--card-->
		</div><!--card1-->

		</div><!--contentCards-->
	</div><!--container-->
<?php include 'include/footer.php'; ?>