<?php
include 'includes/common.php';
$select="SELECT * FROM transfer";
$select_query=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Sparks Foundation Bank</title>
</head>

<body style="background-color: #ADD8E6;">

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

<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 100px; color: black;">History</h2>
<br>

<div class="col-md-offset-2 col-md-8">
    <table class="table" style="background-color: #007FFF;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
    <tbody>

<?php 
while($row=mysqli_fetch_assoc($select_query)){
?>

    <tr style="color: black">
        <td ><?php echo $row['sid'] ?></td>
        <td ><?php echo $row['sender']?></td>
        <td ><?php echo $row['receiver']?></td>
        <td ><?php echo $row['amount']?></td>
    </tr>
<?php
}
?>
    </tbody>
</table>

</div>
</div>
</div>
<div>

<br><br><br><br>

<?php
include 'includes/footer.php';
?>
</div>

</body>
</html>