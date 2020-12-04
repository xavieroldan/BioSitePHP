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
    <div class="row" >
        <div class="col-md-2 ">
            <br>
            <br>
            <br>
        </div>
        <div class="col-md-8">                    
            @foreach ($home_texts as $item) 
            <p class="text-center lead">
                {{ $item->text }}
            </p>
                @endforeach   
        </div>
        <div class="col-md-2 ">
        </div>
    </div>
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
<!--RSS-->
<div class="row align-items-center">
    <div class="col-md-12 text-center">
        <div class="d-none d-xl-block">
            <a href="http://www.linkedin.com/in/xavierroldan" role="button" class="btn fab fa-linkedin fa-5x "></a>
            <!--GitHub    -->
            <a href="https://github.com/xavieroldan" role="button" class="btn fab fa-github fa-5x"></a>
            <!--LinkedIn  -->
        </div>
        <div class="d-block d-xl-none">
            <a href="http://www.linkedin.com/in/xavierroldan" role="button" class="btn fab fa-linkedin fa-3x "></a>
            <!--GitHub    -->
            <a href="https://github.com/xavieroldan" role="button" class="btn fab fa-github fa-3x"></a>
            <!--LinkedIn  -->
        </div>
    </div>
</div>
<!--RSS-->
 @endsection