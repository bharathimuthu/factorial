<?php
$n='';
if (isset($_POST['n'])) $n = sanitizeString($_POST['n']);
echo <<<_END
<html>
  <head>
	<link rel="stylesheet" href="./bootstrap.css">
	<link rel="stylesheet" href="./factorial.css">
    <title>Factorial Finder</title>
  </head>
  <body>
  <div class="jumbotron">
      <div class="container">
		<h1>Factorial Finder</h1>
		<br>
		<br>
		<form method="post" action="factorial.php" role="form">
		<div class="form-group">
			<input type="text" name="n" size="7" class="form-control" id="number" placeholder="Enter Number">
			<input class="btn btn-default" type="submit" value="Find">
		</div>
		</form>
	
		</div>
	</div>
  </body>
</html>
_END;

function sanitizeString($var)
  {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
  }

?>