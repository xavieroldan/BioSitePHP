 @extends('layouts.main')
 @section('xm_navbar') 
 @endsection 
 
 @section('body')  
<div class="container-fluid ">
    <!--Title-->
    <div class="row ">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 style="font-size:10vw;">XAVI.R</h1>
            </div>
      </div>
    </div>
    <!--Title-->
<!--Text description-->
@include("random_text",["text"=>$text])
<!--Text description-->
    <!--Profile photo-->
    <div class="row text-center">
        <div class="col-md-12  ">
            <div class="d-none d-xl-block">
                <!--Big image-->
                <img alt="Xavi face" src="/../css/img/face_xavi.jpg" class="rounded-circle">
            </div>
            <div class="d-block d-xl-none">
                <!--Little image-->
                <img alt="Xavi face xs" src="/../css/img/face_xavi_xs.jpg" class="rounded-circle">
            </div>
        </div>
    </div>
    <!--Profile photo-->
</div>
@endsection
@section('footer_navbar') 
@include("rrss")
@endsection