jQuery(document).ready(function($) { 
	$('.input-box input[type="checkbox"]').change(function() {
		var isChecked = $(this).prop('checked');
		var $submitButton = $(this).closest('form').find('button[type="submit"]');
		$submitButton.prop('disabled', !isChecked);
	});
});