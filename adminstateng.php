<?php session_start();
?>
<?php if (@$_SESSION['s'] === 'ADMIN'||@$_SESSION['s'] === 'SALE') { ?>
    

            <?php
            
            @$a = $_POST['a'];
            @$b = $_POST['cost'];
            
            
            include("conin.php");
            $str = "SELECT SUM(`利潤結算`) FROM `table10` where (`人1` LIKE '%李%' OR `人2` LIKE '%李%' OR `人3` LIKE '%李%' OR `人4` LIKE '%李%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num1 = mysql_result($result,0);
            $str = "SELECT * FROM `table10` where `完成度`=1 AND (`人1` LIKE '%李%' OR `人2` LIKE '%李%' OR `人3` LIKE '%李%' OR `人4` LIKE '%李%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $t = mysql_num_rows($result);
            $str = "SELECT SUM(`時1`) FROM `table10` where  (`人1` LIKE '%李%' OR `人2` LIKE '%李%' OR `人3` LIKE '%李%' OR `人4` LIKE '%李%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num2 = mysql_result($result,0);
            
            
            $str = "SELECT SUM(`利潤結算`) FROM `table10` where (`人1` LIKE '%周%' OR `人2` LIKE '%周%' OR `人3` LIKE '%周%' OR `人4` LIKE '%周%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num11 = mysql_result($result,0);
            $str = "SELECT SUM(`時1`) FROM `table10` where  (`人1` LIKE '%周%' OR `人2` LIKE '%周%' OR `人3` LIKE '%周%' OR `人4` LIKE '%周%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num22 = mysql_result($result,0);
            $str = "SELECT * FROM `table10` where `完成度`=1 AND(`人1` LIKE '%周%' OR `人2` LIKE '%周%' OR `人3` LIKE '%周%' OR `人4` LIKE '%周%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $t2 = mysql_num_rows($result);
           
            
            $str = "SELECT SUM(`利潤結算`) FROM `table10` where (`人1` LIKE '%林%' OR `人2` LIKE '%林%' OR `人3` LIKE '%林%' OR `人4` LIKE '%林%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num33 = mysql_result($result,0);
            $str = "SELECT SUM(`時1`) FROM `table10` where  (`人1` LIKE '%林%' OR `人2` LIKE '%林%' OR `人3` LIKE '%林%' OR `人4` LIKE '%林%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num44 = mysql_result($result,0);
            $str = "SELECT * FROM `table10` where `完成度`=1 AND(`人1` LIKE '%林%' OR `人2` LIKE '%林%' OR `人3` LIKE '%林%' OR `人4` LIKE '%林%') AND `報修日期` LIKE '%$a%' ";
            $result = mysql_query($str);
            $t3 = mysql_num_rows($result);
            
            $str = "SELECT SUM(`利潤結算`) FROM `table10` where (`人1` LIKE '%洪%' OR `人2` LIKE '%洪%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num55 = mysql_result($result,0);
            $str = "SELECT SUM(`時1`) FROM `table10` where  (`人1` LIKE '%洪%' OR `人2` LIKE '%洪%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($str);
            $num66 = mysql_result($result,0);
            $str = "SELECT * FROM `table10` where `完成度`=1 AND(`人1` LIKE '%洪%' OR `人2` LIKE '%洪%') AND `報修日期` LIKE '%$a%' ";
             $result = mysql_query($str);
            $t4 = mysql_num_rows($result);
            
            
            $strh = "SELECT SUM(`利潤結算`) FROM `table10` where (`人1` LIKE '%黃%' OR `人2` LIKE '%黃%' OR `人3` LIKE '%黃%' OR `人4` LIKE '%黃%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($strh);
            $num77 = mysql_result($result,0);
            $strhh = "SELECT SUM(`時1`) FROM `table10` where  (`人1` LIKE '%黃%' OR `人2` LIKE '%黃%' OR `人3` LIKE '%黃%' OR `人4` LIKE '%黃%') AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($strhh);
            $num88 = mysql_result($result,0);
            $strhc = "SELECT * FROM `table10` where (`人1` LIKE '%黃%' OR `人2` LIKE '%黃%' OR `人3` LIKE '%黃%' OR `人4` LIKE '%黃%')  AND `完成度`='1' AND `報修日期` LIKE '%$a%'";
            $result = mysql_query($strhc);
            $t5 = mysql_num_rows($result);
            
            
            @$denpt=$t+$t2+$t3+$t4+$t5;
            
            $str = "SELECT SUM(`收款金額`) FROM `table10`  WHERE `報修日期` LIKE '%$a%' ";
            $result = mysql_query($str);
            @$all = mysql_result($result,0);
            $str = "SELECT SUM(`利潤結算`) FROM `table10`  WHERE `報修日期` LIKE '%$a%' ";
            $result = mysql_query($str);
            @$numm = mysql_result($result,0);
            $str = "SELECT SUM(`時1`)  FROM `table10` WHERE `報修日期` LIKE '%$a%' ";
            $result = mysql_query($str);
            @$time = mysql_result($result,0);
            $str = "SELECT *  FROM `table10` WHERE `報修日期` LIKE '%$a%' AND `完成度` = 1 ";
            $result = mysql_query($str);
            @$count = mysql_num_rows($result);
            $tt = $num2+$num22+$num44+$num66+$num88;
            
            
            
            
            
            
            
            ?>
            <center><table border=3 style="font-size: 25"><td colspan=7><center><?php echo @$a;?>工程成本分析</td><tr>
                            <td >工程收款金額</td><td colspan=6> <?php echo @number_format($all, 0, '.', ',') . '元' ; ?></td><tr>
                            <td >工程利潤</td><td colspan=6> <?php echo @number_format($numm, 0, '.', ',') . '元' ; ?></td><tr>
                            <td >出工總數</td><td colspan=6> <?php echo @number_format($tt, 1, '.', ',') . '小時'; ?></td><tr>
                            <td >完成案件總數</td><td colspan=6> <?php echo $count.'件'.'(包含共同完成)'; ?></td><tr>
                            <td >完成案件總計</td><td colspan=6> <?php echo $denpt.'件'.'(不包含共同完成)'; ?></td><tr>
                            <td >工作獨力度</td><td colspan=6> <?php echo @number_format(($count/$denpt)*100, 2, '.', ',').'%'.'(完成案件總數/完成案件總計)'; ?></td><tr>
                            <td >負責人</td><td>案件利潤</td><td>出工總數</td><td>完成案件</td><td>銷單時間 </td><td>出工利潤</td><td>績效比</td><tr>
                            <td>李喬維</td>
                            <td><?php echo @number_format($num1, 0, '.', ',') . '元' ; ?></td>
                            <td><?php echo @number_format($num2, 1, '.', ',')."小時" ?></td>
                            <td><?php echo @$t."件" ?></td>
                            <td><?php echo @number_format($num2/$t, 2, '.', ',') . '小時' ; ?></td>
                            <td><?php echo @number_format($num1/$num2, 0, '.', ',') . '元' ; ?></td>
                            <td><?php echo @number_format(($num1/$num2)/312.5, 2, '.', ',')  ; ?></td><tr> 
                            
                            <td>周勁良</td>
                            <td><?php echo @number_format($num11, 0, '.', ',') . '元' ; ?></td>
                            <td><?php echo @number_format($num22, 1, '.', ',')."小時" ?></td>
                            <td><?php echo $t2."件" ?></td>
                            <td><?php echo @number_format($num22/$t2, 2, '.', ',') . '小時' ; ?></td>
                            <td><?php echo @number_format($num11/$num22, 0, '.', ',') . '元'; ?></td>
                            <td><?php echo @number_format(($num11/$num22)/250, 2, '.', ',')  ; ?></td><tr>
                            
                            <td>林暐潔</td>
                            <td><?php echo @number_format($num33, 0, '.', ',') . '元' ; ?></td>
                            <td><?php echo @number_format($num44,1, '.', ',')."小時" ?></td>
                            <td><?php echo $t3."件" ?></td>
                            <td><?php echo @number_format($num44/$t3, 2, '.', ',') . '小時' ; ?></td>
                            <td><?php echo @number_format($num33/$num44, 0, '.', ',') . '元'; ?></td>
                            <td><?php echo @number_format(($num33/$num44)/312.5, 2, '.', ',') ; ?></td><tr>
                            
                            <td>洪愷均</td>
                            <td><?php echo @number_format($num55, 0, '.', ',') . '元' ; ?></td>
                            <td><?php echo @number_format($num66,1, '.', ',')."小時" ?></td>
                            <td><?php echo $t4."件" ?></td>
                            <td><?php echo @number_format($num66/$t4, 2, '.', ',') . '小時' ; ?></td>
                            <td><?php echo @number_format($num55/$num66, 0, '.', ',') . '元'; ?></td>
                            <td><?php echo @number_format(($num55/$num66)/375, 2, '.', ',')  ; ?></td><tr>
                            
                            
                            <td>黃經理</td>
                            <td><?php echo @number_format($num77, 0, '.', ',') . '元' ; ?></td>
                            <td><?php echo @number_format($num88,1, '.', ',')."小時" ?></td>
                            <td><?php echo $t5."件" ?></td>
                            <td><?php echo @number_format($num88/$t5, 2, '.', ',') . '小時' ; ?></td>
                            <td><?php echo @number_format($num77/$num88, 0, '.', ',') . '元'; ?></td>
                            <td><?php echo @number_format(($num77/$num88)/500, 2, '.', ',')  ; ?></td></table>
                    </center>
                    </body>
                    </body>
                    
                    <form method="post" action="adminstateng.php"> 
    依月份查詢
    <input type="month" name ="a" value="<?php echo $a;?>"/>
    依人名查詢
    <select name="cost">
        <option ><?php echo $b = @$_POST["cost"]; ?></option>
        <option value="">全部</option>
        <option>李喬維</option>
        <option>周勁良</option>
        <option>林暐潔</option>
        <option>洪愷均</option>
        <option>黃經理</option>
        
        
         </select>
        <input type="submit" value="確定"
               style="color: #FFFFFF; font-size: 8pt;
               background-color: #000000" />   
        </form>
                    
                    <?php 
                     @$a = $_POST['a'];
                    
                    
                    ?>
                    
                    
                    
                    </html>
                    你好
                    <?php
                    echo $_SESSION['name'] . '    權限:管理者';
                    include("conin.php");
                    @$a = $_POST['a'];
                    @$b = $_POST['cost'];
                   
                     $str = " SELECT `報修日期`,COUNT(*) FROM `table10` WHERE (`人1` LIKE '%$b%' OR `人2` LIKE '%$b%') AND `完成度`=1 GROUP by `報修日期`";
                     $result = mysql_query($str);
                    if (mysql_num_rows($result) > 0) {
                    echo"<center><table border='1'><tr><td>天數</td><td>出工日期</td><td>完成單量</td></tr>";

                    while ($row = mysql_fetch_array($result)) {
                         @$g++;
                    echo "<td>$g</td>";    
                    echo "<td>{$row[0]}</td>";
                    echo "<td width=100>{$row[1]}</td></tr>";
              
            }
                     echo '</table></center>';
                    }
                    
                    
                    
                    $str = "SELECT * FROM `table10` where  (`人1` LIKE '%$b%' OR `人2` LIKE '%$b%') AND `報修日期` LIKE '%$a%' AND `完成度`='1'  order by `報修日期`  ";
                    $result = mysql_query($str);?>
                    <center><font style="font-size: 30;"><?php echo $a?>淂立科技工程部門<?php echo $b?>成本分析</font></center>
                    <?php
                    if (mysql_num_rows($result) > 0) {
                        echo"<center><table border='5'></center>";
                        echo"<hr/><tr><td>項次</td><td>派工日期</td><td>客戶單位</td> <td>專案內容</td><td>出工人員</td><td>花費時間</td><<td>收款金額</td><td>材料成本</td><td>人力成本</td><td>利潤</td></tr>";
                        while ($row = mysql_fetch_array($result)) {
                            $a = "accomplish.php?rnum=" . $row['5'];
                            $b = "update.php?rnum=" . $row['5'];
                            @$f++;
                            
                          
                           
                            //onClick="return confirm('確定要 XXX嗎？『這邊可以加入任何你想跟使用者說的話』');"
                            echo "<tr style='background:$row[9]'><td> $f </td>";
                            echo "<td HEIGHT=80  >{$row[8]}</td>";
                            echo "<td WIDTH=200 style='color:$row[8]'>{$row[3]}</td>";
                            echo "<td HEIGHT=80 WIDTH=300 >{$row[11]}";
                            echo "<br>{$row[12]}</td>"; 
                            echo "<td  >{$row['人1']}";
                            echo "<br>{$row['人2']}";
                            echo "<br>{$row['人3']}";
                            echo "<br>{$row['人4']}</td>";
                             
                            
                            echo "<td   >{$row['時1']}</td>";
                            echo "<td   >{$row[22]}</td>";//$row[22]
                            echo "<td   >{$row['花費成本']}</td>";//$row[23]
                            
                            echo "<td   >{$row['人力成本']}</td>";
                            
                            echo "<td   >{$row[24]}</td></tr>";
                           
                        }

                        echo '</table></center>';
                    }
                     
                     
                     
               
                  
}

