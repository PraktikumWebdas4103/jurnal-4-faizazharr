<form method="POST" action=" 	">
	<H1>REGISTER</H1>
	Hobi<br>
	SEPEDA<input type="checkbox" name="hobi[]" value="sepeda"><br>
	MAKAN<input type="checkbox" name="hobi[]" value="makan"><br>
	MINUM<input type="checkbox" name="hobi[]" value="minum"><br>
	SEPAK<input type="checkbox" name="hobi[]" value="sepak"><br>
	Upload foto<input type="file" name="uploaded_file[]" placeholder="uploaded_file" ><br>
	<input type="submit" name="log" value="masukan">
	<input type="submit" name="delete" value="deletecheck">
</form>
<?php
if (isset($_POST['log'])) {
	print_r($_POST['hobi']);
}
if (isset($_POST['log'])) {
	$firstN = array();
	$file = $_POST['uploaded_file'];
	$min = 1;
	$max = 9;
	$number1 = rand($min, $max);
	for ($i = 0; $i < $number1; $i++){
	    $firstN[] = $file;
		
	}   
	for ($i=0; $i < $number1 ; $i++) { 
		echo $firstN[$i];
	}
}
if (isset($_POST['delete'])) {
	$delete= $_POST['delete'];
	unset($delete[0]);
}

?>
