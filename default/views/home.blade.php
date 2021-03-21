<section class="hero-area">
    <div class="hero-shape position-absolute">
        <img src="{{theme_asset('img/hero-shape-svg.svg')}}" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 col-md-8 col-sm-9 order-lg-2">
                <img src="{{theme_asset('img/hero-image.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 order-lg-1">
                <div class="hero-content">
                    <h1>{{$data->heading}}</h1>
                    <p>{{$data->content}}</p>
                    <div class="hero-btn">
                        <a href="{{trans_url('about-us.html')}}" class="btn btn-theme">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="feature-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="feature-card-wrapper">
                    {!!Block::display('features')!!}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2  col-md-9 col-sm-10">
                <div class="content-img-group">
                    <img src="{{theme_asset('img/content-img1.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="content-text">
                    <h2 class="title">Save time on development.</h2>
                    <p>Create custom landing pages with Lavalite that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    <div class="content-btn">
                        <a href="about.html" class="btn btn-theme">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>