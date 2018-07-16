<?php
 print_r($articles);

?>
<?php include('admin_header.php'); ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Publish Article</h1>
                </div>
            </div>
            <div class="container col-lg-6" style="margin-right: auto; margin-left: auto;">

	
	<form action="<?php echo base_url('admin/update_publish')?>" method="post">
	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
	<?php echo form_hidden('author',$this->session->userdata('username')); ?>
  <?php echo form_hidden('article_id',$articles->id); ?>
  <?php echo form_hidden('title',$articles->title); ?>
  <?php echo form_hidden('date',$articles->date); ?>
  <?php echo form_hidden('body',$articles->body); ?>
  <?php echo form_hidden('image',$articles->image); ?>
  <?php echo form_hidden('status',$articles->status); ?>
	<fieldset>
  
    
  
    
      <label>Article Title</label>
      <h3><?=$articles->title?></h3>
      <br>
       <label>Article  date</label>
      <h3><?=$articles->date?></h3>
         <br>
         <label>Article image</label><br>
         <img src="<?php echo base_url('asests/images/')?><?php echo $articles->image ?>" style="height: 40%;width: 40%;">
         <br><br>
      <label >Article Body</label>
      <h3><?=$articles->body?></h3>
  
    <br>
      <label>choose your tag for publishing</label>
      <select name="tag" class="form-control">
      	<option value="">select your tag</option>
      	<option value="carosel">carosel</option>
      	<option value="mainpost">mainpost</option>
      	<option value="campus buzz">campus buzz</option>
      	<option value="photo journalism">photo journalism</option>
      	<option value="poll analysis"> poll analysis</option>
      	<option value="roots">roots</option>
      	<option value="department-1">department-1</option>
      	<option value="department-2">department-2</option>
      	<option value="department-3">department-3</option>
      	<option value="picofweek">pic of the week</option>
      	<option value="ask a question">ask a question</option>
      </select>
             
     
    <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'Publish article','class'=>'btn btn-primary']) ?>
    </form>
   
 </fieldset>

</div>
    </div>

<?php include('admin_footer.php'); ?>