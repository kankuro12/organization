@extends('front.layout')
@section('meta')
    @includeIf('front.cache.home.meta')
@endsection
@section('content')
    @includeIf('front.cache.home.slider')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-7">
                @includeIf('front.cache.home.notices')
            </div>
            <div class="col-md-5">
                @includeIf('front.cache.home.members')
            </div>
        </div>

    </div>

    @php
        $donationSetting = getSetting('donation');
    @endphp
    @if (isset($donationSetting->title))
        <div id="homedonate">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="title">
                            {{$donationSetting->title}}
                        </div>
                        <div class="desc">
                            {{$donationSetting->about}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="qr-holder">
                            <img src="{{asset($donationSetting->qr)}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="extra">
                            {!! $donationSetting->extra !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div id="homegallery">
        <div class="gallery-top">
            <h4 class="title">
                Our photo gallery
            </h4>
        </div>
        <div class="galleries">
            <div class="container">
                <div class="row m-0">
                    @for ($i = 0; $i < 20; $i++)
                        <div class="col-md-3 p-2">
                            <a class="gallery-single" href="gallery">
                                <div class="img">
                                    <img src="https://v.greattibettour.com/photos/2021/09/tihar-festival-09-09462.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    info
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div id="homefaq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">Recently asked questions</div>
                    <div class="subtitle">
                        People are frequently asking some questions from us
                    </div>
                    <div class="semi">
                        Proactively procrastinate cross-platform results via extensive ideas distinctively underwhelm enterprise. Compellingly plagiarize value-added sources with inexpensive schemas.
                    </div>
                    <div>
                        <a href="" class="more">
                            Get More Help
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordion-faq">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-faq">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-faq">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-faq">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div id="homenews">
        <div class="container">

            <div class="title">News & articles</div>
            <div class="subtitle">latest news and articles</div>
            <div class="news">
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4">
                        <a class="news-single">
                            <div class="img"><img src="https://layerdrops.com/oxpinshtml/main-html/assets/images/blog/news-1-1.jpg" alt=""></div>
                           <div class="titleholder">
                                <div class="date">23 May, 2022</div>
                                <div class="newstitle">
                                    How does the malnutrition affect children?
                                </div>
                           </div>
                        </a>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
