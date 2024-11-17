<? 
	$connect= mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
	$delete = "DELETE FROM posts WHERE id='{$_GET['id']}' ";
	mysqli_query($connect, $delete);
	header("Location: index.php")
?>