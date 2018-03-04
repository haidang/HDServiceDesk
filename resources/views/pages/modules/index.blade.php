@extends('layouts.app')
@section('anotherCSS')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/css/datatables-addon.css')}}">
<link rel="stylesheet" href="{{ asset('public/css/rowReorder.dataTables.css')}}">
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
          <table id="example1" class="table table-bordered table-hover table-striped dataTable display">
            <thead style="background-color: #dff0d8">
            <tr>
              <th class="dt-head-center">ID</th>
              <th>{{ trans('commons.name')}}</th>
              <th>{{ trans('modules.parent')}}</th>
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
</section>
<!-- /.content -->
@endsection
@section('anotherScripts')
<!-- DataTables -->
<script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('public/js/dataTables.rowReorder.js')}}"></script>
<script>
$(document).ready(function() {
  $('#example1').DataTable( {
      processing: true,
      serverSide: true,
      rowReorder: {
        dataSrc: 'id'
      },
      ajax: "{{ route('getAjaxModuleData')}}",
      columns: [
				{data: 'id', width: '3%', 'className': 'dt-body-center'},
        {data: 'label'},
        {data: 'parent'},
        {data: 'description'},
        {data: 'actions', orderable: false, width: '60px', searchable: false}
      ],
      buttons: [
        'copy', 'excel', 'pdf'
      ],
      fixedHeader: true,
      scrollX: true,
  } );
} );
</script>
@endsection
