@extends('back.layout')
@section('head-title')
    <a href="{{ route('admin.notice.index', ['type' => $type]) }}">{{ noticeType($type) }}</a>
    <a href="#">Add</a>
@endsection
@section('toolbar')
@endsection
@section('content')
    <div class="mt-3 p-3 shadow">
        <form action="{{ route('admin.notice.add', ['type' => $type]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="enter title">
            </div>
            <div class="mb-2">
                <label for="file">
                    @if ($type == 1)
                        Download File
                    @else
                        Image
                    @endif
                </label>
                <input type="file" name="file" class="form-control dropify" placeholder="enter title" required
                    @if ($type != 1) accept="image/*" @endif>

            </div>
            @if ($type != 1)
                <div class="mb-2">
                    <label for="short_desc">Short Description</label>
                    <textarea type="text" name="short_desc" class="form-control" placeholder="Enter short description" required></textarea>
                </div>
            @endif

            <div>
                <button class="btn btn-primary">
                    Save {{ noticeType($type) }}
                </button>
            </div>

        </form>
    </div>
@endsection
