<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset("busTravel/styles/bootstrap4/bootstrap.min.css")}} ">
<link rel="stylesheet" href="{{asset("busTravel/plugins/font-awesome-4.7.0/css/font-awesome.min.css")}}"  type="text/css">
<link rel="stylesheet" type="text/css" href=" {{asset("busTravel/plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("busTravel/plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}} ">
<link rel="stylesheet" type="text/css" href="{{asset("busTravel/plugins/OwlCarousel2-2.2.1/animate.css")}} ">
<link rel="stylesheet" type="text/css" href="{{asset("busTravel/styles/main_styles.css")}} ">
<link rel="stylesheet" type="text/css" href="{{asset("busTravel/styles/responsive.css")}} ">
<link rel="stylesheet" type="text/css" href="{{asset("public/busTravel/styles/css/bootstrap.css")}} ">
{{-- <link rel="stylesheet" type="text/css" href="{{asset("public/busTravel/styles/css/bootstrap.min.css")}} "> --}}
<link rel="stylesheet" href="{{asset("busTravel/styles/bootstrap4/style.css")}}">

</head>

<body>

  
        @include("MasterLayouts.top_bar")
        @include("MasterLayouts.header")
        
        @yield("content")
        
           
         @include("MasterLayouts.footer")
        
    

 


<script src="{{asset("busTravel/js/jquery-3.2.1.min.js")}}  "></script>
<script src="{{asset("busTravel/styles/bootstrap4/popper.js")}} "></script>
<script src="{{asset("busTravel/styles/bootstrap4/bootstrap.min.js")}} "></script>
<script src="{{asset("busTravel/plugins/OwlCarousel2-2.2.1/owl.carousel.js")}} "></script>
<script src="{{asset("busTravel/plugins/easing/easing.js")}} "></script>
<script src=" {{asset("busTravel/js/custom.js ")}}"></script>
<script src=" {{asset("busTravel/js/bootstrap.bundle.js ")}}"></script>
<script src=" {{asset("busTravel/js/style.js ")}}"></script>
{{-- <script src=" {{asset("public/busTravel/js/bootstrap.bundle.min.js")}}"></script> --}}

</body>

</html>    