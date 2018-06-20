<!DOCTYPE html>
<html lang="en">
<head>
	<!--meta tags-->
	<meta http-equiv="content-type" content="text/html;charset=UFT-8"/>
	<meta name="keyword" content="monday,monday morning,mondaymorning,mondaymorning nit rourkela,nitr,nit rourkrla" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta name="description" content="Monday Morning is the official Media Body of National Institute Of Technology Rourkela. Monday Morning covers all the events, issues and activities going on inside the campus. Monday morning also serves as a link between the administration and the students"/>
	<meta  name="author" content="jagannath pandit"/>
	<meta http-equiv="refresh" content="3600"/>
	<meta property="og:title" content="Monday Morning - The official student media body of NIT Rourkela, India" />
	<meta property="og:description" content="Monday Morning is the official Media Body of National Institute Of Technology Rourkela. Monday Morning covers all the events, issues and activities going on inside the campus. Monday morning also serves as a link between the administration and the students." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://mondaymorning.nitrkl.ac.in/" />
	<meta property="og:image" content="http://mondaymorning.nitrkl.ac.in/assets/img/cover.jpg" />
	<meta property="og:image:width" content="806" />
	<meta property="og:image:height" content="280" />
	<meta property="fb:app_id" content="800979823283025" />
	<meta property="fb:pages" content="146541445376828" />
     <!--title-->
	<title>Monday Morning - The official student media body of NIT Rourkela</title>
	<!--link files for bootstarp-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" href="bootstrap.min.js"></script>
    <script type="text/javascript" href="bootstrap.min.js"></script>
    <script  type="text/javascript" href="jquery.js"></script>
  
     <style type="text/css">
    	#header
       {

         height:330px;
        padding-top: 0px;
       background-size: cover;
       background-image:url("<?php echo base_url('asests/images/')?>header.jpg");
       margin-right: auto;
       margin-right: auto;
       display: none;
       }
    </style>
  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asests/css/Mmsummertask2018.css');?>">
    
    <link rel="shortcut icon" href="../_static/ci-icon.ico"/>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="main">
<header class="row" id="header">
<div class=" logo col-lg-6">
		<button id="modalbtn" class="button"><font style="color: white;">Login *</font></button>
<div class="modal" id="samplemodal">
    <div class="modal-content">
        
    <div class="container">
            
    <h1>Wellcome to the signin page</h1><br>
    <div class="form" >
    	 <?php if($feedback=$this->session->flashdata('login failed')) :
	 ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible-danger ?>">
            <?=$feedback ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
    	<span class="closeBtn" id="closeBtn">&times;</span>
      <?php echo form_open('login/admin_login',['class'=>'form']) ?>
        <label>Username</label><br>
       
       <input type="text" name="username" placeholder="username" required><br>
       
         <label>Password</label><br>
         <input type="password"  name="password" placeholder="password" required>
        
        <br>
         <br>
         <input type="submit" value="signin">
     <?php echo form_close();?>
         
    </div>
    </div>
    
</div>



	</div>
	<!--start of menu-->


		<button id="rmodalbtn" class="rbutton"><font style="color: white;">Resister *</font></button>
<div class="rmodal" id="rsamplemodal">
    <div class="rmodal-content">
        
        <div class="rcontainer">
          
    <h1>Wellcome to the signup page</h1><br>
    <div class="rform" >
    	 <?php if($feedback=$this->session->flashdata('resistration')) :
       	 ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible-info ?>">
            <?=$feedback ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
    	 <span class="rcloseBtn" id="rcloseBtn">&times;</span>
       <?php echo form_open('Login/resistration')?>
	      <label>Username</label><br>
         <input type="text" name="username" placeholder="Username" required><br>
		 <label>Password</label><br>
         <input type="password" name="password" placeholder="Password" required><br>
         <label>Mobileno</label><br>
         <input type="text" name="mobileno" placeholder="Mobileno" required><br>
         <label>Email</label><br>
         <input type="Email" name="email" placeholder="Email" required><br>
         <label>Image</label><br>
         <input type="file" name="image" placeholder="Image" required><br>
         <br>
         <input type="reset" value="reset" name="reset">
         <input type="submit" value="signup" name="submit">
    <?php form_close();?>
         
    </div>
    </div>
    
</div>



	</div>
      <!--end of first menu-->
      

      <!--end of first menu-->
       <script type="text/javascript" src="<?php echo base_url('asests/js/')?>mm.js"></script>
</header>
<div class="row secondheader" style="border-bottom: solid 1px black;">
 <nav class="header2 row " style="background:transparent; ">
	<div class="new col-lg-10" id="navlist">
			<ul >
				<li><a href="<?= base_url('login');  ?>"><b><i class="fa fa-home" aria-hidden="true"></i>Home</B></a></li>
				<li id="megamenu"><a href="#"><b>Department</b></a>
				<ul class="subnavlist">
						<li><a href="#">Biotechnology and Biomedical Engineering </a></li>
						<li><a href="#">Ceramic Engineering</a></li>
						<li><a href="#">Chemical Engineering</a></li>
						<li><a href="#">Civil Engineering</a></li>
						<li><a href="#">Computer Science and Engineering</a></li>
						<li><a href="#">Department of Chemistry</a></li>
						<li><a href="#">Department of Humanities</a></li>
						<li><a href="#">Department of Life Science</a></li>
						<li><a href="#">Department of Mathematics</a></li>
						<li><a href="#">Department of Physics</a></li>
						<li><a href="#">Electrical Engineering </a></li>
						<li><a href="#">Electronics and Communication Engineering </a></li>
						<li><a href="#">Food Process Engineering </a></li>
						<li><a href="#">Industrial Design </a></li>
						<li><a href="#">Mechanical Engineering </a></li>
						<li><a href="#">Metallurgical and Materials Engineering </a></li>
						<li><a href="#">Mining Engineering </a></li>
						<li><a href="#">Planning and Architecture </a></li>
						<li><a href="#">School of Management </a></li>
						<li><a href="#">Department of Earth and Atmospheric Sciences </a></li>
					</ul>
				</li>
				<li><a href="#"><b>Campus</b></a>
					<ul class="subnavlist2">
						<li><a href="#">Campus Buzz</a></li>
						<li><a href="#">Clubs</a></li>
						<li><a href="#">Halls</a></li>
						<li><a href="#">Sports</a></li>
						<li><a href="#">Fests</a></li>
						<li><a href="#">Wits-Dom</a></li>	
					</ul>
				</li>
				<li><a href="#"><b><i class="fa fa-eye" aria-hidden="true"></i>Views</B></a>
					<ul class="subnavlist3">
						<li><a href="#">Sac Speaks</a></li>
						<li><a href="#">Interview</a></li>
						<li><a href="#">The CGPA</a></li>
						<li><a href="#">Student Pulse</a></li>
						<li><a href="#">Poll Analysis</a></li>
						<li><a href="#">Discussion</a></li>
						<li><a href="#">Citizen Journalist</a>
						<li><a href="#">Forum</a></li>
					</ul>
				</li>
				<li><a href="#"><b>Career</b></a>
				<ul class="subnavlist4">
						<li><a href="#">Placements</a></li>
						<li><a href="#">Recruitment feedback</a></li>
						<li><a href="#">Recruitment Feedback Database</a></li>
						<li><a href="#">Placement Database</a></li>
						<li><a href="#">Internships</a></li>
						<li><a href="#">Internship Database</a></li>
						<li><a href="#">Share Your Intern</a>
					</ul>
				
				</li>
				<li><a href="#"><b>Alumni</b></a>
				<ul class="subnavlist5">
						<li><a href="#">Interview</a></li>
						<li><a href="#">Happenings</a></li>
						<li><a href="#">Find Your Alumni</a></li>
						<li><a href="#">NITRAA Executive Council</a></li>
					</ul>
				</li>
				<li><a href="#"><b>CD&CWC</b></a>
				<ul class="subnavlist6">
						<li><a href="#">Director's Desk</a></li>
						<li><a href="#">Chief Warden's Column</a></li>
					</ul>
				</li>
				<li><a href="#"><b><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</b></a>
				<ul class="subnavlist7">
						<li><a href="#">Fests</a></li>
						<li><a href="#">Institute Event</a></li>
						<li><a href="#">Others</a></li>
						<li><a href="#">Videos</a></li>
					</ul>
				</li>
				<li><a href="#"><b><i class="fa fa-info-circle" aria-hidden="true"></i>info</b></a>
				<ul class="subnavlist8">
						<li><a href="#">Communication Directory</a></li>
						<li><a href="#">Health and Emergency</a></li>
						<li><a href="#">Student Activity Center</a></li>
						<li><a href="#">Halls Of Residence</a></li>
						<li><a href="#">Blood Group Database</a></li>
						<li><a href="#">Magazines</a></li>
						<li><a href="#">Know the team</a>
						<li><a href="#">Priject Adamantium</a>
					</ul>
				</li>
				<li><a href="#"><b><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Live</b></a></li>
			</ul>
 </div>
		
   <div class="search  search-box-wrapper col-lg-2 col-xs-8">
		<form action="#" method="post">
		<div class="col-lg-10">
		<input type="text" class="search-box-input" placeholder="Search articles" name="search">
		</div> 
		<div class="col-lg-2">
		<button type="submit" class="search-box-botton">&#128269;</button>
	    </div>
		</form>
	</div>		
 </nav>  
</div>
 <div class="mainbody">
 	<?php 
    if($test=$this->session->flashdata('test')) :
       $test_class=$this->session->flashdata('test_class');
     ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible <?=$test_class; ?>">
            <?=$test ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
 	<div class="row upperpart" style="margin-left: 70px;">
 		<?php echo form_open('login/test_result') ?>
 		 <div class="detail" style="text-align: center;">
 		 	<h1>Enter Your Detail Here</h1><br>
 		 	Name : <input type="text" name="name" placeholder="Enter Your name"  required><br>
 		 	<br>
 		 	Emial : <input type="email" name="email" placeholder="Enter Your email"  required><br>
 		 	<br>
 		 	Mobile no : <input type="bigint" name="mobileno" placeholder="Enter Your Mobile no"  required><br>
 		 	<br>
 		 	Date : <input type="date" name="date"  required><br>


 		 </div>
 	           	 <hr>
 		
	                 	<?php 
	                   $j=0;
	                 	foreach($questions as $question) :
                        
                        ++$j ;
	                 	?>
	                    <p><strong><?php echo $j ?>. <?php echo $question->question  ?></strong></p>
	          
	         <?php $radio1=array(
	                  'name'=>'q'.$j,
	                  'value'=>$question->option1
	                 );
	                 $radio2=array(
	                  'name'=>'q'.$j,
	                  'value'=>$question->option2 
	                 );
	                 $radio3=array(
	                  'name'=>'q'.$j,
	                  'value'=>$question->option3
	                 );
	                 $radio4=array(
	                  'name'=>'q'.$j,
	                  'value'=>$question->option4
	                 );?>
	             <?php echo form_radio($radio1);?><?php echo $question->option1  ?><br>
	             <?php echo form_radio($radio2);?><?php echo $question->option2  ?><br>
	             <?php echo form_radio($radio3);?><?php echo $question->option3  ?><br>
	             <?php echo form_radio($radio4);?><?php echo $question->option4  ?><br>   
	                 	 <br>
	                 <?php   endforeach; ?>
	                 <br>
              <?php echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default'])  ?>

              <?php echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary'])  ?>
              
	          <?php echo form_close(); ?>
 	
 </div>
 <!--end of main body-->
	<!--END FOOTER-->
	</div>
	<!--END CONTAINER-->
<!--end of footer-->
</div><!--end of main-->
</body>
</html>