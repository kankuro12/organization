@extends('front.layout')
@section('meta')
    @includeIf('front.cache.home.meta')
@endsection
@section('content')
    <div class="jumbotron">
        <div class="text-center">
            <a href="{{route('home')}}">Home </a> /
            <a href="{{route('gallery')}}">Gallery </a> /
            <br>
            <a class="active">
                {{$gallery->title}}
            </a>
        </div>
    </div>

    <div class="py-5" id="gallery-single-page">
        <div class="container">
            <div class="row m-0">
                @foreach ($images as $image)
                    <div class="col-md-2 col-6 p-1">
                        <div class="image">
                            <img src="{{asset($image->thumb)}}" loading="lazy" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {

    });
</script>
@endsection
