
	$('#submit').click(function(){
		// $('#name')
		var username = $('#name').val();
		var message = $('#message').val();

		$.get('load.php', {usernffame:username, message:message}, function(data){
			$('#showdata').html(data);
		}  )

	});
