<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row" style="margin-left: 100px;">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Questions</h1>
                </div>
                      <?php 
    if($feedback=$this->session->flashdata('reply_question')) :
       $feedback_class=$this->session->flashdata('reply_question_class');
     ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible <?=$feedback_class; ?>">
            <?=$feedback ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
                 
                <?php  foreach($questions as $question):
                     if($question->answer==NULL):
                 ?>
                	<?php echo form_open('admin/question')?>
                	<?php  echo form_hidden('id',$question->id) ?>
                	<?php  echo form_hidden('name',$question->name) ?>
                	<?php  echo form_hidden('email',$question->email) ?>
                	<?php  echo form_hidden('mobileno',$question->mobileno) ?>
                	<?php  echo form_hidden('type',$question->type) ?>
                	<span>Catagory : </span><?php echo $question->type ?> <br>
                  <span>Asking date : </span><?php echo $question->date ?> <br>
                	<?php echo $question->question ?><br>
                	<?php echo form_input(['name'=>'answer','type'=>'text','placeholder'=>'enter your answer here','class'=>'form-control','value'=>set_value('answer')]) ?>
                	<br>
                	 <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'answer','class'=>'btn btn-primary']) ?>
    <?php echo form_close(); ?>
                   <hr>
                <?php
            endif;
                   
                 endforeach; ?>
                 
            </div>
    </div>

<?php include('admin_footer.php'); ?>