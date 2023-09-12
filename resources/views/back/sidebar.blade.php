<style>
    .link{
        text-decoration: none;
        font-weight: 600;
    }
</style>
<div >
    <h3>Admin <br> Panel</h3>
</div>
<hr>
<a class="link" href="{{route('admin.notice.index',['type'=>1])}}">Notices</a>
<hr class="my-1">
<a class="link" href="{{route('admin.notice.index',['type'=>2])}}">News</a>
<hr class="my-1">
