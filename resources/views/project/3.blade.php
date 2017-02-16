@extends('layouts.app')

@section('content')
    <!--培训内容-->
    <!--全职督导-->
<script>
    function save(video) {
        var xhr=new XMLHttpRequest();
        xhr.open('get','/log/create?v='+video,true);
        xhr.send();
    }
</script>
<div class="container">
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
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjUzOTY2OA==.html?spm=a2hzp.8244740.userfeed.5!2~5~5~5!3~5~A" onclick="save(this.innerText)" target="_blank">留学酷功能介绍</a></td>
                        <td width="20%">2:55</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">2</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjUxNzg0MA==.html?spm=a2hzp.8244740.userfeed.5!4~5~5~5!3~5~A" onclick="save(this.innerText)" target="_blank">创建抽词任务</a></td>
                        <td width="20%">13:45</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">3</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjUyNDgyMA==.html?spm=a2hzp.8253869.0.0&from=y1.7-2.com" onclick="save(this.innerText)" target="_blank">抽词</a></td>
                        <td width="20%">10:20</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">4</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTg2MjU0MjE5Ng==.html?spm=a2hzp.8244740.userfeed.5!3~5~5~5!3~5~A" onclick="save(this.innerText)" target="_blank">学生管理</a></td>
                        <td width="20%">1:55</td>
                    </tr>
                </table>
            </div>
        </div>
        <!--crm-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">CRM</h3>
            </div>
            <div class="panel-body">
                <table style="margin-bottom: 0" width="100%">
                    <tr style="height: 30px">
                        <td width="20%">1</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2NTM3OTUwNA==.html?spm=a2hzp.8244740.userfeed.5!9~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">CRM功能介绍</a></td>
                        <td width="20%">3:53</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">2</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2MzM2MDIxMg==.html?spm=a2hzp.8244740.userfeed.5!17~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">排课申请</a></td>
                        <td width="20%">14:21</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">3</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2MzM4Nzg2MA==.html?spm=a2hzp.8244740.userfeed.5!16~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">调课申请</a></td>
                        <td width="20%">8:08</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">4</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2MzQyMzk3Ng==.html?spm=a2hzp.8244740.userfeed.5!14~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">查看课表</a></td>
                        <td width="20%">6:31</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">5</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2MzQyODYwNA==.html?spm=a2hzp.8244740.userfeed.5!15~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">培训记录</a></td>
                        <td width="20%">2:54</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">6</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2NDg1NjYxMg==.html?spm=a2hzp.8244740.userfeed.5!11~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">测评</a></td>
                        <td width="20%">30:00</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">7</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2MzQzNzU3Mg==.html?spm=a2hzp.8244740.userfeed.5!13~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">回访记录</a></td>
                        <td width="20%">3:07</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">8</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2NDk2OTM4NA==.html?spm=a2hzp.8244740.userfeed.5!10~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">其他操作</a></td>
                        <td width="20%">11:39</td>
                    </tr>
                </table>
            </div>
        </div>
        <!--1course-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">1course</h3>
            </div>
            <div class="panel-body">
                <table style="margin-bottom: 0" width="100%">
                    <tr style="height: 30px">
                        <td width="20%">1</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMjMzMjc0MDQ5Mg==.html?spm=a2hzp.8253869.0.0&from=y1.7-2" onclick="save(this.innerText)" target="_blank">1course功能简介</a></td>
                        <td width="20%">3:07</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">2</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMjMzMjg5MTEwOA==.html?from=y1.7-2&spm=a2hzp.8253869.0.0" onclick="save(this.innerText)" target="_blank">阶段测试</a></td>
                        <td width="20%">11:17</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="20%">3</td>
                        <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc0NDk1NTU4NA==.html?spm=a2hzp.8253869.0.0&from=y1.7-2" onclick="save(this.innerText)" target="_blank">智能口语测评</a></td>
                        <td width="20%">5:45</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection