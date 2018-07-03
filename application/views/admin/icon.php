<!DOCTYPE html>
<html>
<head>
	<title>image icon</title>
</head>
<body>
<img src="" style="display: none; height: 50px;width: 50px; " id="image">
<input type="file" onchange="showImage.call(this)">
<script type="text/javascript">
	alert("hii");
	function showImage()
	{
		if(this.files && this.files[0])
		{
			var obj = new FileReader();
			obj.onload = function(data)
			{
				var image = document.getElementById("image");
				image.src = data.target.result;
				image.style.display="block";
			}
			obj.readAsDataUrl(this.files[0]);
		}
	}
</script>
</body>
</html>