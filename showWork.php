<style>
 table{
	 border:3px solid blue;
	 border-spacing:2px;
 }
 td
 {
	 border:1px solid black;
	 width : 12%;
	 height:15%;
	 text-align:center;
	 background-color:#f1f1c1;
 }
 td#holiday
 {
	 background-color:yellow;
	 color:blue;
 }
</style>
<?php

   //PDO 資料庫連結
   //$dsn = "mysql:host=localhost;dbname=deli;charset=utf8";
   //$db = new PDO($dsn, "deli","002268aa");
   $dsn = "mysql:host=60.250.136.40:3306;dbname=tdb;charset=utf8";
   $db = new PDO($dsn, "root","1111");
   $db->exec("SET NAMES 'utf8'");  //資料庫設定UTF8編碼
   //初始參數
   $name = $_POST['sendname'];
   //print("[".$name."]<br>");
   //$name = '林志麟';//'林志麟';//'鄭威志'; 
   $StartDate = strtotime("2018/03/01");
   $EndDate =strtotime("+1 month -1 day",$StartDate);//+1 month -1 day
   //print(date('m/d',$EndDate));
   //參數調整   
   $Weekday = date('w',$StartDate); //當月1日是星期幾
   $mdays=date('t',$StartDate); //當月有幾天
   
   
   //"SELECT *  FROM `workout` where `Lname` = '$a'  ";
   //$query_str="select * from workout where (`Lname` = '$name') AND (Strday between '".date('y/m/d',$StartDate)."' and '"date('y/m/d',$EndDate)."') order by Strday asc");
   $query_str="select * from workout where (`Lname` = '$name') AND (Strday between '";
   $query_str=$query_str.date('Y/m/d',$StartDate)."' and '".date('Y/m/d',$EndDate)."') order by Strday asc";
   //."' and '"date('y/m/d',$EndDate)."') order by Strday asc");
 //  print($query_str);
   //$rs=$db->query("select * from workout where (`Lname` = '鄭威志') AND (Strday between '2018/02/01' and '2018/03/02') order by Strday asc");
   $rs=$db->query($query_str);
   $rs->setFetchMode(PDO::FETCH_ASSOC); //設定資料擷取方式
   //$WorkMonth = strtotime("2018/02/01");

   $ArrIndex = 0;
   $WorkArr= array();
   //初始化陣列
   for ($i=0;$i<$mdays;$i++)
   {
	   $WorkArr[$ArrIndex++]=array("無紀錄");
   }
 
   while($row = $rs->fetch())  //  每次擷取一筆
   {
	 $wday = strtotime($row['Strday']);
	 $Eday = strtotime($row['Endday']);
	 $ww = date('m/d',$wday);
	 $stime = date('h:i',$wday);
	 $Etime = date('h:i',$Eday);
	 $day = (int)date('d',$wday);
     // 登記每日工作紀錄
	 $WorkArr[$day-1] = array($row['Pjname'],$stime,$Etime);
//	 print_r($WorkArr[$day-1]."<br>");
//     print("<p>".$day);
   }
   print("<div align=center><h1>".$name.date('Y/m',$EndDate)."月份工作紀錄<hr></div>");
   print("<table>");
   print("<tr><th> 一 </th><th> 二 </th><th> 三 </th><th> 四 </th><th> 五 </th><th> 六 </th><th> 日 </th></tr><tr>");   
   //依據每月第1天 填寫空白
   for ($j=$Weekday;$j<7;$j++){
       print("<td> </td>");
	   }
   for($j=0;$j<count($WorkArr);$j++)
   {
      if($Weekday == 8)
	   {
           print("</tr><tr>");
		   $Weekday = 1;
	   }
	   //輸出日期
	   if($Weekday>=6)
		   print("<td id='Holiday'>");
	   else
		   print("<td>");
	   
	   if($j>=10)
	      print(date('m',$StartDate)."/".(string)($j+1)."<br>");
       else
	      print(date('m',$StartDate)."/0".(string)($j+1)."<br>");
	   foreach($WorkArr[$j] as $value)  //將每一個欄位資料列出
       {
	      print ($value."<br>");
       }
	   $Weekday=$Weekday+1;
   }	   
    print("</tr></table><p>");  
$db = null;
?> 
