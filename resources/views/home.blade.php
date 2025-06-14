@extends('template.main')
@section('title', 'GRASINDO')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('storage/assets/image/carousel1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/assets/image/carousel2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('storage/assets/image/carousel3.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<div class="container-fluid adventage">
    <h1 class="mb-0 mt-4 text-center">
        Fasilitas
    </h1>
    <div class="row px-5 pb-5 pt-2 mt-4 text-center">
        <div class="col-lg-2 col-md-6 col-sm-6">
            <h1 class="icon">
                <i class="fas fa-restroom"></i>
            </h1>
            <p>Toilet</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <h1 class="icon">
                <i class="fas fa-parking"></i>
            </h1>
            <p>Parkir</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <h1 class="icon">
                <i class="fas fa-store-alt"></i>
            </h1>
            <p>Warung</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <h1 class="icon">
                <i class="fas fa-mosque"></i>
            </h1>
            <p>Mushola</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <h1 class="icon">
                <i class="fas fa-motorcycle"></i>
            </h1>
            <p>Ojek</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <h1 class="icon">
                <i class="fas fa-home"></i>
            </h1>
            <p>Tempat Singgah</p>
        </div>
    </div>
</div>
{{-- <div class="container-fluid package">
    <h1 class="text-center mt-5">Package</h1>
    <p class="text-center">Most wanted package by others</p>
    <div class="row mt-5 mb-0">
        @foreach ($package as $p)
        <div class="col-md-4 mb-1">
            <div class="card mb-0" style="background-image: url('{{ asset('assets/img/background.jpg') }}');">
                <div class="card-body" style="z-index: 2;">
                    <h2 class="card-title">{{ $p->name }}</h2>
                    <hr style="border: red 1px solid;">
                    <p class="card-text text-white"><b>Location:</b> {{ $p->location }}</p>
                    <p class="card-text text-white"><b>Level:</b> {{ $p->level }}</p>
                    <p class="card-text text-white"><b>Experience:</b> {{ $p->experience }}</p>
                    <p class="card-text text-white"><b>Fitness:</b> {{ $p->fitness }}</p>
                    <p class="card-text text-white"><b>Swimming Abilities:</b> {{ $p->swimming_abilities }}</p>
                    <p class="card-text text-white"><b>Time:</b> {{ $p->time }}</p>
                    <p class="card-text text-white"><b>Approach:</b> {{ $p->approach }}</p>
                    <p class="card-text text-white"><b>Return:</b> {{ $p->return }}</p>
                    <div class="row justify-content-center">
                        @if ($p->min_age)
                        <div class="col-md-3 m-0 p-0">
                            <img src="{{ asset('assets/img/age.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->min_age }}
                            </small>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        @if ($p->swing_change)
                        <div class="col-md-3 m-0 p-0 border-right border-success">
                            <img src="{{ asset('assets/img/swing.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->swing_change }}
                            </small>
                        </div>
                        @endif
                        @if ($p->jump_change)
                        <div class="col-md-3 m-0 p-0 border-right border-success">
                            <img src="{{ asset('assets/img/jump.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->jump_change }}
                            </small>
                        </div>
                        @endif
                        @if ($p->swim_change)
                        <div class="col-md-3 m-0 p-0 border-right border-success">
                            <img src="{{ asset('assets/img/swim.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->swim_change }}
                            </small>
                        </div>
                        @endif
                        @if ($p->slide_change)
                        <div class="col-md-3 m-0 p-0 border-right border-success">
                            <img src="{{ asset('assets/img/slide.png') }}" class="img-fluid mb-3" alt="Responsive image"
                                style="width: 50px; height: 50px;"> <br>
                            <small class="card-text mt-5 text-white">
                                {{ $p->slide_change }}
                            </small>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-3 mb-5">
        <div class="col text-center">
            <a href="/package-tour" class="btn btn-outline-success">
                Read More
            </a>
        </div>
    </div>
</div> --}}

{{-- <div class="container-fluid">
    <iframe src="https://youtube.com/embed/36TEuXajmUE?controls=1" width="100%" height="450" style="border:0;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> --}}

{{-- <div class="parallax-section mt-5">
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/img/parallax.jpg') }}">
        <div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($testimonial as $index => $t)
                <div class="carousel-item {{ $index === 0 ? 'active' : ''}} text-center" style="min-height: 250px;">
                    <blockquote class="blockquote text-center text-white py-5 mt-5">
                        <small class="mb-0">{{ $t->message }}</small>
                        <footer class="blockquote-footer text-success mt-2">{{ $t->name }}, <cite
                                title="Source Title">{{ $t->from }}</cite>
                        </footer>
                    </blockquote>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
--}}
@endsection
@section('script')
<script>
</script>
@endsection
