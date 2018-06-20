<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Squiggles</h1><hr>
                </div>
                <div style="margin-top: 40px; margin-left: 200px; margin-right: 200px;">
                <?php echo form_open('login/Squiggles')  ?>
                <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                <label style="text-align: center;">subject-1</label><br>
                <?php echo form_textarea(['name'=>'para1','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('para1',$squiggles->para1)]) ?><br>
                <label style="text-align: center;">link-1</label><br>
                <?php echo form_input(['name'=>'link1','class'=>'form-control','placeholder'=>'Enter link of above subject','value'=>set_value('link1',$squiggles->link1)]) ?><br>
                <br>
                <label style="text-align: center;">subject-2</label><br>
                <?php echo form_textarea(['name'=>'para2','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('para2',$squiggles->para2)]) ?><br>
                <label style="text-align: center;">link-2</label><br>
                <?php echo form_input(['name'=>'link2','class'=>'form-control','placeholder'=>'Enter link of above subject','value'=>set_value('link2',$squiggles->link2)]) ?><br>
                <br>
                <label style="text-align: center;">subject-3</label><br>
                <?php echo form_textarea(['name'=>'para3','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('para3',$squiggles->para3)]) ?><br>
                <label style="text-align: center;">link-3</label><br>
                <?php echo form_input(['name'=>'link3','class'=>'form-control','placeholder'=>'Enter link of above subject','value'=>set_value('link3',$squiggles->link3)]) ?><br>
                <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'Update Squiggles','class'=>'btn btn-primary']) ?>
                <?php echo form_close(); ?>
            </div>
            </div>
    </div>

<?php include('admin_footer.php'); ?>