<?
	session_start();
	$con = mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
	$query = "SELECT * FROM users WHERE user='{$_POST['user']}' AND pass='{$_POST['pass']}'";

	$result = mysqli_query($con, $query);

	$num = mysqli_num_rows($result);

	if($num == 1){
		$row = mysqli_fetch_assoc($result);
		$user = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['id'];
		header("Location: index.php");
	}else{
		header("Location: login.php?error=Такого пользователя не существует");
	}
	
?>