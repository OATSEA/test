<!DOCTYPE html>
<html>
<head>
	<title>Clone Git Repo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
</head>
<body class="main">
<p>Clone:</p>

<?php
  var $shellcmd="sudo git clone ".$gitserver;
  echo shell_exec($shellcmd,$output, $return_val );
  print_r( $output );
  echo "\n";
  echo 'Error: '. $return_val ."\n";
  echo "Is it shutting down?";
?>  

</body>
</html>
