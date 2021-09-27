@extends('Admin.layout1.main');
@section('content')
<main class="app-content">
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="msg">{{ Session::get('message') }}</p>
    @endif
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Header</h1>
        {{-- <p>Start a beautiful journey here</p> --}}
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Admin/Header</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="card">
                <div class="card-header text-center text-uppercase"><b><i>Add Header Details</i></b></div>
                <div class="card-body">
                    <form action="{{route('header_store')}}" class="was-validated" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="question"><i><b>Logo :</b></i></label>
                          <input type="file" class="form-control" id="question" name="logo" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="answer"><i><b>Header Name :</b></i></label>
                          <input type="text" class="form-control" id="answer" placeholder="Enter Header Name Here.." name="name" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                      </form>
                    
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
</script>
@endsection
