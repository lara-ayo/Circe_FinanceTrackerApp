<!DOCTYPE html>

<?php
$message = "";
$weekly = "";
$monthly ="";
$error = "";

if(isset($_GET['submit'])){

$amountA = $_GET["amountA"];	
$amountB = $_GET["amountB"];	
$amountC = $_GET["amountC"];
$amountD = $_GET["amountD"];	


 $message = $amountA + $amountB + $amountC + $amountD;
 $monthly = $message * 31;
 $weekly = $message * 7;
}

 	
	


?>


<html>
<head>
	<title>finance tracker</title>
</head>
<body>

<center>
<main>
<h1>finance tracker sketch</h1>
	<form method="GET" >
		<section>
			<div>
			<h2>Item Name 1</h2>
			<input type="text" name="name" placeholder="item name 1" required="">
			<input type="number" name="amountA" placeholder="amount/day" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
		</div>

		<div>
			<h2>Item Name 2</h2>
			<input type="text" name="name" placeholder="item name 2" required="">
			<input type="number" name="amountB" placeholder="amount/day" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
		</div>

		<div>
			<h2>Item Name 3</h2>
			<input type="text" name="name" placeholder="item name 3" required="">
			<input type="number" name="amountC" placeholder="amount/day" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
		</div>

		<div>
			<h2>Item Name </h2>
			<input type="text" name="name" placeholder="item name 4" required="">
			<input type="number" name="amountD" placeholder="amount/day" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
		</div>

		<div>
			<p>click me</p>
			<button name="submit" value="submit">
				Calculate 
			</button>
		</div>

		<div>
			<?php
				echo "Total Amount spent Daily is ". $message . "Naira <br>"; 
 				echo "Total Amount spent Weekly is ". $weekly  . "Naira <br>";
				echo "Total Amount spent Monthly is ". $monthly  . "Naira"; 
			?>
		</div>

		

		
		</section>
	</form>
</main>
</center>


</body>
</html>



