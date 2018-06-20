<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">CitiZen Journalism</h1>
                </div>
                <div style="margin-top: 40px; margin-left: 200px; margin-right: 200px;">
                	 <?php echo form_open('login/cz')  ?>
                <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                <label style="text-align: center;">subject</label><br>
                <?php echo form_textarea(['name'=>'subject','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$cz->subject)]) ?><br>
                	 <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'Update Citizen Journalism','class'=>'btn btn-primary']) ?>
                <?php echo form_close(); ?>
                </div>
            </div>
    </div>

<?php include('admin_footer.php'); ?>