<!DOCTYPE html>
<html>
<head>
	<title>Shell Exec Testing</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
</head>
<body class="main">
<p>Update:</p>
<?php
  echo shell_exec('ls');
  echo shell_exec('php composer.phar update');
?>  

</body>
</html>
