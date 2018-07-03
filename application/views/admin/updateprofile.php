<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">UPDATE PROFILE</h1>
                </div>
                 <?php echo form_open('login/updateprofile')  ?>
                <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                <label style="text-align: center;">User name</label><br>
                <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('username',$profile->username)]) ?><br>
                <label style="text-align: center;">password</label><br>
                <?php echo form_input(['name'=>'password','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$profile->password)]) ?><br>
                <label style="text-align: center;">profile image</label><br>
                <?php echo form_input(['name'=>'image','type'=>'file','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$profile->image)]) ?><br>
                <label style="text-align: center;">Email</label><br>
                <?php echo form_input(['name'=>'email','type'=>'email' ,'class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$profile->email)]) ?><br>
                <label style="text-align: center;">mobile number</label><br>
                <?php echo form_input(['name'=>'mobileno','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$profile->mobileno)]) ?><br>
                
                	 <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'Update profile','class'=>'btn btn-primary']) ?>
                <?php echo form_close(); ?>
            </div>
    </div>

<?php include('admin_footer.php'); ?>