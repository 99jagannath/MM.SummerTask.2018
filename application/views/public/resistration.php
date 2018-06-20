<!DOCTYPE html>
<html>
<head>
	<title>resistration</title>
</head>
<body>
<?php echo form_open('login/resistration') ?>
<label>username</label>
<?php echo form_input(['name'=>'username','type'=>'text','class'=>'form-control','placeholder'=>'username','value'=>set_value('username')]) ?><br>
<?php echo form_input(['name'=>'image','type'=>'file','class'=>'form-control']) ?>
<?php echo form_submit(['name'=>'submit','type'=>'submit'],'value'=>'submit') ?>
</body>
</html>