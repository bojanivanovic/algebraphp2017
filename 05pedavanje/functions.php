<?php

/*
 This function is used to generate a given number of integer
 numbers using the fibonacci algorithm.
 Example: for 4 numbers it generates a sequence of "1 1 2 3"
 
 If a number lower than 1 is provided, function returns an 
 empty string as a result.
*/
function createFibonacci($numbersToGenerate) {
	if ($numbersToGenerate < 1) {
		return "";
	}
	
	$firstNumber = 1;
	$secondNumber = 1;
	$thirdNumber;
	$result = "1 1";
	
	if ($numbersToGenerate == 1) {
		return "1";
	}
	
	if ($numbersToGenerate == 2) {
		return "1 1";
	}
	
	for ($i = 0; $i < $numbersToGenerate - 2; $i++) {
		$thirdNumber = $firstNumber + $secondNumber;
		$result = $result . " " . $thirdNumber;
		
		$firstNumber = $secondNumber;
		$secondNumber = $thirdNumber;
	}
	return $result;
}

/*
// Primjer kako radi gornja petlja
3b = 1+1 = 2
r = 1 1 2
1b = 1 \ 2b = 2
-------------------
3b = 1 + 2 = 3
r = 1 1 2 3
1b = 2 \ 2b = 3
--------------------
3b = 2 + 3 = 5
r 1 1 2 3 5
1b = 3 \ 2b = 5
------------------
3b = 3 + 5 = 8
r 1 1 2 3 5 8
1b = 5 \ 2b = 8
*/

/*
Function sets the provided variable (passed by reference) to null
*/
function setVariableValueToNull(&$input) {
	$input = null;
}
/*
Function is used to set the $input parameter tu null and to
showcase using functions while passing parameters by value.
/*/
function changeVariableByValue($input) {
	$input = null;
}

// Function is created to demonstrate the ability to access the variable globVar which is created outside this function, and
// normaly we wouldn't be able to access this variable but thanks to the keyword global we can access it.
function globalScopeTest2() {
	global $globVar;
	echo "<br> globvar value inside globalScopeTest2(): " . $globVar . "<br>"; 
}
