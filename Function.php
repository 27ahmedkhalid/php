<DOCTYPE html> 
<html>
	<body>
		<style> body {background-color:gray;}</style>
		declare(strict_types=1);
		<?php 
		/*
		The real power of php comes with it's function 
		the php comes with more than 1k built-in function,and you can also create your own function
		---	PHP user define functions ---
		1) A function is a block of statment that can be used repeatedly in a program.
		2) A function will not execute automatically when a page loads.
		3) A function will be executed by a call to the function.
		*/
		function writeMsg() {
			echo "Hello world!</br>";
			}
			
			writeMsg();
		/*
		--- Function Arguments ---
		Information can be passed to functions through arguments. An argument is just like a variable.
		Arguments are specified after the function name, 
		inside the parentheses. You can add as many arguments as you want,
		just separate them with a comma.
		*/
		function myname($fname,$age)
		{
			echo $fname.' khaled ('.$age.')<br>';	// code to execute
		}
		myname("Ahmed",23); 					// call the function 
		
		myname("Mahmoud",19);					// call the function
		
		myname("Kenzy",17);					// call the function
		/*
		----Default Argument Value----
		the default parameter is the default value of the arguments when the function is 
		called without any arguments then the function takes the default value as an argument
		*/
		function setheight($min=50){
			
			echo "the height is $min </br>";
		}
		setheight();
		/*
		----Function Return Value----
		To let a function return value, use the return statment.
		*/
		function sum(int $x,int $y): float {
			$z=$x+$y;
			return $z;
		}
		echo "5.6 + 10 = ". sum(5.6,10.5)."</br>";
		echo "7 + 13 = " . sum(7, 13) . "<br>";
		echo "2 + 4 = " . sum(2, 4). "<br>";

		//----Advinced Function ex----//

		function getticket($fname,$age){
			$ticket=rand(5000,100000);
			if($age >=18 ){
				$msg= "hello ".$fname." your age is ".$age."</br>";
				$msg .="you are Qqalified to get a ticket congratz :) your ticket id is (".$ticket.")</br>";
			}else{
				$msg= "hello ".$fname." your age is ".$age."</br>";
				$msg .="you are Qqalified to get a ticket sorry :( </br>";
			}
			return $msg;
		}
		$print= getticket("Ahmed",23);
		echo $print;
		/*
		----passing ardument by referance----
		When a function argument is passed by reference, 
		changes to the argument also change the variable that was passed in.
		To turn a function argument into a reference, 
		the (&) operator is used:
		*/
		function add_five(&$value) {
			return $value += 5;
			}
			
			$num = 2;
			add_five($num);
			echo $num;
		?>
	</body>
</html>