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
    $password = md5($_POST["inputPassword"]);
   	$rs=mysql_query("select * from user where username='$username' and password='$password'");
	if(mysql_num_rows($rs)<1)
	{
		$notFound="notFound";
	}
	else
	{
		$_SESSION[login]=$username;

	}
}
?>
<?php
	if(isset($_SESSION[login])){
		$a=0;
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
            <h3 class="form-signin-heading">Please sign in</h3>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" name="inputUsername" class="form-control" placeholder="Username" required autofocus  autocomplete="off">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required  autocomplete="off">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <?php if(isset($notFound)){
            	echo"Invalid username/password";
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

