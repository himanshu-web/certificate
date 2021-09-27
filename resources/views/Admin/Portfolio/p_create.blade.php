@extends('Admin.layout1.main');
@section('content')
<main class="app-content">
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="msg">{{ Session::get('message') }}</p>
    @endif
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Portfolio</h1>
        {{-- <p>Start a beautiful journey here</p> --}}
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Admin/Portfolio</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="card">
                <div class="card-header text-center text-uppercase"><b><i>Add Portfolio Details</i></b></div>
                <div class="card-body">
                    <form action="" class="was-validated" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="question"><i><b>Major Heading :</b></i></label>
                          <input type="text" class="form-control" id="question" placeholder="Enter Heading Here.." name="major_heading" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="answer"><i><b>Major Paragraph :</b></i></label>
                          <input type="text" class="form-control" id="answer" placeholder="Enter Paragaraph Here.." name="majoe_paragraph" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="answer"><i><b>Image :</b></i></label>
                          <input type="File" class="form-control" id="answer" placeholder="Select Image Here.." name="image" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="answer"><i><b>Image Heading :</b></i></label>
                          <input type="text" class="form-control" id="answer" placeholder="Enter Heading for Image Here.." name="image_heading" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="answer"><i><b>Image paragraph:</b></i></label>
                          <input type="text" class="form-control" id="answer" placeholder="Enter Paragaraph for Image Here.." name="image_paragraph" required>
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
