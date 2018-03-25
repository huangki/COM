    <?php session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="dist/accordion.css" />
<script src="dist/accordion.min.js"></script>
<script>
    jQuery(document).ready(function($){
        $("#my-accordion").accordionjs();
    });
</script>
<?php
if (isset($_GET['search'])) {
	search($_GET['search']);
}

if (@$_SESSION['s'] === 'ADMIN') {
	include "adminaccess.php";
	//include 'stick.php';
	//include("engcount.php");
	echo $_SESSION['name'] . '管理者';
	include "conin.php";
	$str = "SELECT * FROM `table10` where`完成度`=0 and `派工公司`='台北'  order by `報修日期` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5' width=90%><tr><td colspan=5><center><font size=5>淂立科技台北總公司工程部門未結案派工單</td></tr></center>";
		while ($row = mysql_fetch_array($result)) {
			$a = "WP.php?rnum=" . $row['0'];
			$b = "eeupdate.php?rnum=" . $row['0'];
			$c = "eefin.php?rnum=" . $row['0'];
			$d = "defin.php?rnum=" . $row['0'];
			@$f++;
			echo "<table  border='5' width=90%>
            <tr style='background:$row[37] ;color:$row[36]'>
                  <td width=15%>專案編號：{$row[48]}</td>";
			echo "<td width=15%>派工日期：{$row[8]}</td>";
			echo "<td width=30%>專案名稱：{$row[49]}<br>客戶窗口：{$row[5]}</td>";
			$n = $chinese_format_number = number_format($row['應收'], 0, '.', ',') . '元';
			echo "<td width=15%>案件金額：{$n}</td>";
			echo "<td width=15%>客戶：{$row[3]}</td></tr>";
			echo "<tr>
                  <td  >
                  工程類別：{$row[10]}<br>
                  業務承辦：{$row['負責業務']}<br>
                  工務承辦：{$row['工程負責人']}<br>
                  <a href={$b}>修改</a>
                  <a href={$a} target='_blank'>列印</a>
                  <a href='" . $c . "'" . "onclick='return confirm(/請確認是否完成代辦事項?/)'>結案</a> <a href='" . $d . "'" . "onclick='return confirm(/請確認是否刪除代辦事項?/)'>刪除</a></td>";
			echo "<td colspan=2>工程內容：<br>{$row[11]}<br>{$row[12]}<br>{$row[13]}<br>{$row[14]}<br>{$row[15]}</td>";
			echo "<td colspan=2>備註：<br>{$row['備註']}</td>";
			echo "</tr>";

			//轉案進貨部分！！
			// $str1= "SELECT * FROM `invet` where `專案編號`= $row[48] ";
			// $fin = "";
			// $result1 = mysql_query($str1);
			// if (@mysql_num_rows($result1) > 0) {
			// echo "<td colspan=4>進貨：<br>";
			// while ($rows = mysql_fetch_array($result1)) {
			// $murchan = substr( $rows['採購內容'] , 0 , 50 );
			// $money = @number_format($rows['金額'], 0, '.', ',') . '元';
			// $fin = $fin.$murchan.'<strong>'."金額:".'</strong>'.$money.'<br>';

			// }
			// echo "{$fin}<br></td>";
			// }
			echo "</table>";
		}
		echo '</table></center><br><br><br><br><br>';

	}

	$str = "SELECT * FROM `table10` where`完成度`=0 and `派工公司`='花蓮' order by `報修日期` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5' width=90%><tr><td colspan=5><center><font size=5>淂立科技花蓮分公司工程部門未結案派工單</td></tr></center>";
		while ($row = mysql_fetch_array($result)) {
			$a = "WP.php?rnum=" . $row['0'];
			$b = "eeupdate.php?rnum=" . $row['0'];
			$c = "eefin.php?rnum=" . $row['0'];
			$d = "defin.php?rnum=" . $row['0'];
			@$f++;
			echo "<table  border='5' width=90%>
            <tr style='background:$row[37] ;color:$row[36]'>
                  <td width=15%>專案編號：{$row[48]}</td>";
			echo "<td width=15%>派工日期：{$row[8]}</td>";
			echo "<td width=30%>專案名稱：{$row[49]}<br>客戶窗口：{$row[5]}</td>";
			$n = $chinese_format_number = number_format($row['應收'], 0, '.', ',') . '元';
			echo "<td width=15%>案件金額：{$n}</td>";
			echo "<td width=15%>客戶：{$row[3]}</td></tr>";
			echo "<tr>
                  <td  >
                  工程類別：{$row[10]}<br>
                  業務承辦：{$row['負責業務']}<br>
                  工務承辦：{$row['工程負責人']}<br>
                  <a href={$b}>修改</a>
                  <a href={$a} target='_blank'>列印</a>
                  <a href='" . $c . "'" . "onclick='return confirm(/請確認是否完成代辦事項?/)'>結案</a> <a href='" . $d . "'" . "onclick='return confirm(/請確認是否刪除代辦事項?/)'>刪除</a></td>";
			echo "<td colspan=2>工程內容：<br>{$row[11]}<br>{$row[12]}<br>{$row[13]}<br>{$row[14]}<br>{$row[15]}</td>";
			echo "<td colspan=2>備註：<br>{$row[35]}</td>";
			echo "</tr>";

			//轉案進貨部分！！
			// $str1= "SELECT * FROM `invet` where `專案編號`= $row[48] ";
			// $fin = "";
			// $result1 = mysql_query($str1);
			// if (@mysql_num_rows($result1) > 0) {
			// echo "<td colspan=4>進貨：<br>";
			// while ($rows = mysql_fetch_array($result1)) {
			// $murchan = substr( $rows['採購內容'] , 0 , 50 );
			// $money = @number_format($rows['金額'], 0, '.', ',') . '元';
			// $fin = $fin.$murchan.'<strong>'."金額:".'</strong>'.$money.'<br>';

			// }
			// echo "{$fin}<br></td>";
			// }
			echo "</table>";
		}
		echo '</table></center>';

	}
} else if (  $_SESSION['s'] == 'ACCOUNT') {

	if ($_SESSION['s'] === "ACCOUNT") {
		include 'accountaccess.php';
	}  
	 
	 
	echo $_SESSION['name'] . "權限" . $_SESSION['s'];
	include "conin.php";


	$str = "SELECT * FROM `table10` where`完成度`=0 and `派工公司`='花蓮' order by `報修日期` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5' width=90%><tr><td colspan=5><center><font size=5>淂立科技花蓮分公司工程部門未結案派工單</td></tr></center>";
		while ($row = mysql_fetch_array($result)) {
			$a = "WP.php?rnum=" . $row['0'];
			$b = "eeupdate.php?rnum=" . $row['0'];
			$c = "eefin.php?rnum=" . $row['0'];
			$d = "defin.php?rnum=" . $row['0'];
			@$f++;
			echo "<table  border='5' width=90%>
            <tr style='background:$row[37] ;color:$row[36]'>
                  <td width=15%>專案編號：{$row[48]}</td>";
			echo "<td width=15%>派工日期：{$row[8]}</td>";
			echo "<td width=30%>專案名稱：{$row[49]}<br>客戶窗口：{$row[5]}</td>";
			$n = $chinese_format_number = number_format($row['應收'], 0, '.', ',') . '元';
			echo "<td width=15%>案件金額：{$n}</td>";
			echo "<td width=15%>客戶：{$row[3]}</td></tr>";
			echo "<tr>
                  <td  >
                  工程類別：{$row[10]}<br>
                  業務承辦：{$row['負責業務']}<br>
                  工務承辦：{$row['工程負責人']}<br>
                  <a href={$b}>修改</a>
                  <a href={$a} target='_blank'>列印</a>
                  <a href='" . $c . "'" . "onclick='return confirm(/請確認是否完成代辦事項?/)'>結案</a> <a href='" . $d . "'" . "onclick='return confirm(/請確認是否刪除代辦事項?/)'>刪除</a></td>";
			echo "<td colspan=2>工程內容：<br>{$row[11]}<br>{$row[12]}<br>{$row[13]}<br>{$row[14]}<br>{$row[15]}</td>";
			echo "<td colspan=2>備註：<br>{$row[35]}</td>";
			echo "</tr>";

			//轉案進貨部分！！
			// $str1= "SELECT * FROM `invet` where `專案編號`= $row[48] ";
			// $fin = "";
			// $result1 = mysql_query($str1);
			// if (@mysql_num_rows($result1) > 0) {
			// echo "<td colspan=4>進貨：<br>";
			// while ($rows = mysql_fetch_array($result1)) {
			// $murchan = substr( $rows['採購內容'] , 0 , 50 );
			// $money = @number_format($rows['金額'], 0, '.', ',') . '元';
			// $fin = $fin.$murchan.'<strong>'."金額:".'</strong>'.$money.'<br>';

			// }
			// echo "{$fin}<br></td>";
			// }
			echo "</table>";
		}
		echo '</table></center>';

	}
} else if (@$_SESSION['s'] === "SALE") {
	include "saleaccess.php";
	//include 'stick.php';
	//include("engcount.php");

	echo $_SESSION['name'] . "權限" . $_SESSION['s'];
	include "conin.php";
	$str = "SELECT * FROM `table10` where`完成度`=0 and `派工公司`='台北' order by `報修日期` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5' width=90%><tr><td colspan=5><center><font size=5>淂立科技台北總公司工程部門未結案派工單</td></tr></center>";
		while ($row = mysql_fetch_array($result)) {
			$a = "WP.php?rnum=" . $row['0'];
			$b = "eeupdate.php?rnum=" . $row['0'];
			$c = "eefin.php?rnum=" . $row['0'];
			$d = "defin.php?rnum=" . $row['0'];
			@$f++;
			echo "<table  border='5' width=90%>
            <tr style='background:$row[37] ;color:$row[36]'>
                  <td width=15%>專案編號：{$row[48]}</td>";
			echo "<td width=15%>派工日期：{$row[8]}</td>";
			echo "<td width=30%>專案名稱：{$row[49]}<br>客戶窗口：{$row[5]}</td>";
			$n = $chinese_format_number = number_format($row['應收'], 0, '.', ',') . '元';
			echo "<td width=15%>案件金額：{$n}</td>";
			echo "<td width=15%>客戶：{$row[3]}</td></tr>";
			echo "<tr>
                  <td  >
                  工程類別：{$row[10]}<br>
                  業務承辦：{$row['負責業務']}<br>
                  工務承辦：{$row['工程負責人']}<br>
                  <a href={$b}>修改</a>
                  <a href={$a} target='_blank'>列印</a>
                  <a href='" . $c . "'" . "onclick='return confirm(/請確認是否完成代辦事項?/)'>結案</a> <a href='" . $d . "'" . "onclick='return confirm(/請確認是否刪除代辦事項?/)'>刪除</a></td>";
			echo "<td colspan=2>工程內容：<br>{$row[11]}<br>{$row[12]}<br>{$row[13]}<br>{$row[14]}<br>{$row[15]}</td>";
			echo "<td colspan=2>備註：<br>{$row['備註']}</td>";
			echo "</tr>";

			//轉案進貨部分！！
			// $str1= "SELECT * FROM `invet` where `專案編號`= $row[48] ";
			// $fin = "";
			// $result1 = mysql_query($str1);
			// if (@mysql_num_rows($result1) > 0) {
			// echo "<td colspan=4>進貨：<br>";
			// while ($rows = mysql_fetch_array($result1)) {
			// $murchan = substr( $rows['採購內容'] , 0 , 50 );
			// $money = @number_format($rows['金額'], 0, '.', ',') . '元';
			// $fin = $fin.$murchan.'<strong>'."金額:".'</strong>'.$money.'<br>';

			// }
			// echo "{$fin}<br></td>";
			// }
			echo "</table>";
		}
		echo '</table></center><br><br><br><br><br>';

	}

	$str = "SELECT * FROM `table10` where`完成度`=0 and `派工公司`='花蓮' order by `報修日期` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5' width=90%><tr><td colspan=5><center><font size=5>淂立科技花蓮分公司工程部門未結案派工單</td></tr></center>";
		while ($row = mysql_fetch_array($result)) {
			$a = "WP.php?rnum=" . $row['0'];
			$b = "eeupdate.php?rnum=" . $row['0'];
			$c = "eefin.php?rnum=" . $row['0'];
			$d = "defin.php?rnum=" . $row['0'];
			@$f++;
			echo "<table  border='5' width=90%>
            <tr style='background:$row[37] ;color:$row[36]'>
                  <td width=15%>專案編號：{$row[48]}</td>";
			echo "<td width=15%>派工日期：{$row[8]}</td>";
			echo "<td width=30%>專案名稱：{$row[49]}<br>客戶窗口：{$row[5]}</td>";
			$n = $chinese_format_number = number_format($row['應收'], 0, '.', ',') . '元';
			echo "<td width=15%>案件金額：{$n}</td>";
			echo "<td width=15%>客戶：{$row[3]}</td></tr>";
			echo "<tr>
                  <td  >
                  工程類別：{$row[10]}<br>
                  業務承辦：{$row['負責業務']}<br>
                  工務承辦：{$row['工程負責人']}<br>
                  <a href={$b}>修改</a>
                  <a href={$a} target='_blank'>列印</a>
                  <a href='" . $c . "'" . "onclick='return confirm(/請確認是否完成代辦事項?/)'>結案</a> <a href='" . $d . "'" . "onclick='return confirm(/請確認是否刪除代辦事項?/)'>刪除</a></td>";
			echo "<td colspan=2>工程內容：<br>{$row[11]}<br>{$row[12]}<br>{$row[13]}<br>{$row[14]}<br>{$row[15]}</td>";
			echo "<td colspan=2>備註：<br>{$row['備註']}</td>";
			echo "</tr>";

			//轉案進貨部分！！
			// $str1= "SELECT * FROM `invet` where `專案編號`= $row[48] ";
			// $fin = "";
			// $result1 = mysql_query($str1);
			// if (@mysql_num_rows($result1) > 0) {
			// echo "<td colspan=4>進貨：<br>";
			// while ($rows = mysql_fetch_array($result1)) {
			// $murchan = substr( $rows['採購內容'] , 0 , 50 );
			// $money = @number_format($rows['金額'], 0, '.', ',') . '元';
			// $fin = $fin.$murchan.'<strong>'."金額:".'</strong>'.$money.'<br>';

			// }
			// echo "{$fin}<br></td>";
			// }
			echo "</table>";
		}
		echo '</table></center>';

	}

} else {
	echo '您無權限觀看此頁面!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
