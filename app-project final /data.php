<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login มาแล้วจ้า</title>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<link rel="stylesheet" href="style1.css">

</head>
<body>
<div class="mb-5 bg text-center">
    <img src="img/Path 5.png" alt="">
    
    </div>
<div id="lg">

    <div class="text-center lg">
<?php
   echo $_POST["user"];
   echo "<br>";
   echo "คุณต้องดื่มน้ำ = ".$_POST["today"];
   echo "<br>";
   $today=$_POST['today'];   
   $time=$_POST['time'];
  
  
   $sum=$today / $time;
  
   
   echo "คุณต้องดื่มน้ำ ".$sum." ครั้ง (ต่อวัน)";
    
?>
</div>
</div>

    
</body>
</html>