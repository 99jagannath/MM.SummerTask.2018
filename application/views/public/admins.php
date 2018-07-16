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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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
	<div class="col-md-5">
		
	<div class="dropdowns" style="margin-left: 5%;margin-top: 3%;">
    <button class="dropbtns" ><?php echo $this->session->userdata('username') ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contents" id="myDropdowns">
     <button><a href="<?= base_url('login/logout');  ?>">logout *</a></button>
     <button><a href="<?= base_url('admin/jaga');  ?>">Admin Pannel *</a></button>
    </div>
  </div> 
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
         <input type="submit" value="login">
     <?php echo form_close();?>
        	<div class="modal-footer">
			    	<p><a href="#rmodal" data-toggle="modal" id="Resister" style="color: white;">Not a member?</a></p>
			 	</div> 
    </div>
    </div>
    
</div>



	</div>
	<!--start of menu-->


		
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
	      <label>UserName</label><br>
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
         <input type="submit" value="Resister" name="submit">
    <?php form_close();?>
         
    </div>
    </div>
    
</div>



	</div>

</div>
<div class="col-md-7">
	<nav class="navbar navbar-default navbar-fixed-right" style="background-color: transparent;border-style: none;">
	<div class="container-fluid">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mm">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse" id="mm">
			<ul class="nav navbar-nav b" style="margin-top: 15px;">
				<li class="l"><a href="#"><font color="white">home *</font></a></li>
				<li class="l"><a href="#"><font color="white">issue *</font></a></li>
				<li class="l"><a href="#"><font color="white">about *</font></a></li>
				<li class="l"><a href="#" id="contact" class="contact"><font style="color: white;">contact *</font></a></li>
				<li class="l"><a href="#" id="rmodalbtn" class="rbutton"><font style="color: white;" type="hidden">Resister *</font></a></li>
				<li class="l"><a href="#" id="modalbtn" class="button"><font style="color: white;" type="hidden">Login *</font></a></li>
				<li class="l"><a href="#" style="color: white;" class="button" ><i class="fa fa-facebook-f" style="color: white; font-size:24px"></i></a></li>
				<li class="l"><a href="#" style="color: white;" class="button" ><i class="fa fa-twitter" style="color: white; font-size:24px"></i></a></li>
				<li class="l"><a href="#" style="color: white;" class="button" ><i class="fa fa-linkedin" style="color: white; font-size:24px"></i></a></li>
			</ul>
		</div>
	</div>
	
</nav>

</div>
      <!--end of first menu-->
      
</header><!-- menu-->
     <nav class="navbar navbar-inverse navbar-static-top nav-pills nav-stacked-top" data-spy="affix" data-offset-top="390" role="navigation" style="background-color:white;opacity: 1;border: 0.5px black;width: 100%;margin-left: 0px;">
<div class="row secondheader">
 <nav class="header2 row " style="background:transparent;">
	<div class="new col-lg-10 " id="navlist">
			<ul >
				<li><a href="<?= base_url('login');  ?>" ><b><i class="fa fa-home" aria-hidden="true"></i>Home</b></a></li>
				<li id="megamenu" style="width: 130px;"><a href="#"><b>Department</b></a>
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
				<li><a href="#"><b>Views</b></a>
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
				<li><a href="#"><b>Gallery</b></a>
				<ul class="subnavlist7">
						<li><a href="#">Fests</a></li>
						<li><a href="#">Institute Event</a></li>
						<li><a href="#">Others</a></li>
						<li><a href="#">Videos</a></li>
					</ul>
				</li>
				<li style="width: 70px;"><a href="#"><b>info</b></a>
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
				<li style="width: 70px;"><a href="#"><b>Live</b></a></li>
			</ul>
 </div>
		
  <div class="search  search-box-wrapper col-lg-2 col-xs-8">
		<form action="#" method="post" name="myform" novalidate>
		
		<input type="text" class="search-box-input" placeholder="Search articles" name="search">
		
		
		<button type="submit" class="search-box-botton">&#128269;</button>
	   
		</form>
	</div>		

 </nav>  
</div>
</nav>
 <div class="mainbody" style="height: auto; width: auto;">
 	<div class="row upperpart">
 		<div class="posts col-md-9 col-sm-12">
 			<div class="row"><!--feature post-->
                <div class="col-lg-7">
	               
<div class="container" style="max-width:  570px";>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <?php 
     $no=count($carosel);  ?>
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php for($i=1;$i<$no;$i++): ?>
      <li data-target="#myCarousel" data-slide-to=$i></li>
      <?php endfor; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="max-width:  571px";>
      <?php 
       $j=1;
       foreach ($carosel as $item ): 
     
       if($j==1):
      ?>  
      <div class="item active" style="max-width:  570px";>
        <a href="<?php echo base_url()?>login/comment/<?php echo $item->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $item->image ?>" alt="Los Angeles" style="max-width:  570px;"></a>
        <div class="carousel-caption" >
          <h1 ><a href="<?php echo base_url()?>login/comment/<?php echo $item->id ?>" style="color: white;"><?= $item->title ?></a></h1>
          <h3><?= $item->tag ?></h3>
        </div>
      </div>
    <?php 
     $j++;
 		else:
    ?>

      <div class="item">
        <a href="<?php echo base_url()?>login/comment/<?php echo $item->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $item->image ?>" alt="Chicago" style="max-width: 570px;"></a>
        <div class="carousel-caption">
          <h1><a href="<?php echo base_url()?>login/comment/<?php echo $item->id ?>" style="color: white;"><?= $item->title ?></a></h1>
          <h3><?= $item->tag ?></h3>
        </div>
      </div>
    <?php  
     endif;
 endforeach;
    ?>
     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
                 </div>
                 <div class="col-lg-5">
             
                 	<a href="<?php echo base_url()?>login/comment/<?php echo $mainpost->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $mainpost->image ?>" style="max-width: 380px;"></a>
                 	<div class="info">
 						<p class="tag thumbnail"><?php echo $mainpost->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $mainpost->id ?>" style="color: black;"><?php echo $mainpost->title ?></a></h1>
 						<p class="detail"><?php echo $mainpost->date ?> | <?php echo $mainpost->author ?></p>
 						<p class="text"><?php echo $mainpost->body ?></p>
 						<ul class="counters list-inline">
										<li>

											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($mainpostc) ?></a>
										</li>
									</ul>
 					</div>
 		
                 </div>  
                 



 			</div><!--end of feature post-->
 			<div class="row"><!--news-->
 				<article class="col-md-4 col-sm-4 mid grid">
 					<div class="image">
 						<a href="<?php echo base_url()?>login/comment/<?php echo $l21->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $l21->image ?>" style="max-width: 300px;"></a>
 						</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $l21->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l21->id ?>" style="color: black;"><?php echo $l21->title ?></a></h1>
 						<p class="detail"><?php echo $l21->date ?> | <?php echo $l21->author ?></p>
 						<p class="text"><?php echo $l21->body ?></p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l21c ) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
 				<article class="col-md-4 col-sm-4 mid grid">
 					<div class="image">
 						<a href="<?php echo base_url()?>login/comment/<?php echo $l22->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $l22->image ?>" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $l22->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l22->id ?>" style="color: black;"><?php echo $l22->tag ?></a></h1>
 						<p class="detail"><?php echo $l22->date ?> | <?php echo $l22->author ?></p>
 						<p class="text"><?php echo $l22->body ?></p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l22c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
 				<article class="col-md-4 col-sm-4 mid grid">
 					<div class="image">
 						<a href="<?php echo base_url()?>login/comment/<?php echo $l23->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $l23->image ?>" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $l23->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l23->id ?>" style="color: black;"><?php echo $l23->title ?></a></h1>
 						<p class="detail"><?php echo $l23->date ?> | <?php echo $l23->author ?></p>
 						<p class="text"><?php echo $l23->body ?></p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l23c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
           </div><!--end of news-->
           <div class="wits-dom row" style="background-color: lightblue;"><!--wits-dom-->
           	  <article class="col-md-4 col-sm-4 mid grid">
 					<div class="image img-responsive">
 						<a href="<?php echo base_url()?>login/comment/<?php echo $l31->id ?>"><img  src="<?php echo base_url('asests/images/')?><?php echo $l31->image ?>" class="img-responsive" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $l31->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l31->id ?>" style="color: black;"><?php echo $l31->title ?></a></h1>
 						<p class="detail"><?php echo $l31->date ?> | <?php echo $l31->author ?></p>
 						<p class="text">.....</p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l31c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
 				<article class="col-md-8 col-sm-8 mid grid">
 	        <div class="image">
 	 	        <a href="<?php echo base_url()?>login/comment/<?php echo $l32->id ?>" style="color: black;"><img class="img-responsive"  src="<?php echo base_url('asests/images/')?><?php echo $l32->image ?>" style="max-width: 600px;"></a>
 	              </div>
 					<div class="info">
 						<p class="tag"></p>
 						<h1></h1>
 						<p class="detail"></p>
 						<p class="text"></p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l32c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
           </div><!--end of wits-dom-->
 		</div><!--end of posts-->
 		<aside class="col-md-3 col-sm-12">
 			<div class="squiggles col-md-12 col-sm-6" style="text-align: center;">
 				<div class="squig" style="background-color: yellow; height: 400px;">
 					<h3>SQUIGGLES</h3>
 					<p><?php echo $squiggles->para1  ?></p><a href=""><?php echo $squiggles->link1 ?></a><br>
 					<p><?php echo $squiggles->para2  ?></p><a href=""><?php echo $squiggles->link2 ?></a></a><br>
 					<p><?php echo $squiggles->para3  ?></p><a href=""><?php echo $squiggles->link3 ?></a></a><br>
 				</div>
 			</div>
 			<br>
 			<div class="pic-of-the-week col-md-12 col-sm-6" style="height: 500px;">
 				<h4>PIC OF THE WEEK</h4>
 				<a href="<?php echo base_url()?>login/comment/<?php echo $pow->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $pow->image ?>"></a>
 				<article class="mid">
 					<div class="info">
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $pow->id ?>"><?php echo $pow->title ?></a></h1>
 						<p><?php echo $pow->author ?></p>
 						<p><?php echo $pow->body ?></p>
 						
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($powc) ?></a>
										</li>
									</ul>
									<p>Send your entries at  </p>
 						<a href="#">morning..monday@gmail.com</a>
 					</div>
 				</article>
 			</div>
 			<br>
 			<div class="citizen-jounalist col-md-12 col-sm-6" style="height: 200px;">
 				<h4>CITIZEN JOURNALIST</h4>
 				<article>
 					<div class="info">
 						<p><?php echo $cz->subject ?></p>
 						<p>Send your entries at  </p>
 						<a href="#">morning..monday@gmail.com</a>
 					</div>
 				</article>
 			</div>
 			<br>
 			<div id="poll-widget" class="col-md-12 col-sm-6 poll-widget" data-pollid="" style="position: relative; min-height: 200px;">
 						
    
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-info" id="poll-result" style="display: none;">
                       
       </div>
     </div>
   </div>
 
 			<br>
 				<?php 
                  $no1=count($option1);
                  $no2=count($option2);
                  $no3=count($option3);
                  $no4=count($option4);
                  $total=($no1+$no2+$no3+$no4);
                  $nop1=round(($no1/$total)*100);
                   $nop2=round(($no2/$total)*100);
                    $nop3=round(($no3/$total)*100);
                   
                     $nop4=round(($no4/$total)*100);
 				?>
 				<h3>Student Pulse</h3>
 				<div class="result">
 				<h4 style="text-align: center;">poll result</h4>
	           <div class="progress">
                 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                 aria-valuenow="<?php echo $nop1 ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $nop1 ?>%">
                   <?php echo $nop1 ?>%
                 </div>
               </div>
                <div class="progress">
                 <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
                 aria-valuenow="<?php echo $nop2 ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $nop2 ?>%">
                   <?php echo $nop2 ?>%
                 </div>
               </div>
                <div class="progress">
                 <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                 aria-valuenow="<?php echo $nop3 ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $nop3 ?>%">
                   <?php echo $nop3 ?>%
                 </div>
               </div>
                <div class="progress">
                 <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                 aria-valuenow="<?php echo $nop4 ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $nop4 ?>%">
                   <?php echo $nop4 ?>%
                 </div>
               </div>
               <button class="btn btn-lg btn-primary" id="question">view question</button>
           </div>
           <div class="question">
           	<h4 style="text-align: center;">poll question</h4>
           	<p><strong><?php echo $pulse->question ?></strong></p>
	          <div>
	         <?php 
	          $ip =$_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
	           
	           $date=date('y/m/d');
	           ?>
	           <input type="hidden" name="ip" value="<?= $ip?>">
	           <input type="hidden" name="date" value="<?= $date?>">
	         <?php $radio1=array(

	                  'name'=>'option',
	                  'value'=>'option1'
	                 );
	                 $radio2=array(
	                  'name'=>'option',
	                  'value'=>'option2'
	                 );
	                 $radio3=array(
	                  'name'=>'option',
	                  'value'=>'option3'
	                 );
	                 $radio4=array(
	                  'name'=>'option',
	                  'value'=>'option4'
	                 );?>
	             <?php echo form_radio($radio1);?><?php echo $pulse->option1 ?><br>
	             <?php echo form_radio($radio2);?><?php echo $pulse->option2 ?><br>
	             <?php echo form_radio($radio3);?><?php echo $pulse->option3 ?><br>
	             <?php echo form_radio($radio4);?><?php echo $pulse->option4 ?><br>   
	                 	 <br>
              <?php echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default'])  ?>

              <button name='submit' value='submit' id='poll'  class='btn btn-primary'>submit</button>
              
	          </div>
	          <br>
              <button class="btn  btn-primary" id="result">view result</button>
           </div>
 			</div>
 		</aside>
 	<!--end of upper part-->
 	<div class="middlepart">
 		<hr><!--middlepart-->
 		<div class="department col-lg-9 col-sm-9 col-md-3">
 				<div class="row"><!--news-->
 				<article class="col-md-4 col-sm-4 mid grid">
 					<div class="image">
 					   	<a href="<?php echo base_url()?>login/comment/<?php echo $l41->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $l41->image ?>" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><a href="#"><?php echo $l41->tag ?></a></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l41->id ?>" style="color: black;"><?php echo $l41->title ?></a></h1>
 						<p class="detail"><?php echo $l41->date ?> | <?php echo $l41->author ?></p>
 						<p class="text"><?php echo $l41->body ?></p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l41c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
 				<article class="col-md-4 col-sm-4 mid grid">
 					<div class="image">
 						<a href="<?php echo base_url()?>login/comment/<?php echo $l42->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $l42->image ?>" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $l42->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l42->id ?>" style="color: black;"><?php echo $l42->title ?></a></h1>
 						<p class="detail"><?php echo $l42->date ?> | <?php echo $l42->author ?></p>
 						<p class="text"><?php echo $l41->body ?></p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l42c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
 				<article class="col-md-4 col-sm-4 mid grid">
 					<div class="image">
 						<a href="<?php echo base_url()?>login/comment/<?php echo $l43->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $l43->image ?>" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $l43->tag ?></p>
 						<h1><a href="<?php echo base_url()?>login/comment/<?php echo $l43->id ?>" style="color: black;"><?php echo $l43->title ?></a></h1>
 						<p class="detail"><?php echo $l43->date ?> | <?php echo $l43->author ?></p>
 						<p class="text"><?php echo $l43->body ?> </p>
 						<ul class="counters list-inline">
										<li>
											<a href="#"> <span class="glyphicon glyphicon-comment"></span> <?php echo count($l43c) ?></a>
										</li>
									</ul>
 					</div>
 				</article>
           </div>
       </div>
 			<aside class="col-md-3 col-sm-12 col-lg-3">
 				<div class="facebook row col-md-12 col-sm-6">
 					<h1>Enhance Your Aptitude Here</h1>
 					
 					<a href="<?= base_url('login/test');  ?>" class="btn btn-lg btn-success pull-right" style="float: right;">Give Test</a>
 					<hr>
 				</div>
 				<div class=" Videos  row col-md-12 col-sm-6 container-fluid" style="margin-top: 20px;">
 					<iframe width="300" height="270" src="<?php echo $video->subject ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
 						
 					</iframe>
 				</div>
 			</aside>
 		
 	</div><!--end of middlepart-->
 	<div class="row" style="margin-left: 4%">
 		<h4>EDITOR PICS</h4>
 	</div>
 	<br><br>
 	<div class="row" style="margin-left:auto;margin-right: auto;" >
 		
 	<br>
 	 <?php

         foreach($epics as $epic): ?>
         	<article class="col-md-3 col-sm-3 mid grid">
 					<div class="image">
 						<a href="<?php echo base_url()?>login/article/<?php echo $epic->id ?>"><img src="<?php echo base_url('asests/images/')?><?php echo $epic->image ?>" style="max-width: 300px;"></a>
 					</div>
 					<div class="info">
 						<p class="tag thumbnail"><?php echo $epic->tag ?></p>
 						
 						
 					</div>
 				</article>

       <?php  endforeach;


 	 ?>
 	</div>	
 	<br>
   <div class="footer row" style="background-color: #2C3539; width: 100%;height: 400px;">
       	<div class="about col-md-3 col-sm-6" style="margin-top: 30px;">
					<h5 style="color: blue;margin-left: 20px;">ABOUT</h5>
					<p style="color: #E5E4E2;margin-left: 20px;">
						Monday Morning is the official Media Body of National Institute Of Technology Rourkela. Monday Morning covers all the events, issues and activities going on inside the campus. Monday morning also serves as a link between the administration and the students.  
					</p>

					<ul class="social list-inline" style="margin-left: 40px;">
						<li><a href="https://www.facebook.com/mondaymorning.NITRKL"   style="color: white;border-color: white;"><i class="icon fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/mmnitrkl"   style="color: white;border-color: white;"><i class="icon fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/+MondayMorningNITR/posts"   style="color: white;border-color: white;"><i class="icon fa fa-google-plus"></i></a></li>
						<li><a href="http://feeds.feedburner.com/monday-morning-nitrkl"   style="color: white;border-color: white;"><i class="icon fa fa-rss"></i></a></li>
					</ul>

					<a target="_blank" style="margin-left: 35px; margin-top: 20px; width: 100px; height: 50px;" href="https://play.google.com/store/apps/details?id=in.ac.nitrkl.mondaymorning">
						<img class="google-play-badge" src="http://mondaymorning.nitrkl.ac.in/assets/img/google-play-badge.png" height="30px">
					</a>
				</div>
       	<div class="categories col-md-3 col-sm-6" style="margin-top: 30px;">
					<h5 style="color: blue;margin-left: 20px;">Archive</h5>
					<ul style="margin-left: 40px; list-style: none;">
						<li style=" height: 50px;"><a target="_blank" class="archives" style="color: white; " href="http://mondaymorning.nitrkl.ac.in/issues/3-2016-17">2016-17</a></li>
						<li style=" height: 50px;"><a target="_blank" class="archives" style="color: white;" href="http://mondaymorning.nitrkl.ac.in/issues/2-2015-16">2015-16</a></li>
						<li style=" height: 50px;"><a target="_blank" class="archives" style="color: white;" href="http://mondaymorning.nitrkl.ac.in/issue/jarchive/?path=archives&session=2014-15">2014-15</a></li>
						<li style=" height: 50px;"><a target="_blank" class="archives" style="color: white;" href="http://mondaymorning.nitrkl.ac.in/issue/jarchive/?path=archives/archives&session=2013-14">2013-14</a></li>
						<li style=" height: 50px;"><a target="_blank" class="archives" style="color: white;" href="http://mondaymorning.nitrkl.ac.in/issue/jarchive/?path=archives/archives/archives&session=2012-13">2012-13</a></li>
					</ul>
				</div>

				<div class="clearfix visible-sm"></div>
       <div id="events" class="events col-md-3 col-sm-6" style="margin-top: 30px;">
					<h5 style="color: blue;margin-left: 20px;">Events</h5>
					<div id="events-list" class="events-list">
					</div>
				</div>
       <div class="about col-md-3 col-lg-3 col-sm-6 col-xs-12" style="margin-top: 30px;">
       	   <h5 style="color: blue;margin-left: 20px;">Table</h5>
       </div>
     </div>
     <div class="ligalinformation col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #000000;height: 100px;margin-bottom: 30px;text-align: center;" >
     	 <h4 style="font-size:13px; font-family; text-align: center; margin-left:20%;color: white;">© 2015 - 2018 Monday Morning. All rights reserved. Powered by Microsoft Campus Club.</h4>
	 <h4  style="font-size:13px; font-family; text-align: center;padding-left: 10%;color: white;">Project Adamantium build 86c21b6</h4>
	<h4 style="font-size:13px; font-family; text-align: center; padding-left: 5%;color: white;">Monday Morning CMS and Android app is developed under codenames 'Project Adamantium' and 'Project Vibranium' respectively in collaboration with Microsoft Campus Club.</h4>

     </div>
 	<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="position: fixed;bottom: 0px; width: 100%;background-color: white; opacity: 0.7;">
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"><a href="<?= base_url('login/question');  ?>" class="btn btn-lg btn-primary btn-fixed active pull-right" style="float: right;">Ask a Question</a></div>
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"> <a href="<?= base_url('login/forum');  ?>" class="btn btn-lg btn-primary btn-fixed active pull-left" style="float:left;margin-left: 0px">forum</a>	</div>	
 
 </div>
 <!--end of main body-->
	<!--END FOOTER	</div>-->
	<!--END CONTAINER-->
	
		
	
<!--end of footer-->
<!--end of main-->

 	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('asests/js/')?>mm.js"></script>
<script>

	$(document).ready(function(){
	$('#poll').click(function(){
		alert('js connected');
			var option=$('input[name = option]:checked').val();
			alert(option);
			var ip =$('input[name = ip]').val();
			var date =$('input[name = date]').val();
			alert(date);
			alert(ip);
			
		$.ajax({
			type:'POST',
			url:'<?php echo base_url("Login/poll") ?>',
			data:{'ip':ip,'option':option,'date':date},
			success:function(data)
			{
				alert(data);
				var datastring = JSON.stringify(data);
				alert(datastring); 
				
				var datastring2 = datastring;
				alert(datastring2);
				if(datastring == datastring2)
					alert("false");
				else
					alert("true");
				//$('input[name = option]').val() = null;

			 	$('#poll-result').html('you have successfully voted').fadeIn().delay(4000).fadeOut('slow'); 
			},
			error:function()
			{
				alert("error");
				//$('.question')[0].reset();
              $('#poll-result').html('you have alredy voted').fadeIn().delay(4000).fadeOut('slow');
			}
		});
	});
	$('#myDropdowns').hide();
	$('.dropbtns').click(function(){
		$('#myDropdowns').show();
	});
	$('body').click(function(e){
		if (!e.target.matches('.dropbtns')) {
	$('#myDropdowns').hide();
	}	
	});
     });
	</script>

</body>
</html>