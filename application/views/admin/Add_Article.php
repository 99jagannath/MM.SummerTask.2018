<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Add Article</h1>
                </div>
            </div>
            <div class="container col-lg-6" style="margin-right: auto; margin-left: auto;">

	<?php echo form_open('admin/store_article',['class'=>'form'])?>
	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
	<?php echo form_hidden('author',$this->session->userdata('username')); ?>
	<fieldset>
  
    
  
    
      <label>Article Title</label>
      <?php echo form_input(['name'=>'title','type'=>'varchar','class'=>'form-control','placeholder'=>'article title','value'=>set_value('title')]) ?>
      
    <div class="col-lg-" style="color: red;">
    	<?php  echo  form_error('title'); ?>
    </div>
      <label>Article Tag</label>
      <?php  echo form_input(['name'=>'tag','type'=>'varchar','class'=>'form-control','placeholder'=>'article tag','value'=>set_value('tag')]) ?>
         <div class="col-lg-" style="color: red;">
    	<?php  echo  form_error('tag'); ?>
         </div>
       <label>Date</label>
       
      <?php  echo form_input(['name'=>'date','type'=>'date','class'=>'form-control','placeholder'=>'article date','value'=>set_value('date')]) ?>
         <div class="col-lg-" style="color: red;">
    	<?php  echo  form_error('date'); ?>
         </div>
         <label>Article image</label>
      <?php  echo form_input(['name'=>'image','type'=>'file','id'=>'files','class'=>'form-control','placeholder'=>'article image','value'=>set_value('image')]) ?><img id="image" src="">
         <div class="col-lg-" style="color: red;">
    	<?php  echo  form_error('image'); ?>
         </div> 
      <label >Article Body</label>
      <?php echo form_textarea(['name'=>'body','type'=>'text','class'=>'form-control','placeholder'=>'article body','value'=>set_value('body')]) ?>
  <div class="col-lg-6" style="color: red;">
  	<?php  echo  form_error('body'); ?>
  </div>
    <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'add article','class'=>'btn btn-primary']) ?>
   
 </fieldset>

</div>
    </div>
     <script type="text/javascript">
        document.getElementById('files').onchange=function()
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
              document.getElementById('image').src=e.target.result;
            };
            reader.readAsDataUrl(this.files[0]);
        };
    </script>


<?php include('admin_footer.php'); ?>