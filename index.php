<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator OOP</title>
</head>
<body>
	<div>
		<form method="post">
			<input type="number" name="num1">
			<select name="operator">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
				<option>%</option>
			</select>
			<input type="number" name="num2">
			<input type="submit" name="submit">
		</form>
	</div>
	<div>
		<?php 
			include'kalkulator.php';
			$hasil = new kalkulator();
			if (isset($_POST['submit'])) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$opr  = $_POST['operator'];

				switch ($opr) {
					case '+':
						echo "$num1 $opr $num2 = ".$hasil->plus($num1, $num2);
						break;
					case '-':
						echo "$num1 $opr $num2 = ".$hasil->minus($num1, $num2);
						break;
					case '*':
						echo "$num1 $opr $num2 = ".$hasil->times($num1, $num2);
						break;
					case '/':
						echo "$num1 $opr $num2 = ".$hasil->divide($num1, $num2);
						break;
					case '%':
						echo "$num1 $opr $num2 = ".$hasil->modulus($num1, $num2);
						break;
					default:
						# code...
						break;
				}
				
			}


		 ?>
	</div>
</body>
</html>