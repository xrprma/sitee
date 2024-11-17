<?
	$connect= mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
	$insert = "INSERT INTO posts (name, city, text, price, photo) VALUES ('{$_GET['name']}', '{$_GET['city']}', '{$_GET['text']}', '{$_GET['price']}', 'img/house.jpg')";
	mysqli_query($connect, $insert);
	header("Location: index.php");
?>