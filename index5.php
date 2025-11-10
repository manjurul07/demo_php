<?php 
	

	// OOP Class calling

	class Calculator {
			
			public $num1;
			public $num2;
			public $op;

			function sum()
			{
				return $this->num1 + $this->num2;
			}
			function sub()
			{
				return $this->num1 - $this->num2;
			}
			function mul()
			{
				return $this->num1 * $this->num2;
			}
			function div()
			{
				return $this->num1 / $this->num2;
			}
			function calc()
			{
				if ($this->op == "+") {
					$result = $this->sum();
				}
				else if ($this->op == "-") {
					$result = $this->sub();
				}
				else if ($this->op == "*") {
					$result = $this->mul();
				}
				else if ($this->op == "/") {
					$result = $this->div();
				}
				
				return $result;
				
			}
		}

		// if (isset($_POST['submit'])) {

        //     // print_r($_POST);

        //     $num01 = $_POST['num1'];
        //     $num02 = $_POST['num2'];
        //     $op = $_POST['op'];


        //     $cal = new Calculator();
        //     $cal->num1 = $num01;
        //     $cal->num2 = $num02;
        //     $cal->op = $op;

        //     $result = $cal->calc();

        //     echo $result;

        //     }

 ?>


<!--  <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Calculator</title>
 </head>
 <body>
 	<form action="" method="POST">
 		<label>Number 01</label>
 		<input type="text" name="num1" required><br><br>
 		<label>Number 02</label>
 		<input type="text" name="num2" required><br><br>
 		<label>Operator</label>
 		<select name="op">
 			<option value="+" <?php echo (isset($_POST['op']) && $_POST['op']== '+') ? 'selected="selected"': "" ; ?>>+</option>
 			<option value="-" <?php echo (isset($_POST['op']) && $_POST['op']== '-') ? 'selected="selected"': "" ; ?>>-</option>
 			<option value="*" <?php echo (isset($_POST['op']) && $_POST['op']== '*') ? 'selected="selected"': "" ; ?>>*</option>
 			<option value="/" <?php echo (isset($_POST['op']) && $_POST['op']== '/') ? 'selected="selected"': "" ; ?>>/</option>
 		</select><br><br>
 		<input type="submit" name="submit" value="calc">
 	</form>
 </body>
 </html> -->


<?php 
 	// class Car {
		
	// 	public $brand;
	// 	public $color;

	// 	function startEngine(){
	// 		echo "Engine Started!!";
	// 	}
	// }

	// $car1 = new Car();

	// $car1 ->brand = "Toyota";

	// $car1 ->color = "red";

	// echo $car1 ->brand;
	// echo "<br>";

	// $car1 ->startEngine();
	// echo "<br>";
?>