@extends('layouts.app')

@section('content')
    <div class="container">
        <!--培训内容-->
        <!--兼职督导-->
        <div style="margin-top: 10px">
            <!--留学酷-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">留学酷</h3>
                </div>
                <div class="panel-body">
                    <table style="margin-bottom: 0" width="100%">
                        <tr style="height: 30px">
                            <td width="20%">1</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjUzOTY2OA==.html?spm=a2hzp.8244740.userfeed.5!2~5~5~5!3~5~A" onclick="save(this.innerText)">留学酷功能简介</a></td>
                            <td width="20%">2:55</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">2</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjUxNzg0MA==.html?spm=a2hzp.8244740.userfeed.5!4~5~5~5!3~5~A" onclick="save(this.innerText)">创建抽词任务</a></td>
                            <td width="20%">13:45</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">3</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjUyNDgyMA==.html?spm=a2hzp.8253869.0.0&from=y1.7-2.com" onclick="save(this.innerText)">抽词</a></td>
                            <td width="20%">10:20</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">4</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjU0MjE5Ng==.html?spm=a2hzp.8244740.userfeed.5!3~5~5~5!3~5~A" onclick="save(this.innerText)">学生管理</a></td>
                            <td width="20%">1:55</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection