$(document).ready(function(){

	$(document).on('click', 'a.submit', function(){
		if (confirm('Are you sure want to delete!!')) {
			$(this).closest('form').submit();
		}
	});



});