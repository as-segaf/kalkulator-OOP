<?php 
	class kalkulator{
		
		public function plus($num1, $num2){
			return $num1+$num2;
		}

		public function minus($num1, $num2){
			return $num1-$num2;
		}

		public function times($num1, $num2){
			return $num1*$num2;
		}

		public function divide($num1, $num2){
			return $num1/$num2;
		}

		public function modulus($num1, $num2){
			return $num1%$num2;
		}
		
		plus(10, 17);
		minus(88, 19);
		times(99, 678);
		divide(56, 7);
		modulus(17, 9);
	}

 ?>
