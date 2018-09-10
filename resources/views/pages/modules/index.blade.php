@extends('layouts.app')
@section('anotherCSS')
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('public/AdminLTE/plugins/DataTables/datatables.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/AdminLTE/plugins/DataTables/Buttons-1.5.1/css/buttons.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/AdminLTE/plugins/DataTables/RowReorder-1.2.3/css/rowReorder.dataTables.min.css')}}">
	<!-- Switchery Toggle -->
	<link rel="stylesheet" href="{{ asset('public/AdminLTE/plugins/switchery-master/dist/switchery.css') }}">
	<!-- Select2 -->
	<link rel="stylesheet" href="{{ asset('vendor/almasaeed2010/adminlte/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
@section('htmlheader_title') {{ $module->label}} @endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{ $module->label}}
    <small>{{ $module->description}}</small>
  </h1>
  <div class="breadcrumb">
		<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><span class="glyphicon glyphicon-plus-sign"></span> Thoa tác
		<span class="fa fa-caret-down"></span></button>
		<ul class="dropdown-menu pull-right">
			<li><a href="#">Thêm loại khách hàng</a></li>
			<li><a href="#">Thêm lĩnh vực hoạt động</a></li>
			<li><a href="#">Thêm phân loại khách hàng</a></li>
			<li class="divider"></li>
			<li><a href="#">Xuất ra (PDF)</a></li>
			<li><a href="#">Nhập vào (CSV)</a></li>
		</ul>
    <button id="btnAdd" name="btnAdd" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> {{ trans('commons.addNew') }}</button>
  </div>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <table id="tblDatatable" class="table table-bordered table-hover table-striped dataTable display">
            <thead style="background-color: #dff0d8">
	            <tr>
	              <th class="dt-head-center">#</th>
								<th>{{ trans('commons.label')}}</th>
	              <th>{{ trans('commons.name')}}</th>
	              <th>{{ trans('modules.parent')}}</th>
								<th>{{ trans('commons.menu')}}</th>
	              <th>{{ trans('commons.description')}}</th>
	              <th></th>
	            </tr>
            </thead>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div class="modal fade" id="modalQuickAdd" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<h4 class="modal-title" id="myModalLabel"></h4>
  			</div>
  			<form id="frmData" name="frmData" method="POST">
  			<div class="modal-body">
  				<div class="box-body">
  					<div class="mainContent">
            	<div class="form-group divName">
  							<label for="Name">{{ trans('commons.name') }}</label>
  							<input type="text" id="Name" name="Name" class="form-control" placeholder="{{ trans('commons.input').' '.trans('commons.name') }}">
  							<span class="help-block hidden msgName"></span>
  						</div>
  						<div class="form-group divLabel">
  							<label for="Label">{{ trans('commons.label') }}</label>
  							<input type="text" id="Label" name="Label" class="form-control" placeholder="{{ trans('commons.input').' '.trans('commons.label') }}">
  							<span class="help-block hidden msgLabel"></span>
  						</div>
  						<div class="row">
  							<div class="col-lg-6">
                  <div class="form-group divIcon">
      							<label for="Icon">{{ trans('commons.icon') }}</label>
      							<input type="text" id="Icon" name="Icon" class="form-control" placeholder="{{ trans('commons.input').' '.trans('commons.icon') }}">
      							<span class="help-block hidden msgIcon"></span>
      						</div>
                </div>
  							<div class="col-lg-6">
                  <div class="form-group divUrl">
      							<label for="Url">{{ trans('commons.url') }}</label>
      							<input type="text" id="Url" name="Url" class="form-control" placeholder="{{ trans('commons.input').' '.trans('commons.url') }}">
      							<span class="help-block hidden msgUrl"></span>
      						</div>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-lg-6">
                  <div class="form-group divParent">
                    <label for="Parent">{{ trans('commons.select').' '.trans('commons.module').' '.trans('commons.parent') }}</label>
										<select id="Parent" class="form-control select2 select_parent" data-placeholder="{{ trans('commons.Selectitem').' '.trans('commons.parent') }}" style="width:100%">
                      <option value="0">{{ trans('commons.noSelect')}}</option>
                      @foreach($modules as $m)
                      <option value="{{ $m->id }}">{{ $m->label }}</option>
                      @endforeach
                    </select>
										<span class="help-block hidden msgParent"></span>
                  </div>
  							</div>
                <div class="col-lg-6">
                  <div class="form-group divIsMenu">
                    <label for="IsMenu">
                      <input id="IsMenu" name="IsMenu" type="checkbox" class="js-switch"{{ old('IsMenu') ? ' checked' : ''}}> {{ trans('commons.show').' '.trans('commons.menu') }}
                    </label>
                  </div>
  							</div>
  						</div>
              <div class="form-group divDescription">
                <label for="Description">{{ trans('commons.description') }}</label>
                <textarea id="Description" name="Description" class="form-control" placeholder="{{ trans('commons.input').' '.trans('commons.description') }}"></textarea>
                <span class="help-block hidden msgDescription"></span>
              </div>
  					</div>
  					<div class="deleteContent">
  						<span class="deleteMessage"></span>
  					</div>
  				</div> <!-- ./box-body -->
  			</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-primary pull-left actionDetail"><i id="footer_actionDetail_button"></i> </button>
  				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('commons.close') }}</button>
  				<button type="submit" class="btn btn-success" id="btnAction"><i id="footer_action_button"></i></button>
  			</div>
  			</form>
  		</div>
  	</div>
  </div>
</section>
<!-- /.content -->
@endsection
@section('anotherScripts')
	<!-- DataTables -->
	<script src="{{ asset('public/AdminLTE/plugins/DataTables/datatables.min.js')}}"></script>
	<script src="{{ asset('public/AdminLTE/plugins/DataTables/Buttons-1.5.1/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('public/AdminLTE/plugins/DataTables/RowReorder-1.2.3/js/dataTables.rowReorder.min.js')}}"></script>
	<!-- <script src="{{ asset('public/AdminLTE/plugins/DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js')}}"></script> -->
	<!-- Switchery Toggle -->
	<script src="{{ asset('public/AdminLTE/plugins/switchery-master/dist/switchery.js') }}"></script>
	<!-- Select2 -->
	<script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/select2/dist/js/select2.min.js')}}"></script>
	<script type="text/javascript">
	// $.ajaxSetup({'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') });
	function setSwitchery(switchElement, checkedBool) {
	  if((checkedBool && !switchElement.isChecked()) || (!checkedBool && switchElement.isChecked())) {
	    switchElement.setPosition(true);
	    switchElement.handleOnchange(true);
	  }
	}
	var dttb = $('#tblDatatable').DataTable ( {
		processing: true,
		serverSide: true,
		ajax: "{{ route('AjaxModuleData')}}",
		columns: [
			{data: 'sort', width: '3%', 'className': 'dt-body-center'},
			{data: 'label'},
			{data: 'name'},
			{data: 'parent'},
			{data: 'is_menu',className:'text-center',width: '37px'},
			{data: 'description'},
			{data: 'actions',orderable: false,width: '65px',searchable: false,className: "text-center",},

		],
		rowReorder: { dataSrc: 'sort',},
		order: [[ 0, "asc" ]],
		buttons: ['copy', 'excel', 'pdf'],
		fixedHeader: true,
		scrollX: true,
		fnDrawCallback: function() {
			var elems = Array.prototype.slice.call(document.querySelectorAll('.swIsMenu'));
			elems.forEach(function(html) {
			  var switchery = new Switchery(html,{size:"small",color: '#3c8dbc'});
			});
		}
	} );
	dttb.on( 'row-reorder', function ( e, diff, edit ) {
		var result2 = diff[0].oldData + ' chuyen thanh ' + diff[0].newData + '<br>';
		result2 += diff[diff.length - 1].oldData + ' chuyen thanh ' + diff[diff.length - 1].newData
		var result = 'Reorder started on row: '+edit.triggerRow.data().name+'<br>';
		var ord = new Array();
    for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
      var rowData = dttb.row( diff[i].node ).data();
			ord.push({id: rowData.id, sort: diff[i].newData});
    }
		$.ajax({
			type: 'POST',
			url: '{{ route("ChangeSort")}}',
			data: {sort: ord, _token: '{{ csrf_token() }}'},
			success: function (data) {
				toastr[data.notification.type](data.notification.message, data.notification.title);
				dttb.ajax.reload(null, false);
			},
			error: function (data) {
				console.log('Error with data:', data);
			}
		});
  } );
	var isMenu = new Switchery($('#IsMenu')[0], { size:"small",color: '#3c8dbc' });
	$('#tblDatatable').on('click', 'span.switchery', function(event, state) {
		 var item_id = $(this).prev().attr('data-id');
		 var checkBol = ($(this).prev().prop('checked')) ? 1 : 0;
		 $.ajax({
			 type: 'POST',
			 url: '{{ url("setting/module/ajax/ChangeIsMenu/")}}' + '/' + item_id,
			 data: {checkBol,_token:'{{ csrf_token() }}'},
			 dataType: 'json',
			 success: function (data) {
				 if (data.errors) {
					 toastr[data.notification.type](data.notification.message, data.notification.title);
				 }else{
					 // dttb.ajax.reload(null, false);
					 toastr[data.notification.type](data.notification.message, data.notification.title);
				 }
				 console.log(data);
			 },
			 error: function(data) {
				 console.log('Error:', data);
			 }
		 });
	});
	$('.select2').select2();
	$('#btnAction').click(function (e) {
		e.preventDefault();
		var state = $('#btnAction').val();
		var my_url = '{{ route("module.store") }}';
		var item_id = $('#btnAction').attr('data-id');
		if (state == 'add' || state == 'update'){
			if (state == 'update') {type = 'PUT'; my_url += '/' + item_id;} else type = "POST";
			var formData = {
				Name: $('#Name').val(),
				Label: $('#Label').val(),
				Icon: $('#Icon').val(),
				Url: $('#Url').val(),
				Parent: $('#Parent').val(),
				IsMenu: ($('#IsMenu').prop('checked')) ? 1 : 0,
				Description: $('#Description').val(),
				_token: '{{ csrf_token() }}',
			};
			$.ajax({
				type: type,
				url: my_url,
				data: formData,
				dataType: 'json',
				success: function (data) {
					if (data.errors) {
						$('#modalQuickAdd').find('.has-error').removeClass('has-error');
						$('#modalQuickAdd').find('.help-block').text('');
						$('#modalQuickAdd').find('.help-block').addClass('hidden');
						for (var key in data.errors) {
							$('#modalQuickAdd').find('.div' + key).addClass('has-error');
							$('#modalQuickAdd').find('.msg' + key).text(data.errors[key][0]);
							$('#modalQuickAdd').find('.msg' + key).removeClass('hidden');
						}
					} else {
						dttb.ajax.reload(null, false);
						$('#modalQuickAdd').modal('hide');
						$('.modal-backdrop').remove();
						$('#frmData').trigger("reset");
						toastr[data.notification.type](data.notification.message, data.notification.title);
					}
					console.log(formData);
				},
				error: function(data) {
					console.log('Error when edit:', formData);
				}
			});
		}
		else if(state == "delete"){
			$.ajax({
				type: "DELETE",
				url: my_url + '/' + item_id,
				_token: '{{ csrf_token() }}',
				success: function (data) {
					console.log(data);
					dttb.ajax.reload();
					$('#modalQuickAdd').modal('hide');
				},
				error: function(data) { console.log('Error:', data);}
			});
		}
	});
	$('#btnAdd').click(function(){
		$('#footer_action_button').text(" {{ trans('commons.Add') }}");
		$('#footer_action_button').removeAttr('class');
		$('#footer_action_button').addClass('fa fa-plus');
		$('#footer_actionDetail_button').text(" {{ trans('commons.Add').' '.trans('commons.Detail') }}");
		$('#footer_actionDetail_button').addClass('fa fa-plus');
		$('#footer_actionDetail_button').show();
		$('#btnAction').addClass('btn-success');
		$('#btnAction').val('add');
		$('#btnAction').show();
		$('.modal-title').text('{{ trans("commons.Add") }}'+' '+'{{ trans("commons.module") }}');
		$('.deleteContent').hide();
		$('#frmData').find('input:text, input:password, textarea').val('');
		$('.mainContent').show();
		$('#modalQuickAdd').modal('show');
	});
	$(document).on('click', '.btnDelete', function() {
		$('#footer_action_button').text(" {{ trans('commons.Delete') }}");
		$('#footer_action_button').removeClass('fa fa-check');
		$('#footer_action_button').addClass('fa fa-trash');
		$('#btnAction').removeClass('btn-success');
		$('#btnAction').addClass('btn-warning');
		$('#btnAction').val('delete');
		$('.modal-title').text('{{ trans("commons.Delete") }}' + ' ' + '{{ $module->label}}');
		$('#btnAction').attr('data-id',$(this).data('id'));
		$('.actionDetail').hide();
		$('.mainContent').hide();
		$('.deleteMessage').html($(this).data('deletemsg'));
		$('.deleteContent').show();
		$('#modalQuickAdd').modal('show');
	});
	$(document).on('click', '.showItem', function(e) {
		e.preventDefault();
		$.ajax({
			type: "GET", url: '{{ route("module.index") }}' + '/detail/' + $(this).attr('data-id'),
			success: function (data) {
				console.log(data);
				var html = '<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">ID</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6">' + data.id + '</div></div></div>' +
					'<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">{{ trans("commons.label")}}</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6">' + data.label + '</div></div></div>' +
					'<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">{{ trans("commons.name")}}</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6">' + data.name + '</div></div></div>' +
					'<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">{{ trans("commons.description")}}</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6">' + data.description + '</div></div></div>' +
					'<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">Icon</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6"><span class="' + data.fa_icon + '"></span></div></div></div>' +
					'<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">Menu</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6">' + data.is_menu + '</div></div></div>' +
					'<div class="row"><div class="form-group"><label class="col-md-4 col-sm-6 col-xs-6">URL</label>' +
					'<div class="col-md-8 col-sm-6 col-xs-6">' + data.url + '</div></div></div>';
				$('.deleteMessage').html(html);
				$('#btnAction').hide();
				$('.modal-title').text('{{ trans("commons.Detail") }}' + ' ' + '{{ $module->label}}');
				$('.actionDetail').hide();
				$('.mainContent').hide();
				$('.deleteContent').show();
				$('#modalQuickAdd').modal('show');
			}, error: function(data) { console.log('Error:', data);}
		});
	});
	$(document).on('click', '.btnEdit', function() {
		item_id = $(this).data('id');
		$.ajax({
			type: "GET", url: '{{ route("module.index") }}' + '/detail/' + item_id,
			success: function (data) {
				console.log(data);
				$('#Name').val(data.name);
				$('#Label').val(data.label);
				$('#Icon').val(data.fa_icon);
				$('#Url').val(data.url);
				$('#Description').val(data.description);
				setSwitchery(isMenu,data.is_menu);
				$('#Parent').val(data.parent).trigger('change');
				$('#footer_action_button').text(' {{ trans("commons.Update")}}');
				$('#footer_action_button').removeAttr('class');
				$('#footer_action_button').addClass('fa fa-check');
				$('#footer_actionDetail_button').text(" {{ trans('commons.Edit') .' '.trans('commons.Detail') }}");
				$('#footer_actionDetail_button').removeAttr('class');
				$('#footer_actionDetail_button').addClass('fa fa-edit');
				$('#btnAction').removeClass('btn-danger');
				$('#btnAction').addClass('btn-success');
				$('#btnAction').addClass('edit');
				$('#btnAction').val('update');
				$('#btnAction').attr('data-id',item_id);
				$('#btnAction').show();
				$('.modal-title').text('{{ trans("commons.Edit")." ".$module->label }}');
				$('.deleteContent').hide();
				$('.actionDetail').show();
				$('.mainContent').show();
				$('#modalQuickAdd').modal('show');
			}, error: function(data) { console.log('Error:', data);}
		});

	});
	</script>
@endsection
