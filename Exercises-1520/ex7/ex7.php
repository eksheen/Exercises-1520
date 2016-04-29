<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="Evan Sheen" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Ex7</title>
	<link href="ex7.css" rel="stylesheet">
</head>
<div class="body" align="center">
	<button class="button" type='submit' formmethod='post'>Toggle Data</button>
</div>
<div id="addResult">

</div>



<script type="text/javascript">
var file = 'file1.txt';
var gotContentYet = false;
var showOrHide = false;
//window.alert(file);
$(document).ready(function(){
	$('.button').click(function(){
		if(gotContentYet == false){
			$.post('getData.php', {file: 'file1.txt'}, function(retData) {
				var contents = retData;
				gotContentYet = true;
				$("#addResult").append(retData);
			});
		}
		if(gotContentYet == true) {
			if(showOrHide == false) {
				$('#addResult').hide();
				showOrHide = true;
			}
			else if(showOrHide == true) {
				$('#addResult').show();
				showOrHide = false;
			}
		} 
	});
});	



</script>