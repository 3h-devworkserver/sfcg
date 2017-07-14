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
	}



// 	$('.daterange').daterangepicker({
//          "locale": {
//         "format": "YYYY-MM-DD",
//         "separator": " - ",
//     },
// 	singleDatePicker: true,

// });

$(document).on('change', '.select-act-type', function(){
  var tmp = $(this).val();
  if (tmp == 'others') {
    $('.act-others').removeClass('hide');
  }else{
    $('.act-others').addClass('hide');
    $('input[name="act_others"]').val('');
  }
});

$(document).on('change', '.tgroup', function(){
  var tmp = $(this).val();
  if (tmp == 'others') {
    $('.tgroupText').removeClass('hide');
  }else{
    $('.tgroupText').addClass('hide');
    $('input[name="tg_others"]').val('');
  }
});


	var counter = 0;
    $(document).on('click','.addmorebtn_i_partners', function() {
    counter++;

        // var html = $('.add_i_partners').html();
        // $('#i_partners').append(html);
       
        // });

        var html = $('.add_i_partners').html();
        $('.test2').append(html);
       
        });

    var counter1 = 0;
    $(document).on('click','.addmorebtn_c_partners', function() {
    counter1++;

        var html = $('.add_c_partners').html();
        // $('#c_partners').append(html);
       
        // });
        $('.test1').append(html);
       
        });

    var counter2 = 0;
    $(document).on('click','.addmorebtn_r_persons', function() {
    counter2++;

        // var html = $('.add_r_persons').html();
        // $('#r_persons').append(html);
       
        // });
        var html = $('.add_r_persons').html();
        $('.test3').append(html);
       
        });

    

});


function readLogoURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
		  $('#previewLogo').attr('src', e.target.result).removeClass('hide');
		  $("#img-preview").hide();
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		$('#previewLogo').addClass('hide').attr('src', 'url(\'\')');
	}
}

function readFaviconURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#previewFavicon').attr('src', e.target.result).removeClass('hide');
      $("#img-preview2").hide();
    }
    reader.readAsDataURL(input.files[0]);
  }else{
    $('#previewFavicon').addClass('hide').attr('src', 'url(\'\')');
  }
}