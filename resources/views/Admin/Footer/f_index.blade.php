@extends('Admin.layout1.main');
@section('content')
<main class="app-content">
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="msg">{{ Session::get('message') }}</p>
    @endif
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Footer</h1>
        {{-- <p>Start a beautiful journey here</p> --}}
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Admin/Footer</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="card">
                <div class="card-header text-center text-uppercase">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="float-left" style="padding-top: 12px;"><b><i>Footer Deatils</i></b></label>
                    </div>
                    <div class="col-md-6">
                      <a href="{{route('Footer_create')}}" style="float: right;color: black;" class="btn btn-sm">Add Footer Details</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover" id="mytable">
                        <thead>
                          <tr>
                            <th><b>#</b></th>
                            <th><b>Heading</b></th>
                            <th><b>Paragraph</b></th>
                            <th><b>Designed By</b></th>
                            <th><b>Action</b></th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                </div>
                <div class="card-footer"></div>
              </div>
          </div>
        </div>
      </div>
    </div>
</main>
<script>
  $(function() {
    $("#msg").hide(3000);
  });
  $(document).ready(function() {
    $('#mytable').DataTable();
} );
</script>
@endsection
