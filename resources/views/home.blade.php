@extends('template.main')
@section('title', 'Canyoning Baturraden')
@section('content')
<div class="container-fluid p-0">
    <div class="main text-center">
        <img class="d-block w-100 m-0" src="{{ asset('storage/assets/image/sindoro.jpg') }}" alt="">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="mt-5">GRASINDO</h1>
        <a href="" class="btn btn-primary">Booking Sekarang!</a>
    </div>
</div>
<div class="container-fluid adventage">
    <div class="row p-5 text-center">
        <div class="col-6 col-md-4">
            <h1 class="">
                <ion-icon name="accessibility"></ion-icon> 150+
            </h1>
            <p>Participants have tried this</p>
        </div>
        <div class="col-6 col-md-4">
            <h1 class="">
                <ion-icon name="happy"></ion-icon> 100+
            </h1>
            <p>Delightful testimony</p>
        </div>
        <div class="col-6 col-md-4">
            <h1 class="">
                <ion-icon name="file-tray-stacked"></ion-icon> 2
            </h1>
            <p>Frequently package</p>
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

<div class="container-fluid">
    <iframe src="https://youtube.com/embed/36TEuXajmUE?controls=1" width="100%" height="450" style="border:0;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

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
@endsection --}}
@section('script')
<script>
    var $item = $('.main');
    // var $wHeight = $(window).height();
    // $item.eq(0).addClass('active');
    $item.height(500);
    $item.addClass('full-screen');

    $('.main img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
            'background-image' : 'url(' + $src + ')',
            'background-color' : $color
        });
        $(this).remove();
    });
    // Menambahkan class 'scrolled' saat user scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#navbar-main').addClass('scrolled');
        } else {
            $('#navbar-main').removeClass('scrolled');
        }
    });
</script>
@endsection