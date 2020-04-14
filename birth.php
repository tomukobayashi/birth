<html>
<body>
<h1>生年月日を入力するフォームを作ろう</h1>

<form action="./complete.php" method="POST">
<label for="year">西暦</label>
<select name="year" id="year">
<?php
    $now =  date('Y');
    for($i = 1956;$i<= $now;$i++){
?>
<option value ="<?php echo $i ?>"><?php echo $i ?></option>
    <?php }?>
</select>年

<br>
<select name="month" id="month">
<?php
    for($mon = 1;$mon<= 12;$mon++){
?>
<option value ="<?php echo $mon ?>"><?php echo $mon ?></option>
    <?php }?>
</select>月

<select name="day" id="day">
<?php
    for($day = 1;$day<= 31;$day++){
?>
<option value ="<?php echo $day ?>"><?php echo $day ?></option>
    <?php }?>
</select>日

<br>
<input type="submit" value="送信">
</form>
</body>
</html>