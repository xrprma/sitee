<? 
	$connect= mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
	$insert = "INSERT INTO users (user, pass) VALUES ('{$_GET['user']}', '{$_GET['pass']}')";
	mysqli_query($connect, $insert);
	header("Location: index.php");
?>