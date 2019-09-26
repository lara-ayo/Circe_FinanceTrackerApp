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


<main>
<h1>finance tracker App</h1>
	<form method="GET" >
		
		<div>
			<h2>Item Name 1</h2>
			<input type="text" name="name" placeholder="item name 1" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
			<input type="number" name="amountA" placeholder="amount/day" required="">
			
		</div>

		<div>
			<h2>Item Name 2</h2>
			<input type="text" name="name" placeholder="item name 2" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
			<input type="number" name="amountB" placeholder="amount/day" required="">
			
		</div>

		<div>
			<h2>Item Name 3</h2>
			<input type="text" name="name" placeholder="item name 3" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
			<input type="number" name="amountC" placeholder="amount/day" required="">
			
		</div>

		<div>
			<h2>Item Name </h2>
			<input type="text" name="name" placeholder="item name 4" required="">
			<textarea type="text" placeholder="item description" required=""></textarea>
			<input type="number" name="amountD" placeholder="amount/day" required="">
			
		</div>

		<div>
			<p>click me</p>
			<button name="submit" value="submit">
				Calculate 
			</button>
		</div>

		<div>
			<p>Total Amount spent Daily in  Naira</p>
			<input type="" name="" value="<?php echo $message ?>">

			<p>Total Amount spent Weekly in  Naira</p>
			<input type="" name="" value="<?php echo $weekly ?>">

			<p>Total Amount spent Monthly in  Naira</p>
			<input type="" name="" value="<?php echo $monthly ?>">
			
		</div>



		

		
		
	</form>
</main>



</body>
</html>



