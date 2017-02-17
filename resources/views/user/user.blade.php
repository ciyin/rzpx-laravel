<div class="row">
    {{--第一行：添加用户+搜索框--}}
    <div class="col-md-12">
        <div class="row">
            {{--左边：添加用户按钮--}}
            <div class="col-md-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    添加用户
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                <h4 class="modal-title" id="myModalLabel">添加用户</h4>
                            </div>
                            <form method="post" action="/user">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">姓名：</label>
                                        <input type="text" class="form-control" id="name" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">邮箱：</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">密码：</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>岗位：</label>
                                        @foreach($roles as $radio)
                                            <label class="radio-inline"><input type="radio" name="role" value="{{$radio->id}}">{{$radio->role}}</label>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label>城市：</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="上海"> 上海</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="广州"> 广州</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="沈阳"> 沈阳</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="长春"> 长春</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="大连"> 大连</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="北京"> 北京</label>
                                        <label class="radio-inline"><input type="radio" name="city" value="成都"> 成都</label>
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
            <div class="col-md-6">
                <div style="float: right">
                    <form method="get" action="{{url('user/create')}}">
                        <input title="search" type="text" name="search_user">
                        <input type="submit" value="搜索" class="btn btn-default btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--第二行：用户列表--}}
    <div class="col-md-12" style="margin-top: 10px">
        <table class="table table-responsive">
            <tr>
                <td>序号</td>
                <td>姓名</td>
                <td>角色</td>
                <td>城市</td>
                <td>邮箱</td>
                <td>创建人</td>
                <td>创建时间</td>
            </tr>
            @foreach($users as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->name}}</td>
                    <td>{{$list->role}}</td>
                    <td>{{$list->city}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->created_by}}</td>
                    <td>{{$list->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    {{--第三行：显示分页标签--}}
    <div class="col-md-12">
        <div style="float: right">
            {{$users->links()}}
        </div>
    </div>
</div>