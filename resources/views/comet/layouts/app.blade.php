<!DOCTYPE html>
<html lang="en">



<head>
    <title>Comet | Creative Multi-Purpose HTML Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('comet/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('comet/css/style.css') }}">
    <link href="https://fonts.googleapis.com/comet/css?family=Montserrat:400,700" rel="stylesheet" type="text/comet/css">
    <link href="https://fonts.googleapis.com/comet/css?family=Raleway:300,400,500" rel="stylesheet" type="text/comet/css">
    <link href="https://fonts.googleapis.com/comet/css?family=Halant:300,400" rel="stylesheet" type="text/comet/css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-46276885-13', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
<!-- Preloader-->
<div id="loader">
    <div class="centrize">
        <div class="v-center">
            <div id="mask">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader-->
@include('comet.layouts.header')













@include('comet.layouts.page-header')


@section('main-content')

    @show



@include('comet.layouts.footer')
</body>


</html>
