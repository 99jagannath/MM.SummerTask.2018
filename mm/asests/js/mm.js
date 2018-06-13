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
rmodalBtn.addEventListener('click',ropenModal);
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

function rclickoutside(e)
{
	if(e.target==rmodal){
      rmodal.style.display='none';
	}
}
$(document).ready(function(){
    
	$('header').show('slow');
     $('.result').hide();
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

});