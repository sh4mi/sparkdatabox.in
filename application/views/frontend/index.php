<!DOCTYPE html>
<html>
<head>
  <?php
    if($page_name == 'home')
    {
      $seo = $this->crud_model->get_page_seo(1)->row_array();
    }
    else if($page_name == 'course_page')
    {
      $seo = $this->crud_model->get_course_seo($course['id'])->row_array();
    }
  ?>
  <title><?php echo $seo['title'];?></title>
  <meta name="description" content="<?php echo $seo['description'];?>" />
    <meta name="keywords" content="<?php echo $seo['keywords'];?>"/>
    <meta name="og:title" content="<?php echo $seo['title'];?>"/>
    <meta name="og:url" content="https://sparkdatabox.in/"/>
    <meta name="og:description" content="<?php echo $seo['description'];?>"/>
    
  <meta name="og:type" content="online training website"/>
  <meta name="author" content="Spark databox" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/bootstrap/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/frontend/fontawesome/css/all.min.css" rel="stylesheet"> <!--load all styles -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/modal-video.min.css">
  <script src="<?php echo base_url();?>assets/frontend/bootstrap/js/jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/bootstrap/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/slick.min.js"></script>
  <link rel="stylesheet" href="<?php echo site_url('assets/frontend');?>/country/css/intlTelInput.css">
<script src="<?php echo site_url('assets/frontend');?>/country/js/intlTelInput-jquery.min.js"></script>
  
	
</head>
<body>
 <script type="text/javascript">
      var baseURL = "<?php echo base_url(); ?>";
    </script>
<?php include_once('header.php'); ?>

<!-- include page -->
<?php
$page_name = $page_name.".php";
include_once($page_name);
?>

<?php include_once("modal.php");?>
<?php include_once("footer.php");?>


<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/custom.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e53e230298c395d1ce983cd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>