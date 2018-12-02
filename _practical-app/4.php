<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">
	<aside class="col-xs-4">
		<?php Navigation();?>
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

<?php  
/*  
Step1: Define a function and make it return a calculation of 2 numbers
Step 2: Make a function that passes parameters and call it using parameter values
*/
function add_numbers() {
	return 1 + 2;
}	
echo add_numbers();
echo "<br>";
function add_numbers_params($number1, $number2) {
	return $number1 + $number2;
}
echo add_numbers_params(3, 5);
?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>