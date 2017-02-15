<div class="jumbotron">
    <h1>{{$name}}，你好！</h1>
    <h2>欢迎加入沃邦！</h2>
    <p>以下内容为岗位所需的系统操作培训视频，请在到岗前观看完毕。</p>
</div>
<div>
    <table class="table table-responsive">
        <tr>
            <td>序号</td>
            <td>岗位名称</td>
            <td>培训项目</td>
            <td>项目详情</td>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->role}}</td>
                <td>{{$project->projects}}</td>
                <td><a href="{{url('project/'.$project->role_id)}}">查看</a></td>
            </tr>
        @endforeach
    </table>
</div>
