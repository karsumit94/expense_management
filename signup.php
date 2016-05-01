<?php
  session_start();
  
//  ini_set('display_errors', 'On');
//  error_reporting(E_ALL);
  require("includes/db.php");
  $title="Login";
  include("includes/header.php");
  include("includes/nav.php");
?>
<?php
if(isset($_POST["inputUsername"])){
	$username = $_POST["inputUsername"];
	if($_POST["inputPassword"]== $_POST["inputRPassword"]){
    	$password = md5($_POST["inputPassword"]);
   		$sql="INSERT INTO user(username, password) VALUES ('$username' ,'$password')";
		if ($con->query($sql) === TRUE) {
    		$_SESSION[login]=$username;
		} else {
    		$error = " Database Error";
		}
	} else {
		$error = "Passwords didn't match...";
	}
}
?>
<?php
	if(isset($_SESSION[login])){
	  	header('Location: dashboard.php');
		exit;			
	}
?>


 <div class="container-fluid text-center">
    <div class="row content">
      <?php include("includes/sidenav.php");?>
      <div class="col-sm-8 text-left">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        	<p class="space"></p>
           <form name="login"  method="POST" action="" class="form-signin">
            <h3 class="form-signin-heading">Sign up</h3>
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" name="inputUsername" class="form-control" placeholder="Username" required autofocus  autocomplete="off">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required  autocomplete="off">
            <label for="inputRPassword" class="sr-only">Repeat Password</label>
            <input type="password" name="inputRPassword" class="form-control" placeholder="Password" required  autocomplete="off">
            <p></p>
            <?php if(isset($error)){
            	echo $error;
            }?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
      </div>
      <?php
      include("includes/ads.php");
      ?>
    </div>
  </div>
<?php
  include("includes/footer.php");
?>

