@extends('layouts.app')
@section('content')

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-film mr-2"></i>
                Foto
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                </ul>
            </div>
        </div>
    </nav>
    </p>
    <div class="mb-4 d-flex flex-wrap">
        <div class="mr-4 mb-2">
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/images/'.$image->image)}}" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title">Caption</h5>
                <p>{{$image->caption}}</p>
                <h5 class="card-title">Ketegori</h5>
                <p>{{$image->category}}</p>
                <div class="card-body">
                    <form action="" method="post">

                        <a href="{{route('welcome')}}" class="btn btn-primary">Back</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        @csrf
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mb-4">
    </div>
    </div>
    </div>
    <script src="js/plugins.js"></script>
    <script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
    </script>
</body>

</html>
@endsection