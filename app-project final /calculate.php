<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="mb-5 bg text-center">
    <img src="img/Path 5.png" alt="">
    
    </div>
    
   <div class="mt-4 text-center"><img src="img/Group 717.png" alt=""></div>
    <div id="logreg-forms m">
        <div class="mx-4 ">
        <form class="form-signin " action="data.php" method="post">
            <h1 class="h3 mt-5 font-weight-normal" style="text-align: center"> </h1>
            
            <div class="mx-1">
                <input type="username" name="user" class="form-control  mb-4  " id="inputUser" class="form-control" placeholder="ชื่อ" required="" autofocus="">
                
                <input type="username" name="water" class="form-control mb-4 "id="inputUser" class="form-control" placeholder="น้ำหนัก" required=""autofocus="">
            <input type="username" name="today" class="form-control "id="inputUser" class="form-control" placeholder="ปริมาณที่ต้องดื่มน้ำในเเต่ละวัน" required=""autofocus="">
            </div>
            
          <div class="mt-2 mx-1 ">
            <hr>
            <select class="form-select " aria-label="Default select example" name="time">
  <option selected>ปริมาณน้ำที่ดื่มแต่ละครั้ง</option>
  <option value="100">100 ml</option>
  <option value="150">150 ml</option>
  <option value="200">200 ml</option>
  <option value="250">250 ml</option>
  <option value="300">300 ml</option>
  <option value="350">350 ml</option>
</select>
    </div>        
           <div class="mx-1 mt-4 ">
            <button class=" btn btn-primary w-100 mt-3  "></i>
            <h5>คำนวน</h5>
        </button>
           </div>
           
           
        </div>
            </form>
            
    </div>
   
   

    <script src="script.js"></script>
   
</body>
