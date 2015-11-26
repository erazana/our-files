<?php
session_start();

if ($_POST['mode']=="loginning"){
$result=mysql_query("select * from partners_admin where login='".$_POST['login']."' and pass='".$_POST['pass']."'");
if (mysql_num_rows($result)==1){
$row=mysql_fetch_array($result);
$loginID=$row['id'];
session_start();
session_register("loginID");
header("Location: /partners/edit_partner.php");
}
else
echo "<script>alert('not!');history.back();</script>";
}

if ($_GET['mode']=="logoff"){
session_unset();
session_destroy();
header("Location: /partners/auth.php");
}


?>

<html>
<body>
<form method="post">
    <table align="center">
        <tr>
            <td><input type=text name=login ></td>
            <td><font size="+1">Login</font></td>
        </tr>
        <tr>
            <td><input type=password name=pass></td>
            <td><font size="+1">Pass</font></td>
        </tr>
        <tr>
            <td colspan=2 align="center"><input type=submit value=Login></td>
        </tr>
    </table>
    <input type=hidden name=mode value="loginning">
</form>
</body>
</html>