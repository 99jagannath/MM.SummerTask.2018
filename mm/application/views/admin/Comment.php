<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Comments</h1>
                </div>
                  <?php 
    if($feedback=$this->session->flashdata('reply_comment')) :
       $feedback_class=$this->session->flashdata('reply_comment_class');
     ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible <?=$feedback_class; ?>">
            <?=$feedback ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
                 <?php $j=1; ?>
                <?php  foreach($comments as $comment):
                     if($comment->answer==NULL):
                 ?>
                	<?php echo form_open('admin/comment')?>
                	<?php  echo form_hidden('id',$comment->id) ?>
                	<?php  echo form_hidden('article_id',$comment->article_id) ?>
                	<?php  echo form_hidden('user_id',$comment->user_id) ?>
                	<?php echo $j ?><br>
                	<?php echo $comment->comment ?><br>
                	<?php echo form_input(['name'=>'answer','type'=>'text','placeholder'=>'enter your answer here','class'=>'form-control','value'=>set_value('answer')]) ?>
                	<br>
                	 <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'answer','class'=>'btn btn-primary']) ?>
    <?php echo form_close(); ?>
                   <hr>
                <?php
            endif;
                   ++$j;
                 endforeach; ?>
            </div>
    </div>

<?php include('admin_footer.php'); ?>