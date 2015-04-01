<!DOCTYPE html>
<html>
<head>
	<title>Git Pull</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
</head>
<body class="main">
<p>Update - Git Pull:</p>
<?php
  echo shell_exec('ls');
  $output = shell_exec('git pull 2>&1');
  echo "<pre>$output</pre>";
?> 

</body>
</html>
