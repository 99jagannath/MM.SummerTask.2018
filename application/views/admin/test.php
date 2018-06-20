<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Set Question for The Test</h1>
                </div>
                    <?php 
    if($feedback=$this->session->flashdata('test')) :
       $feedback_class=$this->session->flashdata('test_class');
     ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible <?=$feedback_class; ?>">
            <?=$feedback ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
                <?php 
                    foreach($tests as $test):

                    	echo form_open('admin/test');
                    	echo form_hidden('id',$test->id);
                    	?>
                   	<?php echo 'Q'.$test->id ?><br>
               Question :  <?php echo form_input(['name'=>'question','type'=>'varchar','class'=>'form-control','value'=>set_value('question',$test->question)]) ?><br>
               OPtion1 : <?php echo form_input(['name'=>'option1','type'=>'varchar','class'=>'form-control','value'=>set_value('option1',$test->option1)]) ?><br>
                 OPtion2 : <?php echo form_input(['name'=>'option2','type'=>'varchar','class'=>'form-control','value'=>set_value('option2',$test->option2)]) ?><br>
                  Option3 : <?php echo form_input(['name'=>'option3','type'=>'varchar','class'=>'form-control','value'=>set_value('option3',$test->option3)]) ?><br>
                   OPtion4 : <?php echo form_input(['name'=>'option4','type'=>'varchar','class'=>'form-control','value'=>set_value('option4',$test->question)]) ?><br>
                    Answer : <?php echo form_input(['name'=>'answer','type'=>'varchar','class'=>'form-control','value'=>set_value('answer',$test->answer)]) ?><br>
                  <br>
                      <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'update','class'=>'btn btn-primary']) ?>
    <?php echo form_close(); ?>
    <hr>
     <?php endforeach;?>
            </div>
    </div>

<?php include('admin_footer.php'); ?>