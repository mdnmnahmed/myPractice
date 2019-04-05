<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coding Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

         <!--CDN Links 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

		<!-- -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/Boostrap 4.0.css">
    <script src="assets/jQuery.js"></script>
        <!--My Css-->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/style.css">
        
</head>
<body>

  <div class="container text-center col-12" id="header">Coding Test<a href="adminlogin.php"><h6 style="text-decoration: inline;float: right;">Admin</h6></a></div>
  <br>

<div id="sform">
  <div class="container col-lg-6">
    <h2 class="text-center text-danger">SignUp</h2>
    <form action="" method="post">
        *Name:<input type="text" name="name" class="form-control" required><br>
        *Email:<input type="email" name="email" class="form-control" required><br>
        *Password:<input type="Password" name="password" class="form-control" required><br>
        College Name:<input type="text" name="college" class="form-control"><br>
        Course:<input type="text" name="course" class="form-control"><br>
        <button class="btn btn-primary" type="submit" name="submit">SignUp</button> or <a href="LogIn.php">LogIn</a>
    </form>
  </div>
</div>
</body>
</html>
