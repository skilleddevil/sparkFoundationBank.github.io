<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sparks Bank</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ADD8E6;">

<nav class="navbar navbar-fixed-top " style="background-color:#363636;">
  <div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <a class="navbar-brand" style="color: white;">Sparks Foundation Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="nav navbar-nav navbar-right" >
            <li ><a href = "index.html" style="color: #007FFF;"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="user.php" style="color: #007FFF;"><span class="glyphicon glyphicon-user"></span> New Users</a></li>
            <li><a href="transaction.php" style="color: #007FFF;"><span class="glyphicon glyphicon-transfer"></span> Transfer Money</a></li>
            <li class="active"><a href="history.php" style="color: #007FFF;"><span class="glyphicon glyphicon-inbox"></span> History</a></li>
        </ul>
    </div>
  </div>
</nav>


<div class="container ">
<div class="row ">
<br>
<h2 class="sign text-center" style="margin-top: 100px; color: black;">CREATE</h2>
<br>
<div class="col-sm-offset-4 col-sm-6 col-md-5 ">
<form method="POST" action="user_script.php" >
<div class="form-group">
<label for="name" style="color: white;">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="email" style="color: white;">Email</label>
<input type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="balance" style="color: white;">Balance</label>
<input type="number" class="form-control" step="0.01" name="balance" placeholder="Balance" required>
</div>
<button class="btn btn-danger">Submit</button>
</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div>

<br><br><br><br>

<?php
include 'includes/footer.php';
?>
</div>
</body>
</html>
