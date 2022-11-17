$(document).ready(function () {
    $('#role_id').change(function () {
        var role_id = $(this).val();
        if (role_id == 'vendor') {
            $('#paymentInfo').removeClass('hidden');
            $('#paymentInfo').addClass('show');
        } else {
            $('#paymentInfo').removeClass('show');
            $('#paymentInfo').addClass('hidden');
        }
    });
   // light box
	 	myTheme.lightbox = function () {
			lightbox.option({
				'resizeDuration': 200,
				'wrapAround': true
			});
		};
});
