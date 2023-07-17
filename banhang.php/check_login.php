<?php

if(!empty($_POST)){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $connect = new mysqli("localhost","root","123456","banhang");
     
    if($connect->connect_error){
        var_dump(   $connect->connect_error);
        die();
    }
$query="SELECT * FROM users WHERE EMAIL='$email' AND PASSWORD='$password'";
$result=mysqli_query($connect,$query);
$data=array();
while($row= mysqli_fetch_array($result,1)){
    $data[]=$row; 
}
if($data !=null && count($data)>0){
    header('Location: products.php');
}

}





?>
<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="post">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Signin Form </h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="nhap vao email cua ban">
				</div>
				
				<div class="form-group">
				  <label for="password">Password:</label>
				  <input required="true" type="password" class="form-control" id="passworde" name="password" placeholder="nhap vao mat khau cua ban">
				</div>
				
				<button class="btn btn-success">Dang nhap</button>
			</div>
		</div>
	</div>
    </form> 
</body>
</html>