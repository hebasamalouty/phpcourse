?php

function getCharacter(){	
$input = 'z';
$output = ++$input; 

if (strlen($output) > 1) 
{
 $output = $output[0];
 }
echo $output."<br>";
	}

	getCharacter();

?>