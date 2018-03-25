     <?php session_start();
?>
<?php if (@$_SESSION['s'] === "ADMIN") { ?>
    <?php
    include("conin.php");
    $a = $_GET['rnum'];

    $str = "SELECT * FROM table4 where `流水號` =$a ";

    $result = mysql_query($str);

    if (@mysql_num_rows($result) > 0) {


        while ($row = mysql_fetch_array($result)) {
            $g = $row[0];
            $b = $row[1];
            $c = $row[2];
            $d = $row[3];
            $f = $row[5];
            $h = $row[7];
            $y = $row[8];
            $z = $row[9];
        }
    }
    ?>

    <form   method="post" action="updatee.php">
        <input type="hidden" name="num" value="<?php echo $f ?>">
        <center>  <table border='5' >

                <td> 專案負責人： <select name="type" >
                        <option><?php echo $b ?></option>
                        <option>吳經理</option>
                        <option>王品云</option>
                        <option>黃經理</option>

                        <option>杜倫撤</option>
                        <option>洪愷均</option>


                        <option>王捷姈</option>
                        <option>張美姈</option>
                        <option>賴盈君</option>
                        <option>周勁良</option>

                    </select></td></tr>
                <td > 專案類別:
                    <select name="typpe" >
                        <option><?php echo $h ?></option>
                        <option>工程</option>
                        <option>業務</option>
                        <option>管理</option>
                        <option>維運</option>
                    </select></td><tr>
                <tr><td>字體顏色(預設為黑)</td></tr>
                <tr><td><input type="color" name="color" value="<?php echo $y; ?>"/> </td></tr>
                <tr><td>表格底色(預設為白)</td></tr>
                <tr><td><input type="color" name="color1" value="<?php echo $z; ?>"/> </td></tr>
                <td> 專案內容：</td></tr><td> <textarea style="font-size:20px;width:300px;height:100px;" name="name" ><?php echo $g ?></textarea>  </td></tr>

                <td> 狀態：</td></tr><td> <textarea style="font-size:20px;width:300px;height:100px;" name="st" ><?php echo $c ?></textarea>  </td></tr>

                <td> 備註： </td></tr><td><textarea style="font-size:20px;width:300px;height:100px;" name="ps" ><?php echo $d ?></textarea>  </td></tr>
                <td>    <input type="submit" name="button" value="更改" />&nbsp;&nbsp;</td></tr>
            </table>
    </form>


    <?php
} else if (@$_SESSION['s'] === "USER" || @$_SESSION['s'] === "SALE" || @$_SESSION['s'] === "ENG" || @$_SESSION['s'] === "MAIN" || @$_SESSION['s'] === "ACCOUNT") {
    include("conin.php");
    $a = $_GET['rnum'];

    $str = "SELECT * FROM table4 where `流水號` =$a ";

    $result = mysql_query($str);

    if (@mysql_num_rows($result) > 0) {


        while ($row = mysql_fetch_array($result)) {
            $g = $row[0];
            $b = $row[1];
            $c = $row[2];
            $d = $row[3];
            $f = $row[5];
            $h = $row[7];
            $y = $row[8];
            $z = $row[9];
        }
    }
    ?>

    <form   method="post" action="updatee.php">
        <input type="hidden" name="num" value="<?php echo $f ?>">
        <input type="hidden" name="type" value="<?php echo $b ?>">
        <input type="hidden" name="typpe" value="<?php echo $h ?>">
        <center>  <table border='5' >

                <td> 專案負責人： <?php echo $_SESSION['name'] ?>  </td></tr>
                <td > 專案類別:

                    <?php echo $h ?> 
                </td><tr>
                <tr><td>字體顏色(預設為黑)</td></tr>
                <tr><td><input type="color" name="color" value="<?php echo $y; ?>"/> </td></tr>
                <tr><td>表格底色(預設為白)</td></tr>
                <tr><td><input type="color" name="color1" value="<?php echo $z; ?>"/> </td></tr>
                <td> 專案內容：</td></tr><td> <textarea style="font-size:20px;width:300px;height:100px;" name="name" ><?php echo $g ?></textarea>  </td></tr>

                <td> 狀態：</td></tr><td> <textarea style="font-size:20px;width:300px;height:100px;" name="st" ><?php echo $c ?></textarea>  </td></tr>

                <td> 備註： </td></tr><td><textarea style="font-size:20px;width:300px;height:100px;" name="ps" ><?php echo $d ?></textarea>  </td></tr>
                <td>    <input type="submit" name="button" value="更改" />&nbsp;&nbsp;</td></tr>
            </table>
    </form>

    <?php
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