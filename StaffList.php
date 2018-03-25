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
    <script>
        $(document).ready(function(){
            //页面加载的时候，内容框默认显示 a.html
            $('#con').load('./a.html');
            //单击 a 链接，加载 a.html
			<?php 
			
			
			echo $_SESSION['name'];?>
            $("menu_a1").click(function(){
                $('#con').load('adminindex.php');
            });
            $("menu_a2").click(function(){
                $('#con').load('in.php');
            });
            $("menu_a3").click(function(){
                $('#con').load('check.php');
            });
            $("menu_b1").click(function(){
                $('#con').load('business.php');
            });
            $("menu_b2").click(function(){
                $('#con').load('bin.php');
            });
            $("menu_b3").click(function(){
                $('#con').load('butemp.php');
            });
            $("menu_c11").click(function(){
                $('#con').load('adminstate.php');
            });
            $("menu_c12").click(function(){
                $('#con').load('min.php');
            });
            $("menu_c21").click(function(){
                $('#con').load('admineng.php');
            });
            $("menu_c22").click(function(){
                $('#con').load('newen.php');
            });
            $("menu_d11").click(function(){
                $('#con').load('goodc.php');
            });
            $("menu_d12").click(function(){
                $('#con').load('goodin.php');
            });
            $("menu_d13").click(function(){
                $('#con').load('goodt.php');
            });
            $("menu_d21").click(function(){
                $('#con').load('mala.php');
            });
            $("menu_d22").click(function(){
                $('#con').load('land.php');
            });			
            $("menu_e11").click(function(){
                $('#con').load('admitc.php');
            });
            $("menu_e12").click(function(){
                $('#con').load('petty.php');
            });
            $("menu_e13").click(function(){
                $('#con').load('admint.php');
            });
            $("menu_f11").click(function(){
                $('#con').load('CRM.php');
            });
            $("menu_f12").click(function(){
                $('#con').load('CRMin.php');
            });
            $("menu_f13").click(function(){
                $('#con').load('Supplyc.php');
            });					
            $("menu_f21").click(function(){
                $('#con').load('SUP.php');
            });
            $("menu_f22").click(function(){
                $('#con').load('Supplyin.php');
            });
            $("menu_f23").click(function(){
                $('#con').load('Supply.php');
			});
			$("menu_f31").click(function(){
                $('#con').load('staffmanage.php');
            });
            $("menu_f32").click(function(){
                $('#con').load('labormanage.php');
            });
            $("menu_f33").click(function(){
                $('#con').load('supplyc.php');
			});
       )
	}
    </script>
<?php

   //PDO 資料庫連結
   //$dsn = "mysql:host=localhost;dbname=deli;charset=utf8";
   //$db = new PDO($dsn, "deli","002268aa"); 
   $dsn = "mysql:host=localhost;dbname=tdb;charset=utf8";
   $db = new PDO($dsn, "root","1111");
   $db->exec("SET NAMES 'utf8");  //資料庫設定UTF8編碼
   //$query_str="select S_Name,S_Right from staff";
   $query_str="select LName  from labor";
   //初始參數
   $name = '林志麟';//'林志麟';//'鄭威志'; 
   $rs=$db->query($query_str);
   $rs->setFetchMode(PDO::FETCH_ASSOC); //設定資料擷取方式
   print("<form action='showWork.php' method = 'post' target='rightframe'>"); 
   while($row = $rs->fetch())  //  每次擷取一筆
   {
	   //print(" <a href='#' id='".$row['S_Name']." target='#con'>".$row['S_Name']."</a><br>");
	   //print(" <input type='submit'  name='sendname' value='".$row['S_Name']."'><br>");
	   print(" <input type='submit'  name='sendname' value='".$row['LName']."'><br>");
   }	   
   print("</form>");
    //print("</tr></table><p>");  
$db = null;
?> 
