@extends('back.layout')
@section('head-title')
    <a href="#">{{noticeType($type)}}</a>
@endsection
@section('toolbar')
    <a href="{{route('admin.notice.add',['type'=>$type])}}" class="btn btn-sm btn-primary">{{noticeType($type)}}</a>
@endsection
@section('content')
@endsection
