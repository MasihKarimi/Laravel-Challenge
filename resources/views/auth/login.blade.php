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
    <title>Dog Breeds | Login</title>
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
            <h1>Login</h1>

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
             <div class="col-lg-3"></div>

            <!-- Post Content Column -->
            <div class="col-lg-6  offset-lg-2 ">
                <h2 class="mb-5 text-center">Dog Breeds | Login</h2>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email"  class="form-control border2" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password"  class="form-control border2" id="password" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-tertiary">Login</button>
                    </div>
                </form>
                <hr>
                <div class="col-lg-8 bg-light" style="width: 100%;height: 250px;padding: 20px">
                    <h5>Login Credentials</h5>
                    <hr>
                   <p><Strong>Email: </Strong> admin@dog-breeds.com</p>
                   <p><Strong>Password: </Strong> ********</p>
                    <button  type="button" onClick="copycredentials()" class="btn btn-primary btn-sm" style="padding: 3px">Copy Credentials</button>
                </div>

            </div>
            <div class="col-lg-3"></div>
            <!-- /page-with-sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /page -->
@include('layout.scripts')
<script>
    function copycredentials() {

      $("#email").val('admin@dog-breeds.com');
      $("#password").val('admin123');

    }
</script>
</body>
</html>
