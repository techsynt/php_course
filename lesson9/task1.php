<?php



if(isset($_COOKIE['str'])):
	$welcome = $_COOKIE['str'];
else:
	$welcome = 'Добро пожаловать , новичек!';
	$str = 'Добро пожаловать , дружище!';
	setcookie('str',$str, time()+36000);
endif;



?>

<!DOCTYPE html>
<html>
<head>
<title>site with cookies</title>
</head>
<body>

<h1><?php echo $welcome; ?></h1>

</body>
</html>
