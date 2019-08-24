@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class='container'>
    <div class='col-sm-12'>
        <form role="form" method="POST" action="{{route('home.store')}}" id="add_brand">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_brand">Tanggal Cuti</label>
                    <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input name="daterange" type="text" class="form-control pull-right" id="datepicker">
                <!-- /.input group -->
                    </div>
              <!-- /.form group -->


                </div>
                <div class="form-group">
                  <label for="kode_brand">Alasan cuti</label>
                  <textarea name="alasan_cuti" id="alasan_cuti" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>    
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Save</button>
              </div>
            </form>
    </div>
</div>
@stop

@section('js')
    $(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});

@stop