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
        @includeIf('front.cache.home.galleries')
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
                        <a href="/faqs" class="more">
                            Get More Help
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    @includeIf('front.cache.home.faq')

                </div>
            </div>
        </div>
    </div>

    @includeIf('front.cache.home.news')

@endsection
