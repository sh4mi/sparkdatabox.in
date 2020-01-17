<!DOCTYPE html>
<html>
<head>
  <title>Spark Databox</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo site_url();?>assets/frontend/bootstrap/css/bootstrap.min.css">
  <link href="<?php echo site_url();?>assets/frontend/fontawesome/css/all.min.css" rel="stylesheet"> <!--load all styles -->
  <link rel="stylesheet" href="<?php echo site_url();?>assets/frontend/css/main.css">
  <link rel="stylesheet" href="<?php echo site_url();?>assets/frontend/css/slick.css">
  <link rel="stylesheet" href="<?php echo site_url();?>assets/frontend/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo site_url();?>assets/frontend/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/modal-video.min.css">
  <script src="<?php echo site_url();?>assets/frontend/bootstrap/js/jquery-3.4.1.min.js"></script>
  <script src="<?php echo site_url();?>assets/frontend/bootstrap/js/popper.min.js"></script>
  <script src="<?php echo site_url();?>assets/frontend/bootstrap/js/bootstrap.min.js"></script>
  
	
</head>
<body>
<?php include_once('header.php'); ?>

<!-- include page -->
<?php
$page_name = $page_name.".php";
include_once($page_name);
?>

<?php include_once("footer.php");?>

<script type="text/javascript" src="assets/frontend/js/slick.min.js"></script>
<script type="text/javascript" src="assets/frontend/js/custom.js"></script>
</body>
</html>