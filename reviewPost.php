<? 
	$connect= mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
	$insert = "INSERT INTO reviews (user, text, re) VALUES ('{$_GET['user']}', '{$_GET['text']}', '{$_GET['re']}')";
	mysqli_query($connect, $insert);
	header("Location: index.php");
?>