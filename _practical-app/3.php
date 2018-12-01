<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">
	<aside class="col-xs-4">
	<?php Navigation();?>
	</aside><!--SIDEBAR-->
<article class="main-content col-xs-8">
<?php  
	/*  
	Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3 : Make a switch Statement that test againts one condition with 5 cases 
	*/

	$number = 4;
	if ($number < 4) {
		echo "I hate PHP";
	} else if ($number > 4) {
		echo "I still hate PHP";
	} else {
		echo "I love PHP";
	}
	
	echo "<br>";

	for ($i = 0; $i < 10; $i ++) {
		echo $i . "<br>";
	}

	$dinner = "PIZZA";
	switch($dinner) {
		case "PASTA":
			echo "We'll have pasta for dinner";
			break;
		case "MILK":
			echo "We'll have milk for dinner";
			break;
		case "COKE":
			echo "We'll have coke for dinner";
			break;
		case "BREAD":
			echo "We'll have bread for dinner";
			break;
		case "PIZZA":
			echo "We'll have pizza for dinner";
			break;
		default:
			echo "We have nothing for dinner";
			break;
	}
?>
</article><!--MAIN CONTENT-->	
<?php include "includes/footer.php"; ?>