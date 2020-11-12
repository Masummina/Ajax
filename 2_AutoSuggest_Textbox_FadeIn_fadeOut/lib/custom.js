$(document).ready(function(){
	$('#username').keyup(function(){
		//var username = $('#username').val();
		var person = $('#username').val();
		if(person != ""){
			$.ajax({
				url:'check/checked.php',
				data:{person:person},
				method:'POST',
				dataType:'text',
				success:function(data){
					$('#showdata').fadeIn();
					$('#showdata').html(data);
				}

			});
		}
		
	});
	$(document).on('click', 'li', function(){
		$('#username').val($(this).text());
		$('#showdata').fadeOut();
	});

});