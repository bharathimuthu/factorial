<?php // convert.php
require_once 'index.php';
$fact=1; $number=$n;
	if($n != '')
	{
		if($n>170)
		{
			$out= "Sorry! The number is too large.";
		}
		
		else
		{
		while($n!=0)
		{
		$fact= $fact*$n;
		$n--;
		}
		$out= "$number factorial is $fact";
		}
	}
	else
	{
		$out="Enter a number!";
	}
	
	echo <<<_END
<html>
  <head>
	<link rel="stylesheet" href="./bootstrap.css">
	<link rel="stylesheet" href="./factorial.css">

    <title>Factorial Finder</title>
  </head>
  <body>
    <div class="container">
		<p id="output"><b>$out</b></p>
	</div>
  </body>
</html>
_END;
	
?>