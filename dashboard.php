<?php
  session_start();
//  ini_set('display_errors', 'On');
//  error_reporting(E_ALL);
  $title="Home";
  include("includes/header.php");
  include("includes/nav.php");
  ?>
<?php 
	if(!isset($_SESSION[login])){
		header('Location: index.php');
		exit;		
	}
?>
  <div class="container-fluid text-center">
    <div class="row content">
      <?php include("includes/sidenav.php");?>
      <div class="col-sm-8 text-left">
        
      </div>
      <?php
      include("includes/ads.php");
      ?>
    </div>
  </div>
<?php
  include("includes/footer.php");
?>

