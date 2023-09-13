<div class="galleries">
    <div class="container">
        <div class="row m-0">
            @foreach ($galleries as $gallery)

                <div class="col-md-3 p-2">
                    <a class="gallery-single" href="{{route('gallery.single',['slug'=>$gallery->slug])}}">
                        <div class="img">
                            <img src="{{asset($gallery->file)}}" alt="">
                        </div>
                        <div class="overlay">
                            {{$gallery->title}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
