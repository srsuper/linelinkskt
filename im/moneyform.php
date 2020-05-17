<?php $userid = $_GET['userid'] ; ?>
<?php 
include("mycon.php");
$sql = "SELECT * FROM moneyuser WHERE userid = '$userid'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
if($userid === $row['userid']){
    header("location:moneyform-end.php?success=1");
}
}
?>
<html>
    <head>
        <title>記帳小助手基本資料填寫</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<center><h1>記帳小助手</h1></center>
<form action="moneyform-end.php" method="post">
    <div class="container">
         <div class="form-group">
      <label for="usr">userid</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $userid ;?>" readonly="readonly" name="userid">
    </div>
    <div class="form-group">
      <label for="usr">暱稱</label>
      <input type="text" class="form-control" id="usr" name="nickname">
    </div>
    <div class="form-group">
      <label for="pwd">Email</label>
      <input type="text" class="form-control" id="pwd" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">性別</label>
      <select class="form-control" id="sel1" name="sex">
        <option value="男">男</option>
        <option value="女">女</option>
      </select>
    </div>
    <center> <input type="submit" class="btn btn-primary" value="填寫完成"></input></center>
  </form>
  </div>
    </body>
    
</html>