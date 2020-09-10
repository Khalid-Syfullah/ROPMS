<?php include 'infoserver-teacher.php'; ?>
<html>
<head><title>Teacher Profile></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="assets-profile/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="assets-profile/bootstrap.min.js"></script>
		<script src="assets-profile/query-1.11.1.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/w3.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body class="subpage">
	<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><i class="fa fa-spinner w3-spin" style="font-size:24px"></i><strong>InfoDesk</strong> RUET</a>
					
					<nav id="nav">
						<a href="index.php">Go Back</a>						
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
<footer id="footer" style="color: #3c3c3c">
<div class="inner" id="goinfo">
	<div class="row">
        
	<div class="col-md-7 " style="margin: 0% 20%;width: 60%;">

	 <div class="panel panel-default">
	 
	  <div class="panel-heading">  <h4 >Teacher Profile</h4></div>
	  
	    <div class="panel-body">
       
		  <div class="box box-info">
        
            <div class="box-body">
                <div class="col-sm-6">
                     <div  align="center">
					 <img alt="User Pic" <?php echo 'src=images/'.$Mobile.'.jpg';?> id="profile-image1" class="img-circle img-responsive"> 
					 </div>
					<br>
					<!-- /input-group -->
				</div>
				<div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo $Fullname;?> </h4></span>
              <span><p><?php echo $Designation;?></p></span>            
            </div>
			<div class="clearfix"></div>
            
            

			<div class="col-sm-5 col-xs-6 tital " >Full Name:</div><div class="col-sm-7 col-xs-6 "><?php echo $Fullname;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Department:</div><div class="col-sm-7"> <?php echo $Department;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Position Held:</div><div class="col-sm-7"> <?php echo $Position_Held;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Date of Joining:</div><div class="col-sm-7"> <?php echo $Date_of_Joining;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Mobile:</div><div class="col-sm-7"><?php echo $Mobile;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?php echo $Email;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Educational Background:</div><div class="col-sm-7"><?php echo $Educational_Background;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Research Interest:</div><div class="col-sm-7"><?php echo $Interest;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Awards/Scholarships:</div><div class="col-sm-7"><?php echo $Awards_Scholarships;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Professional Experiences:</div><div class="col-sm-7"><?php echo $Professional_Experiences;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Research Publications:</div><div class="col-sm-7"><?php echo $Research_Publications;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Religion:</div><div class="col-sm-7"><?php echo $Religion;?></div>
			<div class="clearfix"></div>
			<br>
			<div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7"><?php echo $Nationality;?></div>
			<div class="clearfix"></div>
			<br>
			</div>
        <!-- /.box -->

    </div>
       
            
    </div> 
   </div>
  </div>  

   </div>
</div>
</footer>
</body>
</html>



         