@extends('layouts.app')
@section('anotherCSS')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/AdminLTE/plugins/DataTables/datatables.min.css')}}">
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
		<a class="btn btn-sm btn-primary" href="#"><span class="glyphicon glyphicon-plus"></span> Thêm mới</a>


    <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li> -->
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
              <th>{{ trans('commons.Name')}}</th>
              <th>{{ trans('commons.Address')}}</th>
              <th>{{ trans('commons.Status')}}</th>
              <th>{{ trans('commons.MainContact')}}</th>
              <th>{{ trans('commons.MainPhoneContact')}}</th>
              <th>{{ trans('commons.Owner')}}</th>
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
</section>
<!-- /.content -->
@endsection
@section('anotherScripts')
<!-- DataTables -->
<script src="{{ asset('public/AdminLTE/plugins/DataTables/datatables.min.js')}}"></script>
<script type="text/javascript">
  $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')} });
  var dttb = $('#tblDatatable').DataTable ( {
    processing: true,
    serverSide: true,
    ajax: "{{ route('AjaxCustomerData')}}",
    columns: [
      {data: 'name'},
      {data: 'address'},
      {data: 'status'},
      {data: 'owner'},
      {data: 'owner',className:'text-center',width: '37px'},
      {data: 'owner'},
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
</script>
@endsection
