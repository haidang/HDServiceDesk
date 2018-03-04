
$(document).ready(function () {
  $('.sidebar-menu').tree({
    // Any options here
  })
})
$('#sidebarToggle').on('click', function(e) {
	$.ajax({
		type: "POST",
		url: urlStoreSidebarState,
		data: { _token: CSRF_TOKEN },
		success: function(response) {
			//
		},
			error: function() {
			console.log('error');
		}
	});
});
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
  }

