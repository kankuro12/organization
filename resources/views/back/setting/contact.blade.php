@extends('back.layout')
@section('head-title')
    <a href="#">Setting</a>
    <a href="#">contact</a>
@endsection
@section('content')
    <div class="mt-3 p-3 shadow">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-12">
                    <input class="form-control" type="text" name="map" id="map" value="{{$data->map??""}}" required placeholder="Enter location and press enter" onchange="setMap(this.value);return false;" onkeydown="if(event.which==13){event.preventDefault();}" >
                    <hr>
                    <div style="overflow:hidden;resize:none;width:100%;height:300px;">
                        <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
                            <iframe id="mapiframe"
                                style="height:100%;width:100%;border:0;" frameborder="0"
                                src="">
                            </iframe>
                        </div>
                        <style>
                            #embed-map-display img {
                                max-height: none;
                                max-width: none !important;
                                background: none !important;
                            }
                        </style>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <button class="btn btn-primary">Save Setting</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')

    <script>
        var map= "{{$data->map??""}}";
        function  setMap(name) {
            $('#mapiframe').attr('src',`https://maps.google.com/maps?q=${name}&t=&z=13&ie=UTF8&iwloc=&output=embed`)
        }
        $(document).ready(function () {
            if(map!=""){
                setMap(map);
            }
        });
    </script>
@endsection
