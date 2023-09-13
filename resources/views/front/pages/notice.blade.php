@extends('front.layout')
@section('meta')
    @includeIf('front.cache.home.meta')
@endsection
@section('content')
    <div class="jumbotron">
        <div >
            <a href="{{route('home')}}">Home </a> /
            <a class="active">
                Notices
            </a>
        </div>
    </div>
    <div id="notice-page" class="py-5 container">

        <div class=" mt-3 mt-md-5" id="newspagination">
            @foreach ($notices as $notice)
                <small>
                    {{noticeDate($notice)}}
                </small>
                <br>
                <a href="{{asset($notice->file)}}" class="notice" target="_blank">{{$notice->title}}</a>
                <hr>
            @endforeach

            <div class="pagination">
                <ul class="pagination">
                    @if ($notices->onFirstPage())
                        <li class="page-item disabled"><span class="page-link"><</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $notices->previousPageUrl() }}"><</a></li>
                    @endif

                    @foreach ($notices->getUrlRange(1, $notices->lastPage()) as $page => $url)
                        @if ($page == $notices->currentPage())
                            <li class="page-item  "><span class="page page-link active">{{ $page }}</span></li>
                        @else
                            <li class="page-item "><a class="page page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    @if ($notices->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $notices->nextPageUrl() }}">></a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">></span></li>
                    @endif
                </ul>
            </div>

        </div>
    </div>

@endsection
