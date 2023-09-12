@extends('back.layout')
@section('head-title')
    <a href="#">{{noticeType($type)}}</a>
@endsection
@section('toolbar')
    <a href="{{route('admin.notice.add',['type'=>$type])}}" class="btn btn-sm btn-primary">{{noticeType($type)}}</a>
@endsection
@section('content')
<div class="shadow p-3 mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Title
                </th>
                @if ($type==2)
                <th>
                    Image
                </th>
                @endif
                <th>

                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($notices as $notice)
                <tr>
                    <td>
                        {{$notice->title}}
                    </td>
                    @if ($type==2)
                    <td>
                        <img style="max-height: 50px;" src="{{asset($notice->file)}}" alt="">
                    </td>
                    @endif
                    <td>
                        <a href="{{route('admin.notice.edit',['notice'=>$notice->id])}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('admin.notice.del',['notice'=>$notice->id])}}" class="btn btn-danger" onclick="return confirm('Delete {{noticeType($type)}}')"> Delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
