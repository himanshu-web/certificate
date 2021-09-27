@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="http://allfont.net/allfont.css?fonts=agency-fb-bold" rel="stylesheet" type="text/css" />
  </script>
  <style type="text/css">
    :root {
  --skintone-color: #DE9B72;
  --dark-color: #3A3D3E;
}

.main {
    height: 100%;
}

body {
  padding: 0;
  margin: 0;
  height: 100%;
}


.body {
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background-size: 140%!important;
    background-repeat: no-repeat !important;
    background-position: center !important;
}

@media (min-width: 992px) {
  .body {
      background-size: 148vh!important;
      background-repeat: no-repeat !important;
      background-position: 50% -31vh!important;
  }
}

.row {
  margin-right: 0;
    margin-left: 0;
}

.social-row {
  display: flex;
    flex-direction: column;
    right: 0;
    position: absolute;
}

@media (min-width: 768px) {
  .social-row {
    position: relative;
      flex-direction: row;
      justify-content: flex-end;
  }
}

.social-row a {
    width: 2em;
    height: 2em;
    background-repeat: no-repeat;
    background-size: contain;
    padding: 1em 0;
    z-index: 99;
    margin-bottom: 1em;
    margin-right: 1em;
}

@media (min-width: 768px) {
  .social-row a {
      width: 2.5em;
        height: 2.5em;
      padding: 1em 0;
      margin-bottom: 0;
  }
}

@media (min-width: 1200px) {
  .social-row a {
      width: 3em;
      height: 3em;
      padding: 0;
  }
}

.countach {
  font-family: countach,sans-serif;
  font-weight: 400;
  font-style: normal;
}

.tilda-petite {
  font-family: tilda-petite,sans-serif;
  font-weight: 400;
  font-style: normal;
}

.montserrat {
  font-family: montserrat, sans-serif;
  font-weight: 300;
  font-style: normal;
}

.skintone-text {
  color: var(--skintone-color);
}

.dark-text {
  color: var(--dark-color);
}

.white-text {
  color: #fff;
}

a:hover {
  color: #c2c2c2;
}

.dark-background {
  background: var(--dark-color);
}


.logo {
  width: 20vh;
}

@media (min-width: 768px) {
  .logo {
    width: 16em;
  }
}

@media (min-width: 992px) {
  .logo {
    width: 18em;
  }
}

@media (min-width: 1200px) {
  .logo {
      width: 28vh;
      height: 28vh;
  }
}

h1 {
  font-size: 4.5vh;
    letter-spacing: 4px;
    padding-top: .5em;
}

@media (min-width: 992px) {
  h1 {
    font-size: 2.75em;
  }
}

@media (min-width: 1200px) {
  h1 {
    font-size: 2em;
      letter-spacing: 5px;
  }
}

.lead {
    font-size: 1.5rem;
    padding-top: 0.5em;
}

@media (min-width: 992px) {
  .lead {
      font-size: 2rem;
      padding-top: 0.5em;
  }
}

@media (min-width: 1200px) {
  .lead {
      font-size: 2.5rem;
    padding-top: 1em;
  }
}

p.general {
    font-size: 2.5vh;
    margin-bottom: 0.5em;
    line-height: 1.25em;
}

@media (min-width: 992px) {
  p.general {
    font-size: 1.25em;
     line-height: 1.5em;
  }
}

@media (min-width: 1200px) {
  p.general {
      font-size: 1.5em;
  }
}


.inner-border {
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.outer-border {
  border: 2px solid #DE9B72;
    height: 99%;
    width: 98%;
    padding: 6px;
    margin: 0 auto;
}

@media (min-width: 992px) {
  .outer-border {
    height: 94%;
  }
}

.mid-border {
    border: 6px solid #DE9B72;
    height: 100%;
    width: 98%;
    padding: 6px;
    margin: auto;
}

.inner-border {
  position: relative;
  border: 2px solid #DE9B72;
    height: 100%;
    width: 100%;
    margin: auto;
}


/* Decorations */
.corner-decoration {
  position: absolute;
    width: 3em;
    margin: -3px;
}

@media (min-width: 768px) {
  .corner-decoration {
    width: 3.5em;
      margin: -4px;
  }
}

@media (min-width: 992px) {
  .corner-decoration {
    width: 11em;
      margin: -5px;
  }
}

@media (min-width: 1200px) {
  .corner-decoration {
    width: 13em;
      margin: -6px;
  }
}

.corner-decoration.corner-left-top {
  left: 6px;
  top: 6px;
}

.corner-decoration.corner-right-top {
  top: 6px;
  right: 6px;
   -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}

.corner-decoration.corner-right-bottom {
  right: 6px;
  bottom: 6px;
   -webkit-transform: scale(-1);
    transform: scale(-1);
}

.corner-decoration.corner-left-bottom {
  left: 6px;
  bottom: 6px;
  -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
}


.vertical-decoration {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  width: 11em;
}


@media (min-width: 768px) {
  .vertical-decoration {
    width: 16em;
  }
}


@media (min-width: 992px) {
  .vertical-decoration {
    width: 20em;
  }
}

@media (min-width: 1200px) {
  .vertical-decoration {
    width: 27em;
  }
}

.vertical-decoration.top {
  top: 0;

}

.vertical-decoration.bottom {
  bottom: 0;
  -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
}
  </style>
</head>
<body>
<div class="body " style="background-image: url();background-color: white;">
  <div >
    <div class="mid-border">
      <div class="inner-border">
          <img class="corner-decoration corner-left-top" src="{{ asset('storage/image_left_top1.png') }}">
          <img style="width: 10%;margin-left: 207px;margin-top: 2%;" src="{{ asset('storage/arunachal_pradesh.png') }}">
          <img style="width: 11%;margin-left: 42%;margin-top: -7%;" src="{{ asset('storage/e-office.png') }}">
          <img style="width: 8%;margin-left: 78%;margin-top: -7%;" src="{{ asset('storage/it1.png') }}">
          {{-- <img  src="{{ asset('storage/border4.jpg') }}"> --}}
          <img class="corner-decoration corner-right-top" src="{{ asset('storage/image_left_top1.png') }}">
          <img class="corner-decoration corner-right-bottom" src="{{ asset('storage/image_left_top1.png') }}">
          <img class="corner-decoration corner-left-bottom" src="{{ asset('storage/image_left_top1.png') }}">
           <!-- Page Content -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <h1><center style="color:red;">CERTIFICATE OF TRAINING</center></h1>
              <P><center style="font-size: 23px;"><b>This is to certify that</b></center> </P>
              <pre style="font-family: 'Agency FB';font-size: 30px;"><center>                  Of                           Department, Govt A.P</center></pre>
             <hr size="4" width="50%" color="#bdb8b8">
              <P style="font-size: 23px;"><b>has attended the eOffice training programme</b></P>
              
              <p style="font-size: 23px;"><b>on ___________ at eOffice Traning Hall,Civil Secretariat,Itanagar</b></p>

              <p style="font-size: 23px;"><b>and is considered _____ based on the mark scored ________ Marks in the test. </b></p>
               <div>
                 <img src="{{ asset('storage\image.png') }}" alt="" >
               </div>
            </div>
            <table>
              <tr>
                <td style="width: 16%;"><img src="{{ asset('storage\user_eoffice.jpg') }}" alt="" style="margin-left: 125%;width:44%;"> </td>
                <td style="padding-left: 11%;">
                  <div  style="border-left: 3px solid black;height: 53px;">
                  
                </td>
                <td >
                    
                  </div>
                  <strong style="margin-left: 14%;">eOffice Arunachal:</strong><a style="color:blue;">https://arunachal.eoffice.gov.in</a>
                 ||
                  <strong>For Support:</strong><a style="color:blue;">eoffice-arm@gov.in</a>, <strong>EPABX:</strong>3229
                </td>

              </tr>
              <tr>
                <td rowspan="2"></td>
              </tr>
            </table>
             <hr size="4" width="80%" color="yellow">
             <pre style="font-size: 20px;margin-left: 63px;"><b>
               Department of IT & C                                     Department of Administrative Reforms
               Govt. of Arunachal Pradesh                                 Govt. of Arunachal Pradesh
             </b></pre>
             {{-- <p style="margin-left: 75px;"><center><strong>NB:</strong>This is a Computer-generated certificate and no signature is required</center></p> --}}
          </div>
      </div>
    </div>
  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
    </body>
</html>
@endsection 
