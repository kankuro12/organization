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
            <a href="" class="top-link">
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
            <a href="" class="link">Home</a>
            <a href="" class="link">Notices</a>
            <a href="" class="link">News</a>
            <a href="" class="link">Issues</a>
            <a href="" class="link">Gallery</a>
            <a href="" class="link">Resources</a>
            <a href="" class="link">Help</a>
            <a href="" class="link">Contact</a>
            <a href="" id="donate">
                Donate Now
            </a>
        </div>
    </div>
</div>
