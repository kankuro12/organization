@php
    $generalSetting = getSetting('general');
@endphp
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @if (isset($generalSetting->footer_logo))
                    <img id="footerimg" src="{{ vasset($generalSetting->footer_logo) }}" alt="">
                @endif
                <div id="footerdesc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nam atque praesentium? Cupiditate
                    alias dolore, placeat architecto assumenda quod recusandae blanditiis sint, nam accusantium
                    reprehenderit illum sed saepe mollitia hic?
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-white font-two">
                    Important Links
                </h4>
                <hr class="text-white">
                <a class="link" href="link">Link</a>
                <a class="link" href="link">Link</a>
            </div>
            <div class="col-md-5">
                <h4 class="text-white font-two">
                    Contact
                </h4>
                @if (isset($generalSetting->phone))
                    <hr class="text-white">
                    <div class="footeraddr mb-2">
                        {{$generalSetting->address}} <br>
                        {{$generalSetting->district}} , {{$generalSetting->state}}, {{$generalSetting->country}}
                    </div>
                    <a class="iconlink mb-2" href="tel:{{$generalSetting->phone}}">
                        <div class="icon">
                            <span class="material-symbols-outlined">wifi_calling_3</span>
                        </div>
                        <div class="text text-white">{{$generalSetting->phone}}</div>
                    </a>
                    <a class="iconlink mb-2" href="mailto:{{$generalSetting->email}}">
                        <div class="icon ">
                            <span class="material-symbols-outlined">mail_outline</span>
                        </div>
                        <div class="text text-white">{{$generalSetting->email}}</div>
                    </a>
                    <hr class="text-white">
                    <div class="d-flex justify-content-start">
                        <a class="social" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px"
                                height="20px" viewBox="0 0 30 30">
                                <path fill="#fff"
                                    d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </a>
                        <a class="social" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px"
                                height="20px" viewBox="0 0 30 30">
                                <path fill="#fff"
                                    d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </a>
                        <a class="social" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px"
                                height="20px" viewBox="0 0 30 30">
                                <path fill="#fff"
                                    d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </a>
                        <a class="social" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px"
                                height="20px" viewBox="0 0 30 30">
                                <path fill="#fff"
                                    d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </a>
                @endif

            </div>
        </div>
    </div>
</div>
</div>
