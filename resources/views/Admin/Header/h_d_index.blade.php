@extends('Admin.layout1.main');
@section('content')
<main class="app-content">
    
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Record</h1>
        {{-- <p>Start a beautiful journey here</p> --}}
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Admin/Record</a></li>
      </ul>
    </div>
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="card">
                <div class="card-header text-center text-uppercase">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="float-left" style="padding-top: 12px;"><b><i>Record Details</i></b></label>
                    </div>
                    <div class="col-md-6">
                      <form action="{{route('importRecord')}}" method="post" enctype="multipart/form-data" id="form">
                        @csrf
                       <input type="file" id="file" name="uploadImport" class="btn btn-sm btn-info pull-right" >
                        {{-- <button  onclick="document.getElementById('file').click()" >Submit</button> --}}
                      </form>
                      {{-- <a href="{{}}" style="float: right;color: black;" class="btn btn-sm">Upload record</a> --}}
                    </div>
                  </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                      <table class="table table-hover" id="mytable">
                        <thead>
                          <tr>
                            <th><b>#</b></th>
                            <th><b>Name</b></th>
                            <th><b>Department</b></th>
                            <th><b>Performance</b></th>
                            <th><b>Mobile</b></th>
                            <th><b>Date</b></th>
                            <th><b>Action</b></th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                            $count = 1;
                          @endphp
                          @foreach($data as $value) 
                            <tr>
                              <td>{{$count++}}</td>
                              <td>{{$value->name_of_offician}}</td>
                              <td>{{$value->department}}</td>
                              <td>{{$value->performance}}</td>
                              <td>{{$value->mobile}}</td>
                              <td>{{$value->date}}</td>
                              <td class="d-flex">
                                <form action="{{route('show',$value->id)}}" method="post">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$value->id}}">
                                  <button class="btn btn-success btn-sm" type="submit">View</button>
                                </form>
                                <form action="{{route('destroy',$value->id)}}" method="post">
                                  @csrf
                                  <button type="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
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

  document.getElementById("file").onchange = function() {
    document.getElementById("form").submit();
};
</script>
@endsection
