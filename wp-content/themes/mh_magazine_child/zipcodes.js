jQuery(function($) {
	var $zipCode = $('#zipcode').html();

	$.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + $zipCode, function(data) {
		// console.log(data.results[0].geometry.location);
		var $googleAddress =  {
			lat: data.results[0].geometry.location.lat,
			lng: data.results[0].geometry.location.lng
		};
		console.log($googleAddress);
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 4,
				center: $googleAddress
			});
			var marker = new google.maps.Marker({
				position: $googleAddress,
				map: map
			});
		}
	});


	// $('.gform_button[type="submit"]').before(
	// 	'<a id="submit-placeholder">Submit</a>'
	// ).css('visibility', 'hidden');

	// $('#submit-placeholder').click(function(){
	// 	if($('.gform_button[type="submit"]').attr('value') == 'Uploading' && $('.itsg_single_ajax').children('.progress.uploading').length > 0){
	// 		console.log('Uploading');
	// 		$(this).after('<span style="color:red; margin-left:10px">Images uploading, please try again when upload is complete</span>');
	// 	} else {
	// 		$('.gform_button[type="submit"]').click();
	// 	}
	// });
});