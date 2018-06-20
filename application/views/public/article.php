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
      
</header><!--d of first menu-->
       <script type="text/javascript" src="<?php echo base_url('asests/js/')?>mm.js"></script>
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
 	<div class="row upperpart">
 		<div class="posts col-md-9 col-sm-12">
 			<img src="<?php echo base_url('asests/images/')?><?php echo $article->image ?>" style="width: 750px; margin-left:100px; margin-top: 30px;">
 			<h1 style="width: 750px; margin-left:100px; "><strong><?php echo $article->title; ?></strong></h1><hr>
 			<h3><?php echo $article->date?> | <?php echo $article->author ?></h3><br>
 			<h2><?php echo $article->tag;?></h2><br>
 			<h3><?php echo $article->body;?></h3>
 			<hr>
 			<div class="comment">
 				<h2>Comments</h2>
 			<?php foreach ($comments as $key => $comment) :
 			$j=1; ?>
 			
 			<h4><?php echo $j." ".$comment->comment ?></h4>
 			<h5><?php 
            if($comment->answer)
            {
 			echo "reply - ".$comment->answer ;
 		    }?></h5>
 			<?php 
              ++$j;
 			endforeach; ?>
 			<p>for giving comments you have to login.</p>
 			<?php echo form_open('login/comment_insert')?>
 			<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
 			<?php echo form_hidden('article_id',$article->id); ?>
 			<?php echo form_hidden('article_tag',$article->tag); ?>
 			<?php echo form_hidden('article_title',$article->title); ?>
 			<?php echo form_textarea(['name'=>'comment','type'=>'text','placeholder'=>'COMMENT HERE','value'=>set_value('comment')])?>
 			<br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'comment','class'=>'btn btn-primary']) ?>
 			<?php echo form_close();?>	
 			</div>
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
 				<img src="<?php echo base_url('asests/images/')?><?php echo $pow->image ?>">
 				<article class="mid">
 					<div class="info">
 						<h1><?php echo $pow->title ?></h1>
 						<p><?php echo $pow->author ?></p>
 						<p><?php echo $pow->body ?></p>
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
           	<p><strong>How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?</strong></p>
	          <?php echo form_open('login/poll') ?>
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
	             <?php echo form_radio($radio1);?>needs to upgrade the safety measures<br>
	             <?php echo form_radio($radio2);?>The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.<br>
	             <?php echo form_radio($radio3);?>I have no knowledge of any safety measures<br>
	             <?php echo form_radio($radio4);?>The institute is not completely safe against hazards.<br>   
	                 	 <br>
              <?php echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default'])  ?>

              <?php echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary'])  ?>
              
	          <?php echo form_close(); ?>
	          <br>
              <button class="btn  btn-primary" id="result">view result</button>
           </div>
 			</div>
 		</aside>
 	<!--end of upper part-->
 	
 </div>
 <!--end of main body-->
	<!--END FOOTER-->
	</div>
	<!--END CONTAINER-->
<!--end of footer-->
</div><!--end of main-->
</body>
</html>