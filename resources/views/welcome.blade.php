@include('master')

@section('title', 'ok')

<body>

    <!--banner part Start-->
    <section id="full_banner" class="s1">
        <div class="slide slider1">
            <div class="banner_text">
                <h1>the camera boy</h1>
                <span><i class="fas fa-camera-retro"></i>
                    <p> Outdoor photography </p><i class="fas fa-camera-retro"></i>
                </span>
            </div>
        </div>
        <div class="slide slider2">
            <div class="banner_text">
                <h1>the camera boy</h1>
                <span><i class="fas fa-star-of-life"></i>
                    <p>Wedding photography</p><i class="fas fa-star-of-life"></i>
                </span>
            </div>
        </div>
        <div class="slide slider3">
            <div class="banner_text">
                <h1>the camera boy</h1>
                <span><i class="fas fa-star-of-life"></i>
                    <p>Newborn Photography </p> <i class="fas fa-star-of-life"></i>
                </span>
            </div>
        </div>


    </section>
    <!--banner part End-->

    <!--navbar part start-->
   @include('headfile')
    <!--navbar part end-->






    <!--quote part start-->
    <section id="full_quote">
        <div class="container-fluid">
            <div class="quote_txt">
                <div class="overlay">
                    <div class="overlay_txt">
                        <span>"Capture Your moments"</span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--quote part end-->



    <!--gallery part start-->
    <section id="home_gallery">
        <div class="container-fluid">
            <div class="row lightgallery">

                @foreach($homepages as $homepage)
                    <a href="{{ asset('homepagerow') }}/{{ $homepage->image }}" >
                        <img class="w-100 img-fluid" src="{{ asset('homepagerow') }}/{{ $homepage->image }}" alt="">

                        <div class="overlay"></div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>
    <!--gallery part end-->

    {{--<section id="home_gallery">
        <div class="container-fluid">
            <div class="row lightgallery">

                <a href="http://thecameraboy.com.au/homepagerow/1549581311.01 A- Mahe.jpg">
                    <img class="w-100 img-fluid" src="http://thecameraboy.com.au/homepagerow/1549581311.01 A- Mahe.jpg" alt="">

                    <div class="overlay"></div>
                </a>
                <a href="http://thecameraboy.com.au/homepagerow/1550245733.01 A- Mahe.jpg">
                    <img class="w-100 img-fluid" src="http://thecameraboy.com.au/homepagerow/1550245733.01 A- Mahe.jpg" alt="">

                    <div class="overlay"></div>
                </a>
                <a href="http://thecameraboy.com.au/homepagerow/1550343497.2h.jpg">
                    <img class="w-100 img-fluid" src="http://thecameraboy.com.au/homepagerow/1550343497.2h.jpg" alt="">

                    <div class="overlay"></div>
                </a>


            </div>
        </div>
    </section>--}}

    {{--<!--contact part start-->
    <section id="full_contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-10 col-md-8 full_contact_form m-auto">

                        --}}{{--@include('contactform')--}}{{--


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_contact">
                        <img class="w-100" src="{{ asset('/') }}front-end/Images/contact.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!--contact part end-->

    <!--footer part start-->
  @include('footer')
    <!--footer part end-->

@include('js')

</body>

</html>
