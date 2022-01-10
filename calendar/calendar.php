<?php
  ini_set('display_errors',1);
  date_default_timezone_set('Asia/Tokyo');

  if( isset($_GET['year']) ){
    
    $y_current = date("Y", mktime( 0, 0, 0, $_GET['month'], 1, $_GET['year'] ));
    $m_current = date("m", mktime( 0, 0, 0, $_GET['month'], 1, $_GET['year'] ));
    
  }
  else{
    $y_current = date("Y");
    $m_current = date("m");
  }

  $date_current = mktime( 0, 0, 0, $m_current, 1, $y_current );
  $week = date("w", $date_current );
  $start_week = ($week + 6 )% 7;
  $start_day = mktime( 0, 0, 0, date("m", $date_current), date("d", $date_current)- $start_week, date("Y", $date_current));
?>



<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <head>
  <title>テーブル クリックしたセルの行位置,列位置,内容の取得</title>
<style type="text/css">
<!--
#TBL{
  border-collapse: collapse;
 }
#TBL th,td{
  width : 170px;
  cursor: hand;
  padding:5px;
 }
#Div{
  border: 1px ridge fuchsia;
  width : 380px;
  padding : 10px;
}

.sunday{
  color:red;
}

.saturday{
  color:blue;
}
.weekday{
  color:black;
}
.otherday{
  color:gray;
}
-->
</style>

<script language="javascript">
function getCELL() {
    //getElementByIdは、任意のHTMLタグで指定したIDにマッチするドキュメント要素を取得するメソッド
    //
 var myTbl = document.getElementById('TBL');
    // trをループ。rowsコレクションで,行位置取得。
　for (var i=0; i<myTbl.rows.length; i++) {
     // tr内のtdをループ。cellsコレクションで行内セル位置取得。
   for (var j=0; j<myTbl.rows[i].cells.length; j++) {
var Cells=myTbl.rows[i].cells[j]; //i番行のj番列のセル "td"
　       // onclickで 'Mclk'を実行。thisはクリックしたセル"td"のオブジェクトを返す。
　　 Cells.onclick =function(){Mclk(this);}
　  }
　 }
　}
function Mclk(Cell) {
 var rowINX = '行位置：'+Cell.parentNode.rowIndex;//Cellの親ノード'tr'の行位置
 var cellINX = 'セル位置：'+Cell.cellIndex;
 var cellVal = 'セルの内容：'+Cell.innerHTML;
　　　　　　　　//取得した値の書き出し
     res=rowINX + '<br/> '+ cellINX + '<br/>' + cellVal;
      document.getElementById('Mbox0').innerHTML=res;
       var Ms1=document.getElementById('Mbox1')
        Ms1.innerText=Cell.innerHTML;
        Ms1.textContent=Cell.innerHTML;
    }
      // try ～ catch 例外処理、エラー処理
      // イベントリスナーaddEventListener,attachEventメソッド
try{
 window.addEventListener("load",getCELL,false);
     }catch(e){
   window.attachEvent("onload",getCELL);
  }
</script>
</head>

<body>

<?php
  echo $y_current ."年  " . $m_current . "月";
?>

<table border="1" id="TBL">
  <tr>
    <th><p class="weekday">月</p></th>
    <th><p class="weekday">火</p></th>
    <th><p class="weekday">水</p></th>
    <th><p class="weekday">木</p></th>
    <th><p class="weekday">金</p></th>
    <th><p class="saturday">土</p></th>
    <th><p class="sunday">日</p></th>
  </tr>

  <?php
    for( $i=0 ; $i<6 ; $i++ ){
      echo "<tr>";
      for( $j=0 ; $j<7 ; $j++ ){
        echo "<td>";
        if( ( ($i == 0 ) && ( ( date("d", mktime( 0, 0, 0, date("m", $start_day ), (date("d",$start_day )+ $i*7+$j), date("y",$start_day) ) ) )  > 7 ) )
        || ( ( $i > 3 ) && ( ( date("d", mktime( 0, 0, 0, date("m", $start_day ), (date("d",$start_day )+ $i*7+$j), date("y",$start_day) ) ) ) < 15 ) )  )
          echo '<p class="otherday">';
        elseif( $j == 5)
          echo '<p class="saturday">';
        elseif( $j == 6)
          echo '<p class="sunday">';
        else
          echo '<p class="weekday">';
        echo date("d", mktime( 0, 0, 0, date("m", $start_day ), (date("d",$start_day )+ $i*7+$j), date("y",$start_day) ) ) . "</p></td>";
  }
  echo "</tr>";
 }
 ?>
</table>

<?php echo '<a href="calendar.php?year=' . date("Y" ,mktime( 0, 0, 0, $m_current -1 , 1 , $y_current ) ) . '&month=' . date("m", mktime( 0, 0, 0, $m_current -1 , 1 , $y_current ) ) .  '">'; ?> [前月] </a>

<?php echo '<a href="calendar.php?year=' . date("Y" ,mktime( 0, 0, 0, $m_current +1 , 1 , $y_current ) ) . '&month=' . date("m" , mktime( 0, 0, 0, $m_current +1 , 1 , $y_current )) .  '">'; ?> [次月] </a>



  <br>
<div id="Div"><p id="Mbox0">セルをクリックしたらここに書き出します。</p>
 <p id="Mbox1">インデックス値は '0'から始まります。</p>
</div>
<br>
</body>
</html>

