<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Foto</title>
    <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/templatemo-style.css')}}">
    <link rel="stylesheet" href="{{asset('custom.css')}}">
</head>
<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                Gallery Foto
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link nav-link-2" href="welcome">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="login">Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="register">Register</a>
                </li>
            </ul>
            </div>
        </div>
</nav>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
               Foto
            </h2>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        @foreach($data as $image)
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{asset('storage/images/'.$image->image)}}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Klik</h2>
                        <a href="{{route('detail', $image->id)}}">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{$image->caption}}</span>
                    <!-- <span>9,906 views</span> -->
                </div>
            </div>
            @endforeach
    <script src="{{asset('master/js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
