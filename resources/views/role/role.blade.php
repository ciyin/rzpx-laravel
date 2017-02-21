<div class="row">
    {{--第一行：添加角色按钮+搜索框--}}
    <div class="col-md-12">
        <div class="row">
            {{--左边：添加角色按钮--}}
            <div class="col-md-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    添加角色
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">添加角色</h4>
                            </div>
                            <form action="/role" method="post">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="role_name">角色名称：</label>
                                        <input type="text" class="form-control" id="role_name" name="role">
                                    </div>
                                    <div class="form-group">
                                        <label for="training_projects">培训项目：</label>
                                        <input type="text" class="form-control" id="training_projects" name="projects">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">取消</button>
                                    <button type="submit" class="btn btn-primary btn-sm">保存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--右边：搜索框--}}
            {{--<div class="col-md-6">--}}
                {{--<div style="float: right">--}}
                    {{--<input title="search" type="text" name="search_role">--}}
                    {{--<input type="button" value="搜索" class="btn btn-default btn-sm">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    {{--第二行：角色列表--}}
    <div class="col-md-12" style="margin-top: 10px">
        <table class="table table-responsive">
            <tr>
                <td>ID</td>
                <td>角色</td>
                <td>培训项目</td>
                <td>创建时间</td>
            </tr>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->role}}</td>
                    {{--当不知道该调用project->project还是project['project]时，可用dd()打印结果，看看是对象还是数组--}}
                    <td>{{$role->project['projects']}}</td>
                    <td>{{$role->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>