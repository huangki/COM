<?php session_start();
?>
<?php

function drow($a) {
	include "conin.php";
	// echo $a.'<br>';
	$s = "table4.*,maneger.*";
	$str = "SELECT * FROM `table4`  where `完成度`= 0  and `stuff` = '$a' ";
	//$str = "SELECT table4.*,maneger.* FROM `table4`,`maneger` where  table4.stuff = '$a' and maneger.isOnJob=0 and table4.完成度=0 group by table4.stuff = '$a'";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<br><br><center><table border='5'><tr><td colspan=6><center><font size=5>淂立科技{$a}待辦事項</td></tr></center>";
		echo "<tr><td>項次</td><td>派工日期</td><td>專案內容</td> <td  >狀態</td><td WIDTH=150>備註</td><td>修改/完成</td></tr>";
		while ($row1 = mysql_fetch_array($result)) {
			$a = "accomplish.php?rnum=" . $row1['5'];
			$b = "update.php?rnum=" . $row1['5'];
			@$f++;
			//onClick="return confirm('確定要 XXX嗎？『這邊可以加入任何你想跟使用者說的話』');"
			echo "<tr style='background:$row1[9]'><td> $f </td>";
			echo "<td HEIGHT=80 WIDTH=80>{$row1[6]}</td>";
			echo "<td HEIGHT=80 WIDTH=150 style='color:$row1[8]'>{$row1[0]}</td>";

			echo "<td WIDTH=300 style='color:$row1[8]'>{$row1[2]}</td>";
			echo "<td WIDTH=200 style='color:$row1[8]'>{$row1[3]}</td>";
			echo "<td WIDTH=100><a href={$b}>修改</a><a href='" . $a . "'" . "onclick='return confirm(/請確認是否完成代辦事項?/)'>完成</a> </td></tr>";
		}

		echo '</table></center>';
	}

}

?>

<?php if ($_SESSION['s'] === "ADMIN" || $_SESSION['s'] === "SALE") {
	?>


    <?php
if (@$_SESSION['s'] === 'ADMIN') {
		} else if (@$_SESSION['s'] === 'SALE') {
		include "saleaccess.php";
	}
	 

	include "conin.php";
	//include("macount.php");
	//include("stick.php");
	echo $_SESSION['name'] . '    權限:管理者';
	include "conin.php";

	$query = "select * from `table4` group by `stuff`";
	$result1 = mysql_query($query);

	$num_result = mysql_num_rows($result1);

	for ($i = 0; $i < $num_result; $i++) {
		$row = mysql_fetch_array($result1);

		$now = htmlspecialchars(stripslashes($row['1']));

		drow($now);

	}

} else if ($_SESSION['s'] === "USER") {
	include 'useraccess.php';
	include "conin.php";
	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='工程' ";
	$result = mysql_query($str);
	$num1 = mysql_num_rows($result);

	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='業務' ";
	$result = mysql_query($str);
	$num2 = mysql_num_rows($result);

	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='管理' ";
	$result = mysql_query($str);
	$num3 = mysql_num_rows($result);

	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='維運' ";
	$result = mysql_query($str);
	$num4 = mysql_num_rows($result);
	?>
    <center><table border=3><td colspan=4><center>待處理事項小計表</td><tr>
                    <td>部門</td><td>工程</td><td>業務</td><td>管理</td><tr>
                    <td>代處理事項</td><td><?php echo $num1 ?></td><td><?php echo $num2 ?></td><td><?php echo $num3 ?></td><tr></table>

            </center>
            </body>
            </body>
            </html>
            你好
            <?php
echo $_SESSION['name'] . "權限" . $_SESSION['s'];
	include "conin.php";

	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='工程' order by `專案負責人` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5'><tr><td colspan=5><center><font size=5>淂立科技工程部門待辦事項</td></tr></center>";
		echo "<hr/><tr><td>派工日期</td><td  >專案內容</td><td WIDTH=100>專案負責人</td><td  >狀態</td><td WIDTH=150>備註</td></tr>";

		while ($row = mysql_fetch_array($result)) {
			$a = "accomplish.php?rnum=" . $row['5'];
			$b = "update.php?rnum=" . $row['5'];

			//onClick="return confirm('確定要 XXX嗎？『這邊可以加入任何你想跟使用者說的話』');"
			echo "<tr style='background:$row[9]'><td HEIGHT=80 WIDTH=80>{$row[6]}</td>";
			echo "<td HEIGHT=80 WIDTH=150>{$row[0]}</td>";
			echo "<td>{$row[1]}</td>";
			echo "<td WIDTH=300>{$row[2]}</td>";
			echo "<td WIDTH=200>{$row[3]}</td></tr>";
		}

		echo '</table></center>';
	}

} else if ($_SESSION['s'] === "ACCOUNT") {
	include 'accountaccess.php';
	?>

                    你好
                    <?php
echo $_SESSION['name'] . "權限" . $_SESSION['s'];

	?>
                    <?php
} else if (@$_SESSION['s'] === "SALE") {
	include "saleaccess.php";
	include "conin.php";
	include "macount.php";

	echo $_SESSION['name'] . "權限" . $_SESSION['s'];
	include "conin.php";

	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='工程' order by `專案負責人` ";
	$result = mysql_query($str);
	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5'><tr><td colspan=5><center><font size=5>淂立科技工程部門待辦事項</td></tr></center>";
		echo "<hr/><tr><td>派工日期</td><td  >專案內容</td><td WIDTH=100>專案負責人</td><td  >狀態</td><td WIDTH=150>備註</td></tr>";

		while ($row = mysql_fetch_array($result)) {
			$a = "accomplish.php?rnum=" . $row['5'];
			$b = "update.php?rnum=" . $row['5'];

			//onClick="return confirm('確定要 XXX嗎？『這邊可以加入任何你想跟使用者說的話』');"
			echo "<tr style='background:$row[9]'><td HEIGHT=80 WIDTH=80 style='color:$row[8]'>{$row[6]}</td>";
			echo "<td HEIGHT=80 WIDTH=150>{$row[0]}</td>";
			echo "<td>{$row[1]}</td>";
			echo "<td WIDTH=300 style='color:$row[8]'>{$row[2]}</td>";
			echo "<td WIDTH=200 style='color:$row[8]'>{$row[3]}</td></tr>";
		}

		echo '</table></center>';
	}

	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='業務' order by `專案負責人` ";
	$result = mysql_query($str);

	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5'><tr><td colspan=5><center><font size=5>淂立科技業務部門待辦事項</td></tr></center>";
		echo "<tr><td>派工日期</td><td  >專案內容</td><td WIDTH=100>專案負責人</td><td  >狀態</td><td WIDTH=150>備註</td></tr>";

		while ($row = mysql_fetch_array($result)) {
			$a = "accomplish.php?rnum=" . $row['5'];
			$b = "update.php?rnum=" . $row['5'];

			//onClick="return confirm('確定要 XXX嗎？『這邊可以加入任何你想跟使用者說的話』');"
			echo "<tr style='background:$row[9]'><td HEIGHT=80 WIDTH=80 style='color:$row[8]'>{$row[6]}</td>";
			echo "<td HEIGHT=80 WIDTH=150>{$row[0]}</td>";
			echo "<td>{$row[1]}</td>";
			echo "<td WIDTH=300 style='color:$row[8]'>{$row[2]}</td>";
			echo "<td WIDTH=200 style='color:$row[8]'>{$row[3]}</td></tr>";
		}

		echo '</table></center>';
	}
	$str = "SELECT * FROM `table4` where  `完成度`=0 AND `類別`='管理' order by `專案負責人` ";
	$result = mysql_query($str);

	if (mysql_num_rows($result) > 0) {
		echo "<center><table border='5'><tr><td colspan=5><center><font size=5>淂立科技管理部門待辦事項</td></tr></center>";
		echo "<tr><td>派工日期</td><td  >專案內容</td><td WIDTH=100>專案負責人</td><td  >狀態</td><td WIDTH=150>備註</td> </tr>";

		while ($row = mysql_fetch_array($result)) {
			$a = "accomplish.php?rnum=" . $row['5'];
			$b = "update.php?rnum=" . $row['5'];

			//onClick="return confirm('確定要 XXX嗎？『這邊可以加入任何你想跟使用者說的話』');"
			echo "<tr style='background:$row[9]'><td HEIGHT=80 WIDTH=80 style='color:$row[8]'>{$row[6]}</td>";
			echo "<td HEIGHT=80 WIDTH=150>{$row[0]}</td>";
			echo "<td>{$row[1]}</td>";
			echo "<td WIDTH=300 style='color:$row[8]'>{$row[2]}</td>";
			echo "<td WIDTH=200 style='color:$row[8]'>{$row[3]}</td></tr>";
		}

		echo '</table></center>';
	}
	?>

                    <?php
} else {
	echo '您無權限觀看此頁面!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>