<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>

<div data-role="page">
  <div data-role="header">
  <h1>复选框</h1>
  </div>

  <div data-role="content">
    <form method="post" action="a.php">
      <fieldset data-role="controlgroup">
        <legend>请选择您喜爱的颜色：</legend>
          <label for="red">红色</label>
          <input type="checkbox" name="c" id="red" value="red">
          <label for="green">绿色</label>
          <input type="checkbox" name="b" id="green" value="green">
          <label for="blue">蓝色</label>
          <input type="checkbox" name="a" id="blue" value="blue">	
      </fieldset>
      <input type="submit" data-inline="true" value="提交">
    
<?
print_r($_POST['b']);   //在勾选号码中随机

echo "<hr>";

print_r($_POST['c']);   //在勾选号码中随机


print_r($_POST['a']);   


?>

</form>

  </div>
</div>

</body>

</html>
