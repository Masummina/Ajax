$(document).ready(function(){
	$('#person').click(function(){
		//var username = $('#username').val();
		var person = $('#person').val();
		$.ajax({
			url:'check/checked.php',
			data:{person:person},
			method:'POST',
			dataType:'text',
			success:function(data){
				$('#showdata').html(data);
			}

		});
	});
});