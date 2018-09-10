$.ajaxSetup({
  headers: {
	  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$('.sidebar-menu').tree({});
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
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}


