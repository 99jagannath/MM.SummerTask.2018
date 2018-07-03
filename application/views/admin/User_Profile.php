<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">USer Profile</h1>
                    
                    <div class="row" style="margin-left: auto;margin-right: auto;">
                    	<div class="image" style="margin-top: 5%;margin-right: 20%; margin-left: 20%;">
                    	   <img src="<?php echo base_url('asests/images/')?><?php echo $profile->image ?>" style="height: 50%; width: 40%;border-radius: 100%">	
                    	</div>
                    	<div class="profile row" style="margin-top: 10%;margin-right: 20%; margin-left: 18%;">
                    		<label>username :</label>
                             <h3><strong><?php echo $profile->username ?></strong></h3>
                             <label>password :</label>
                             <h3><strong><?php echo $profile->password ?></strong></h3>
                             <label>Email :</label>
                             <h3><strong><?php echo $profile->email ?></strong></h3>
                             <label>Mobile no :</label>
                             <h3><strong><?php echo $profile->mobileno ?></strong></h3>
                             <label>status :</label>
                             <h3><strong><?php echo $profile->status ?></strong></h3>
                    	</div>
                    </div>
                </div>
                <div class="edit profile">
                	
                </div>
            </div>
    </div>

<?php include('admin_footer.php'); ?>