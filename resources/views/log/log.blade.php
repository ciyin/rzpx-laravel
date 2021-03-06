<div class="row">
    {{--第一行：搜索框--}}
    {{--<div class="col-md-12">--}}
        {{--<div style="float: right">--}}
            {{--<form method="get" action="/log">--}}
                {{--<input title="search" type="text" name="search_log" placeholder="输入姓名搜索">--}}
                {{--<input type="submit" value="搜索" class="btn btn-default btn-sm">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--第二行：培训记录--}}
    <div class="col-md-12" style="margin-top: 10px">
        <table class="table table-responsive">
            <tr>
                <td>序号</td>
                <td>姓名</td>
                <td>角色</td>
                <td>城市</td>
                <td>视频</td>
                <td>观看时间</td>
            </tr>
            @foreach($logs as $log)
                <tr>
                    <td>{{$log->id}}</td>
                    <td>{{$log->user->name}}</td>
                    <td>{{$log->user->role->role}}</td>
                    <td>{{$log->user->city}}</td>
                    <td>{{$log->video}}</td>
                    <td>{{$log->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    {{--第三行：显示分页标签--}}
    <div class="col-md-12">
        <div style="float: right">
            {{$logs->links()}}
        </div>
    </div>
</div>