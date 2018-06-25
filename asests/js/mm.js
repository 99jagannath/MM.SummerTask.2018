var modal=document.getElementById('samplemodal');
var modalBtn=document.getElementById('modalbtn');
var closeBtn=document.getElementById('closeBtn');
modalBtn.addEventListener('click',openModal);
closeBtn.addEventListener('click',closeModal);
window.addEventListener('click',clickoutside);
function openModal()
{
	modal.style.display='block';
}
function closeModal()
{
	modal.style.display='none';
}

function clickoutside(e)
{
	if(e.target==modal){
      modal.style.display='none';
	}
}


var rmodal=document.getElementById('rsamplemodal');
var rmodalBtn=document.getElementById('rmodalbtn');
var rcloseBtn=document.getElementById('rcloseBtn');
var contact=document.getElementById('contact');
var contactModal=document.getElementById('contactModal');
//rmodalBtn.addEventListener('click',ropenModal);
//contact.addEventListener('click',ropenContact);
rcloseBtn.addEventListener('click',rcloseModal);
window.addEventListener('click',rclickoutside);
function ropenModal()
{
	rmodal.style.display='block';
}
function rcloseModal()
{
	rmodal.style.display='none';
}
function ropenContact()
{
	contactModal.style.display='block';
}
function rclickoutside(e)
{
	if(e.target==rmodal){
      rmodal.style.display='none';
	}
}

$(document).ready(function(){

    //$('#loader').hide('slow');
	$('header').show('slow');
     $('.result').hide();
     $('#login').hide();
     $('#resister').hide();
	$('#result').click(function(){
		$('.result').show();
		$('.question').hide();
		$('#result').hide();
		$('#question').show();
	});
	$('#question').click(function(){
		$('.result').hide();
		$('.question').show();
		$('#result').show();
		$('#question').hide();
	});
	$('#contact').click(function(){
		$('#contactModal').modal('show');
	});
	$('#poll').click(function(){
		alert('js connected');
		$.ajax({
			type:'POST',
			url:'<?php echo base_url("Login/poll")',
			data:{'ip':ip,'option':option},
			success:function(data)
			{
				$('.question')[0].reset();
              $('#poll-result').html('you have successfullyvoted').fadeIn().delay(4000).fadeOut('slow');
             
           
			},
			error:function()
			{
				$('.question')[0].reset();
              $('#poll-result').html('you have alredy voted').fadeIn().delay(4000).fadeOut('slow');
			}
		});
	});

});
       