$(document).ready(function(){
	$('#usernames').blur(function(){
		var usernames = $('#usernames').val();
		$.ajax({
			url:'./check/checked.php',
			data:{usernames:usernames},
			dataType:'text',
			method:'POST',
			success:function(data){
				$('#showdata').html(data);
			}


		});
	});
});