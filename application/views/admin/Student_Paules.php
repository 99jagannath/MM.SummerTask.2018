<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Student Paules</h1>
                </div>
                
                <?php echo form_open('login/pulse')  ?>
                
                <label style="text-align: center;">question</label><br>
                <?php echo form_input(['name'=>'question','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->question)]) ?><br>
                <label style="text-align: center;">option1</label><br>
                <?php echo form_input(['name'=>'option1','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->option1)]) ?><br>
                <label style="text-align: center;">option2</label><br>
                <?php echo form_input(['name'=>'option2','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->option2)]) ?><br>
                <label style="text-align: center;">option3</label><br>
                <?php echo form_input(['name'=>'option3','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->option3)]) ?><br>
                <label style="text-align: center;">option4</label><br>
                <?php echo form_input(['name'=>'option4','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->option4)]) ?><br>
                <label style="text-align: center;">opening date</label><br>
                <?php echo form_input(['name'=>'opendate','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->opendate)]) ?><br>
                <label style="text-align: center;">closeing date</label><br>
                <?php echo form_input(['name'=>'closedate','class'=>'form-control','placeholder'=>'Enter your subject','value'=>set_value('subject',$pulse->closedate)]) ?><br>
                	 <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'Update poll question','class'=>'btn btn-primary']) ?>
                <?php echo form_close(); ?>
            </div>
    </div>

<?php include('admin_footer.php'); ?>