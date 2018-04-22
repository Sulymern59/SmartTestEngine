<?php
include 'lib/Session.php';
include('includes/header.php');
include('includes/menu.php');
?>

<div class="container bg-light-gray">
 <div class="main-content">
 <section>
  <div class="featured-content">
    <div class="row-fluid">
     <div class="addashmain">
	      <h2>Welcome To Admin Dashboard</h2>
	      <h3>Hi, click on the links below to register new users <?php echo Session::get('userusername')?></h3>
		  <label><h4>Student Registration</h4></label> <br>
		        <div class="readmore">
                <button style = "margin-left: 20px"> <a href="register_one.php">Register<i class="fw-icon-chevron-right"></i> </a></button>
                </div>
				<hr>
			 <label><h4>Tutor Registration</h4></label><br>
		        <div class="readmore">
                 <button style ="margin-left: 20px"><a href="register_twice.php">Register<i class="fw-icon-chevron-right"></i> </a></button>
                </div>
	 </div>
	</div>
</div>

<?php 
include('includes/footer.php');
?>