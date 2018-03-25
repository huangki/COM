     <?php session_start();
?>
<?php if (@$_SESSION['id'] != null) { ?>
    <?php
    include("conin.php");
    $a = $_POST['num'];
    $b = $_POST['name'];
    $c = $_POST['st'];
    $d = $_POST['ps'];
    $e = $_POST['typpe'];
    $f = $_POST['type'];
    $y = $_POST['color'];
    $z = $_POST['color1'];
    $rrr = $_SESSION['name'];
   /* require("/phpMailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true; // turn on SMTP authentication
//這幾行是必須的

    $mail->Username = "custsyserv@gmail.com";
    $mail->Password = "deli2268";
//這邊是你的gmail帳號和密碼

    $mail->FromName = "淂立科技專案部門";
// 寄件者名稱(你自己要顯示的名稱)
    $webmaster_email = "custsyserv@gmail.com";
//回覆信件至此信箱
//$email="ping.chiu@delitech.com.tw";
// 收件者信箱
//$name="淂立科技 邱志平";
// 收件者的名稱or暱稱
//$mail->From = $webmaster_email;
//$mail->AddAddress($email,$name);
//$mail->AddCC("huangkikiki@gmail.com"); 
    if ($f === "黃楷鈞") {
       $mail->AddAddress("huangkik@gmail.com", "淂立科技 黃楷鈞");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "張美姈") {
        $mail->AddAddress("jelly@delitech.com.tw", "淂立科技 張美姈");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "周勁良") {
        $mail->AddAddress("leo.chou@delitech.com.tw", "淂立科技 周勁良");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "邱志平") {
        $mail->AddAddress("h122004304@gmail.com", "淂立科技 邱志平");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "洪愷均") {
        $mail->AddAddress("k232613@gmail.com", "淂立科技 洪愷均");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "林暐潔") {
        $mail->AddAddress("Jielin@delitech.com.tw", "淂立科技 林暐潔");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "李喬維") {
        $mail->AddAddress("charleslee@delitech.com.tw", "淂立科技 李喬維");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($f === "吳經理") {
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    }  else if ($f === "賴盈君") {
        $mail->AddAddress("delitech2268@gmail.com","淂立科技 吳良進"); 
        $mail->AddAddress("konolai@delitech.com.tw","淂立科技 賴盈君"); 
    } else if ($f === "黃經理") {
        $mail->AddAddress("delitech2268@gmail.com","淂立科技 吳良進"); 
        
    }
    /* $mail->AddAddress("delitech2268@gmail.com","淂立科技 吳良進"); 
      $mail->AddAddress("huangkik@gmail.com","淂立科技 黃楷鈞");
      $mail->AddAddress("jelly@delitech.com.tw","淂立科技 張美玲");
      $mail->AddAddress("leo.chou@delitech.com.tw","淂立科技 周勁良");
      $mail->AddAddress("h122004304@gmail.com","淂立科技 邱志平");
      $mail->AddAddress("k232613@gmail.com","淂立科技 洪愷均");
      $mail->AddAddress("Jielin@delitech.com.tw","淂立科技 林暐潔");
      $mail->AddAddress("charleslee@delitech.com.tw","淂立科技 李喬維");
      $mail->AddReplyTo($webmaster_email,"Squall.f"); */
//這不用改*/
 /*   $mail->AddReplyTo($webmaster_email, "Squall.f");
    $mail->WordWrap = 50;
//每50行斷一次行
//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

    $mail->IsHTML(true); // send as HTML

    $mail->Subject = "修改:" . $b;
// 信件標題
    $mail->Body = "<font size=3><table border=5><tr><td>專案內容:$b </td></tr><tr><td>專案負責人:$f</td></tr>
<tr><td>此進度最後修改者為:$rrr </td></tr>        
<tr><td>類別:  $e</td></tr>
<tr><td>狀態:  $c</td></tr>
<tr><td>備註:  $d</td></tr></table>
此為系統訊息信箱，無須回信，請登入EIP系統回報<br>
淂立科技線上EIP: http://deli.servepics.com/conference/index.php<br><br>
此為修改後版本，淂立用心，顧客放心<br><br>
 

務必請盡速處理 回報 淂立科技關心您與您的績效<br><br>
淂立系統專案部門 敬上<br>

************************<br>
淂立科技有限公司 <br>
台北市北投區文林北路80巷93號<br>
T:02-2827-2268 F:02-28270208<br></font>
";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
//$mail->AltBody = ""; 
//信件內容(純文字版)

    if (!$mail->Send()) {
        echo "寄信發生錯誤：" . $mail->ErrorInfo;
//如果有錯誤會印出原因
    } else {
        echo "寄信成功";
    }
*/
    //$str = ' update table4 set `專案(含內容)`="' . $b . '",`專案負責人`="' . $f . '",`類別`="' . $e . '",`狀態`="' . $c . '",`備註`="' . $d . '",`顏色`="' . $y . '",`顏色1`="' . $z . '" where `流水號` ="' . $a . '" ';
    $str = ' update table4 set `專案(含內容)`="' . $b . '",`stuff`="' . $f . '",`類別`="' . $e . '",`狀態`="' . $c . '",`備註`="' . $d . '",`顏色`="' . $y . '",`顏色1`="' . $z . '" where `流水號` ="' . $a . '" ';

    // echo  $str;
    mysql_query($str)or die(mysql_error());
    //echo  mysql_query($str);  
    if(@$_SESSION['s']==='USER'||@$_SESSION['s']==='ACCOUNT'||@$_SESSION['s']==='SALE'){
    echo "<script>alert('已修改完成')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0.5;url=admincall.php>";}
    else if(@$_SESSION['s']==='ADMIN'){
    echo "<script>alert('已修改完成')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0.5;url=adminindex.php>";    
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-61162154-1', 'auto');
    ga('send', 'pageview');

</script>