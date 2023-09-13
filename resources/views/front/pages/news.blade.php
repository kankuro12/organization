@extends('front.layout')
@section('meta')
    @includeIf('front.cache.home.meta')
@endsection
@section('content')
    <div class="jumbotron">
        <div >
            <a href="{{route('home')}}">Home </a> /
            <a class="active">
                News
            </a>
        </div>
    </div>
    <div class="py-5 container">

    </div>
@endsection
@section('js')
    <script>
        const template=`<a class="news-single" href="{{route('news.single',['slug'=>'xxx_slug'])}}">
                        <div class="img"><img src="xxx_img" alt=""></div>
                       <div class="titleholder">
                            <div class="date">xxx_date</div>
                            <div class="newstitle">
                                xxx_title
                            </div>
                       </div>
                    </a>`;

        const render=(data)=>{
            let html= template.replace('xxx_slug',data.s).replace('xxx_img',data.i).replace('xxx_date',data.date).replace('xxx_title',data.title);
            return html;
        };
        const news={!! json_encode($news) !!};



    </script>
@endsection
