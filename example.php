<?php

function arrlen($array) //foreach
	{
	if (!is_array($array))
		{
		die('The argument you provided does not really seem to be an array');
		} //check if the argument passed is an array, if yes then go on..
	  else
		{
		$count = count($array); //count the number of elements in the array
		$array1 = array(); //create an empty array
		foreach($array as $loop) //loop through every element of the array passed through the argument of the function and add it to the empty array
			{
			$array1[] = $loop; //the empty array now has the all the elements of the array
			}
		echo "Total number of elements in your array are: $count" . "\n\n"; //just an echo to see the number of elements your current array has
		$implode = implode(' ', $array1); //convert all the elements of your array to a string using implode
		echo "Total string length of $count elements are: " . trim(strlen($implode)) . "\n\n"; //find the total string length of all your elements, for more accuracy you can use trim as well so that strlen does not count in white spaces
		foreach($array1 as $loop2) //loop through each element of the array
			{
			echo "The string length of element $loop2 is: " . trim(strlen($loop2)) . "\n\n"; //output the string length of each element, remember trim(strlen($loop2)) is the one which would actually output the length of all your elements
			}
    }
	} //you can remove all those un-needed stuff, I just added it to make it look more interesting.
  
  function arrlen1($array) //for loop
	{
	if (!is_array($array))
		{
		die('The argument you provided does not really seem to be an array');
		} //check if the argument passed is an array, if yes then go on..
	  else
		{
		$count = count($array); //count the number of elements in the array
		$array1 = array(); //create an empty array
		for($i = 0, $l = count($array); $i < $l; ++$i) //loop through every element of the array passed through the argument of the function and add it to the empty array
			{
			$array1[] = $array[$i]; //the empty array now has the all the elements of the array
			}
		echo "Total number of elements in your array are: $count" . "\n\n"; //just an echo to see the number of elements your current array has
		$implode = implode(' ', $array1); //convert all the elements of your array to a string using implode
		echo "Total string length of $count elements are: " . trim(strlen($implode)) . "\n\n"; //find the total string length of all your elements, for more accuracy you can use trim as well so that strlen does not count in white spaces
		for($i = 0, $l = count($array); $i < $l; ++$i) {
    echo "The string length of element $array[$i] is: " . trim(strlen($array[$i])) . "\n\n";
    }
    }
	} //you can remove all those un-needed stuff, I just added it to make it look more interesting.
  
$simple = array("wow", "test");

echo arrlen($simple);

?>
  
  
