<?php
  session_start();
//  ini_set('display_errors', 'On');
//  error_reporting(E_ALL);
  $title="Home";
  include("includes/header.php");
  include("includes/nav.php");
  ?>
<?php 
	if($_SESSION[login]){
		header('Location: dashboard.php');
		exit;		
	}
?>
  <div class="container-fluid text-center">
    <div class="row content">
      <?php include("includes/sidenav.php");?>
      <div class="col-sm-8 text-left">
        <h1>Welcome to Expense Management System</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <hr>
        <h3>Test</h3>
        <p>Lorem ipsum...</p>
      </div>
      <?php
      include("includes/ads.php");
      ?>
    </div>
  </div>
<?php
  include("includes/footer.php");
?>

