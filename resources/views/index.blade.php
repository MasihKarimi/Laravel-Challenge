<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Dog Breeds Web App">
    <meta name="author" content="Masih Karimi">
    <!-- page title -->
    <title>Dog Breeds | Home</title>

    @include('layout.styles')
</head>
<!-- ==== body starts ==== -->
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="190">

<!-- Preloader  -->
@include('layout.preloader')
<!--/Preloader ends -->

<!-- ==== Page Content ==== -->
<!-- Header Section -->
<section id="header1-section" class="header-image container-fluid bg-fixed"
         data-center="background-position: 50% 0px;"
         data-top-bottom="background-position: 50% -100px;"
         style="background-image: url({{asset('img/header/header1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-7 header1-text text-center"  data-aos="fade-down"  data-200="opacity:1;" data-300="opacity:0;">
                <h1 class="text-primary mb-3"><span>Welcome to</span> Dog Breeds</h1>
                <p class="lead mb-4"> If you are a dog lover you can find all dog breeds in this website </p>

            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>
<!-- /section ends-->
<!-- SVG divider-->
<div class="divider-zindex-top">
    <img src="{{asset('img/svg/top-divider.svg')}}"  alt=""/>
</div>
<!-- /SVG divider-->

<!-- Dog Breeds section -->
<section id="feature-section" class="no-bg-small" data-start="background-position:120% bottom;"
         data-end="background-position:90% bottom;">
    <div class="container"  >
        <!-- section heading -->
        <div class="section-heading">
            <h2>Discover Dog Breeds! <i class="flaticon-dog-6"></i></h2>
        </div>
        <!-- /section-heading -->
        <!-- features row -->
        <div class="row wide-xl " id="breed">

                <div class="col-lg-10 offset-lg-2">
                    <div class="feature-with-icon" data-aos="flip-up" >

                        <h5> Popular Dog Breeds:
                            @foreach($breeds as $breed)
                            <strong>{{ucfirst($breed) . '-'}}</strong>
                            @endforeach
                        </h5>

                    </div>
                </div>

        </div>
           <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <button  onClick="getRandomBreeds()" class="btn btn-tertiary mt-3">Refresh The List</button>
            </div>
            <!-- /col-l -->
        </div>
        <!-- /row-->
    </div>
    <div class="test">

    </div>
    <!-- /container -->
</section>
<!-- /section ends -->
<!-- footer -->
@include('layout.footer')
<!--/ footer-->

<!-- Script Files -->
@include('layout.scripts')

<script>
    // function to get a random breeds for the api attached with the refresh button
    function getRandomBreeds()
    {
        //ajax call to refresh the list without page loading
        $.ajax({
            url: 'https://dog.ceo/api/breeds/list/random/5', //our fresh list url with 5 random breeds
            data: {"token_": '{{Session::token()}}'}, //token with each request to the api
            type: 'get',
            success: function (data) {
                // clear the child elements of wrapper div with id of breed in order to load new list
                $('#breed').empty();
                // replace the comma with - in the returned list
                 breeds = data.message.join(' - ');
                 // put the returned list in html structure
                 info = "<div class='col-lg-10 offset-lg-2' >" + "<div class='feature-with-icon' data-aos='flip-up' >" +  "<h5>" + "Popular Dog Breeds: " + "<strong>"+    breeds  + "</strong>"+"</h5>" + "</div>" +"</div>"
               // append the list to the wrapper div
                $('#breed').append(info)
            },
            error: function(data){
                //handle errors here
                console.log('something went wrong',data)
            }
        });

    }
</script>
</body>
</html>
