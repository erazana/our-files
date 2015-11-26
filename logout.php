<?php

if(isset($_POST['return'])){
    session_unset();
    $logoutForm = '
			<form action="logout.php" method="post">
				<input type="text" name="username" placeholder="User name">
				<br>
				<input type="password" name="pass" placeholder="Password">
				<input type="submit" name="" value="Login"/>
			</form>';
      header("location:/psd/edit.php");
    exit();
}

?>

<html>
<head>
</head>
<body>
    <form action="edit.php" method="post">
        <input name="return" type="hidden" value="<?php echo '$logoutForm;'?>" />
        <input type="submit" value="logout" style="position:absolute; top:50px; right: 150px;"/>
    </form>
</body>
</html>