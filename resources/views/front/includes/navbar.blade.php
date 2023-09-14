@php
    $generalSetting = getSetting('general');
@endphp
<div class="navbar">
    <div class="logo">
        <a href="/">
            <img src="{{ vasset($generalSetting->header_logo ?? '') }}" alt="Logo">
        </a>
    </div>
    <div class="pt-3">
        <div class="navbar-top">
            <a target="_blank" href="{{config('app.member_url')}}" class="top-link">
                <div>
                    <span class=" top-icon material-symbols-outlined">group</span>
                </div>
                <div class="member">

                    Become a
                    <u>
                        member
                    </u>
                </div>
            </a>
            @if (isset($generalSetting->phone))
                <a href="tel:{{ $generalSetting->phone }}" class="top-link">
                    <div>
                        <span class=" top-icon material-symbols-outlined">wifi_calling_3</span>
                    </div>
                    <div>
                        <div class="top-title">Call Us</div>
                        <div class="top-info">
                            {{ $generalSetting->phone }}
                        </div>
                    </div>
                </a>
                <a href="mailto:{{ $generalSetting->email }}" class="top-link">
                    <div>
                        <span class=" top-icon material-symbols-outlined">mail</span>
                    </div>
                    <div>
                        <div class="top-title">Send Mail</div>
                        <div class="top-info">
                            {{ $generalSetting->email }}
                        </div>
                    </div>
                </a>

                <a class="top-link">
                    <div>
                        <span class=" top-icon material-symbols-outlined">location_on</span>
                    </div>
                    <div>
                        <div class="top-title">{{$generalSetting->address}}</div>
                        <div class="top-info">
                            {{$generalSetting->district}} , {{$generalSetting->state}}, {{$generalSetting->country}}
                        </div>
                    </div>
                </a>
            @endif
        </div>
        <div class="navbar-bottom">
            <a href="/" class="link">Home</a>
            <a href="{{route('notices')}}" class="link">Notices</a>
            <a href="{{route('committees')}}" class="link">Committees</a>
            <a href="{{route('news')}}" class="link">News</a>
            <a href="{{route('issues')}}" class="link">Issues</a>
            <a href="{{route('gallery')}}" class="link">Gallery</a>
            <a href="{{route('faq')}}" class="link">Help</a>
            <a href="" class="link">Contact</a>
            <a href="#" id="donate" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Donate Now
            </a>
        </div>
    </div>
</div>
<div class="mobile-top">

        <a  target="_blank" href="{{config('app.member_url')}}" >
            Become a member
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  >Donate Now</a>
</div>
<div class="navbar-mobile">
    <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="/">
                <img src="{{ vasset($generalSetting->header_logo ?? '') }}" alt="Logo">
            </a>
        </div>
        <div class="toogle-btn" onclick="document.getElementById('sidebar').classList.add('active');">
            <span class="material-symbols-outlined">menu</span>
        </div>
    </div>
</div>

<div class="sidebar" id="sidebar">
    <div class="inner">
        <div class="donate d-flex align-items-center justify-content-between">
            <div  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="document.getElementById('sidebar').classList.remove('active');">
                Donate Now
            </div>
            <div class="material-symbols-outlined"  onclick="document.getElementById('sidebar').classList.remove('active');" >
                close
            </div>
        </div>
        <div class="line"></div>
        <div>
            <a href="/" class="link">Home</a>
            <a href="{{route('notices')}}" class="link">Notices</a>
            <a href="{{route('committees')}}" class="link">Committees</a>
            <a href="{{route('news')}}" class="link">News</a>
            <a href="{{route('issues')}}" class="link">Issues</a>
            <a href="{{route('gallery')}}" class="link">Gallery</a>
            <a href="{{route('faq')}}" class="link">Help</a>
            <a href="" class="link">Contact</a>
            <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="document.getElementById('sidebar').classList.remove('active');">
                Donate Now
            </a>
        </div>

    </div>
    <div class="exit"  onclick="document.getElementById('sidebar').classList.remove('active');"></div>
</div>
