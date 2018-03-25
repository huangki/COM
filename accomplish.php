     <?php session_start();
?>
<?php if (@$_SESSION['id'] != null) { ?>
    <?php
    include("conin.php");
    $a = @$_GET['rnum'];
    $str = 'SELECT * FROM  table4  where `流水號` =' . $a . ' ';
    // echo  $str;
   $result =  mysql_query($str)or die(mysql_error());
    if (  mysql_num_rows($result)> 0) { 
        while ($row = mysql_fetch_array($result)) {
        $aa = $row[0];
        $b = $row[1];
        $c = $row[2];
        $d = $row[6];
        $e = $row[7];}
    }
    require("/phpMailer/class.phpmailer.php");
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
    if ($b === "黃楷鈞") {
        $mail->AddAddress("huangkik@gmail.com", "淂立科技 黃楷鈞");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "張美玲") {
        $mail->AddAddress("jelly@delitech.com.tw", "淂立科技 張美玲");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "周勁良") {
        $mail->AddAddress("leo.chou@delitech.com.tw", "淂立科技 周勁良");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "邱志平") {
        $mail->AddAddress("h122004304@gmail.com", "淂立科技 邱志平");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "洪愷均") {
        $mail->AddAddress("k232613@gmail.com", "淂立科技 洪愷均");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "林暐潔") {
        $mail->AddAddress("Jielin@delitech.com.tw", "淂立科技 林暐潔");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "李喬維") {
        $mail->AddAddress("charleslee@delitech.com.tw", "淂立科技 李喬維");
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    } else if ($b === "吳經理") {
        $mail->AddAddress("delitech2268@gmail.com", "淂立科技 吳良進");
    }else if ($b === "賴盈君") {
        $mail->AddAddress("delitech2268@gmail.com","淂立科技 吳良進"); 
        $mail->AddAddress("konolai@delitech.com.tw","淂立科技 賴盈君"); 
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
//這不用改
    $mail->AddReplyTo($webmaster_email, "Squall.f");
    $mail->WordWrap = 50;
    date_default_timezone_set('Asia/Taipei'); $dd = date('Y-m-d');
//每50行斷一次行
//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

    $mail->IsHTML(true); // send as HTML

    $mail->Subject = "待辦事項完成:".$aa;
// 信件標題
    $mail->Body = "<font size=3>專案內容:$aa <br> 專案負責人:$b<br>

類別:  $e<br>
狀態:  $c<br><br>
指派日期:  $d<br> 
完成日期:  $dd<br><br>
 
事項已完成，辛苦了 淂立科技感謝您的努力<br><br>
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


    $str = 'update table4 set `完成度`=1  where `流水號` =' . $a . ' ';
    // echo  $str;
    mysql_query($str)or die(mysql_error());
    mysql_query($str);

    echo "<script>alert('已銷單 辛苦了')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0.5;url=adminindex.php>";
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