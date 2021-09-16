<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- page title -->
    <title>Dog Breeds | Read Me</title>
      @include('layout.styles')
</head>
<!-- ==== body starts ==== -->
<body id="top" data-spy="scroll" data-offset="190">

<!-- Preloader  -->
@include('layout.preloader')

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid overlay-primary" style="background-image: url({{asset('img/jumbotron.jpg')}})">
    <div class="container" >
        <!-- jumbo-heading -->
        <div class="jumbo-heading">
            <h1>Read Me</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Learn How to Setup and Test the Project</li>
                </ol>
            </nav>
            <!-- /breadcrumb -->
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- SVG divider-->
<div class="divider-zindex-top">
    <img src="{{asset('img/svg/top-divider.svg')}}"  alt=""/>
</div>
<!-- /SVG divider-->
<!-- ==== Page Content ==== -->
<div class="page">
    <div class="container">
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8  page-with-sidebar right">
                <h3 class="mb-5">About Dog Breeds Website</h3>
                <!-- Image -->
                <p class="lead">Dog Breed is a simple laravel based application where we are fetching random dog breeds from dog breeds api. </p>
                <h6 class="mt-5">Application Main Features:</h6>
                <ul>
                    <li>Fetching Data from API</li>
                    <li>Authentication</li>
                    <li>Refresh the Page for new data using AJAX</li>
                    <li>Feature Testing and Unit Testing</li>
                </ul>
                <h6 class="mt-5">How to Setup Application:</h6>
                <ul>
                    <li>Clone the source code from <code><a href="https://github.com/MasihKarimi/Laravel-Challenge" target="_blank">This Github Repository</a></code></li>
                    <li>After cloning the source code navigate to the main source code directory using cdm</li>
                    <li>Run  <code>composer install</code> or <code>composer update</code></li>
                    <li>Run  <code>cp .env.example .env</code></li>
                    <li>Now open source code in a code editor and setup the database credentials in <code>.env</code> file</li>
                    <li>Generate Application Key Using <code>php artisan key:generate</code> command</li>
                    <li>Run the database migrations  <code>php artisan migrate</code> command</li>
                    <li>Your Ready to go run <code>php artisan serve</code></li>
                    <li>For testing the application run <code>php artisan test</code></li>
                </ul>
                <p><Strong>Note: </Strong>You may face the <br>
                <code>GuzzleHttp \ Exception \ RequestException cURL error 60: SSL certificate problem: unable to get local issuer certificate (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)</code>
                error it's because of the Guzzle Http Package which I used for fetching the api data <br>
                    You can solve it by downlading the <a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html">File</a> and add it to your php.ini file.
                </p>

                <p class="lead">Thanks :)</p>

            </div>
            <!-- /page-with-sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /page -->

<!-- ==== footer ==== -->
@include('layout.footer')
<!--/ footer-->
@include('layout.scripts')

</body>
</html>
