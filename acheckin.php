  <?php session_start();
?>  


<?php
include("conin.php");
$id = $_POST['ii'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM maneger WHERE MID ='" . $id . "' AND MPASSWORD = '" . $pw . "' LIMIT 1";

$res = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($res) == 1) {

    $rows = mysql_fetch_assoc($res);

    $_SESSION['id'] = $rows['MID'];
    $_SESSION['password'] = $rows['MPASSWORD'];
    $_SESSION['name'] = $rows['MNAME'];
    $_SESSION['s'] = $rows['權限'];

    echo "<script>alert('登入成功')</script>";

    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';

    echo "ok";
} else {

    echo "<script>alert('帳號或密碼不存在!!')</script>";

    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
