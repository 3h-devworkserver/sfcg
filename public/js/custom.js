$(document).ready(function(){

/** ==== Generic anchor tag to submit form ==== **/
	$(document).on('click', 'a.submit', function(){
		if (confirm('Are you sure want to delete!!')) {
			$(this).closest('form').submit();
		}
	});

/** ==== Display district according to zone ==== **/
	$(document).on('change', '.zone', function(){
  		var zone_id = $(this).val();
  		$('.district option').removeClass('hide');
  		$('.district option').each(function(){
  			if (zone_id != $(this).attr('data-attr')) {
		    	$(this).addClass('hide');
		    }
		    $('.district option').first().removeClass('hide');
		   $('.district').val('');
		});
	});

	var zone_id = $('.zone').val();
	if(zone_id != ''){
		$('.district option').removeClass('hide');
  		$('.district option').each(function(){
  			if (zone_id != $(this).attr('data-attr')) {
		    	$(this).addClass('hide');
		    }
		});
		$('.district').val($('.district').attr('data-district'));
		// var district_id = $('.district').attr('data-district');
		// // alert(district_id);
		// $('.district option').each(function(){
		// 	console.log($('.district option'));
		//     if($(this).attr('value') == district_id){
		//     	alert($(this).val());
		//     }
		// });
	}

// 	$('.daterange').daterangepicker({
//          "locale": {
//         "format": "YYYY-MM-DD",
//         "separator": " - ",
//     },
// 	singleDatePicker: true,

// });




	var counter = 0;
    $(document).on('click','.addmorebtn', function() {
    counter++;

        var html = $('.add').html();
        $('#i_partners').append(html);
       
        });

});