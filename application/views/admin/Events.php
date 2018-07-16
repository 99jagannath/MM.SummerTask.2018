<?php include('admin_header.php'); ?>
  <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Events</h1>
                </div>
                     <div>
    <?php 
    if($feedback=$this->session->flashdata('feedback')) :
       $feedback_class=$this->session->flashdata('feedback_class');
     ?>
   <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
       <div class="alert alert-dismissible <?=$feedback_class; ?>">
            <?=$feedback ?>            
       </div>
     </div>
   </div>
  <?php endif;?>
            </div>
                <div>
                	
                	<table class="table table-bordered table-responsive">
                		<thead>
                			<th style="text-align: center;">sl no</th>
                			<th style="text-align: center;">subject</th>
                			<th style="text-align: center;">stat on</th>
                			<th style="text-align: center;">end on</th>
                			<th style="text-align: center;">action</th>
                		</thead>
                		<tbody>

                			<?php 
                            $j=1;
                			foreach($events as $event): ?>
                			<tr>
                				<td><?=$j?></td>
                				<td><?=$event->subject?></td>
                				<td><?=$event->start?></td>
                				<td><?=$event->end?></td>
                				<td><?= anchor("admin/event/{$event->id}","Remove",['class'=>'btn btn-danger']); ?></td>
                			</tr>
                			<?php 
                             ++$j;
                			 endforeach; ?>                			
                		</tbody>
                	</table>
                </div>
                	<div style="margin-top: 40px; margin-left: 20%; margin-right: 20%;">
                	 <?php echo form_open('login/event')  ?>
                
                <label style="text-align: center;">subject</label><br>
                <?php echo form_input(['name'=>'subject','class'=>'form-control','placeholder'=>'Enter your subject']) ?><br>
                 <label style="text-align: center;">starting date</label><br>
                <?php echo form_input(['name'=>'start','class'=>'form-control','placeholder'=>'Enter your starting date','type'=>'date']) ?><br>
                 <label style="text-align: center;">subject</label><br>
                <?php echo form_input(['name'=>'end','class'=>'form-control','placeholder'=>'Enter your ending date','type'=>'date']) ?><br>
                	 <br>
        <?php  echo form_reset(['name'=>'submit','value'=>'reset','class'=>'btn btn-default']) ?>

    <?php  echo form_submit(['name'=>'submit','value'=>'Add events','class'=>'btn btn-primary']) ?>
                <?php echo form_close(); ?>
                </div>
                
            </div>
    </div>

<?php include('admin_footer.php'); ?>