<?php	
session_start();
include('logout.php');

$adminName = 'admin';
$adminPassword = '123456';



if(isset($_POST['pass']) && isset($_POST['username'])){

	if ($_POST['username'] == $adminName &&  $_POST['pass'] == $adminPassword){
        header('Location: http://localhost/psd/admin.php');
        $_SESSION['validUser'] = 1;
	}
	else
		echo 'Your login Name or password is wrong!';
	
	
}

if(isset($_POST['message'])){ 
	$file = fopen("text.txt","r+");
	//$str = implode('|&|',$_POST);
	$str = $_POST['title'].'|&|'.$_POST['message'];
	if(!$file)
	{
		echo("error opening");
    }
	fwrite ( $file ,$str) ;
	fclose($file);


}









if (isset($_SESSION['validUser']) &&  $_SESSION['validUser']==1){

	$fileForRead = fopen("text.txt","r");	
	$content = fread($fileForRead,500);
	$content = explode('|&|',$content);
	$editForm = '
		<form action="edit.php" method="post"> 
				<input type="text" value="'.$content[0].'" name="title"><br>
				<textarea name="message" style="width:500px;height:200px;">
					'.$content[1].'
				</textarea>
				<input type="submit" name="" value="Save"/>

			</form>
	';
	$showFrom = $editForm;
}
else{
	$loginForm = '
			<form action="edit.php" method="post"> 
				<input type="text" name="username" placeholder="User name">
				<br>
				<input type="password" name="pass" placeholder="Password">
				<input type="submit" name="" value="Login"/>
			</form>';

	$showFrom = $loginForm;

}


?>

<html>
	<head>
	</head>
	<body>

sdasdasdasd
		<?php echo $showFrom;


        var_dump($_SESSION['validUser']);
        ?>
	</body>
</html>