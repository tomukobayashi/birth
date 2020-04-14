<?php
//POSTされてきたデータを取得
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
// var_dump($user_name); //エラーを見つける用のコード、文字などの表示　
//  var_dump($hobby);//エラーを見つける用のコード、文字などの表示　
?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>
<body>
<h1>誕生日登録ページ</h1>
    <p><?php echo $year?>年<?php echo $month?>月<?php echo $day?>日</p>
    <p>登録完了しました。</p>

    <br>
    <a href="./birth.php">トップへ戻る</a>
    </body>
</html>