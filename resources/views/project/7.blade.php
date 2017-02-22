@extends('layouts.app')

@section('content')
    <script>
        function save(video) {
            var xhr=new XMLHttpRequest();
            xhr.open('get','/log/create?v='+video,true);
            xhr.send();
        }
    </script>
    <div class="container">
        <!--培训内容-->
        <!--教务-->
        <div style="margin-top: 5px">
            <!--crm-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">crm</h3>
                </div>
                <div class="panel-body">
                    <table style="margin-bottom: 0" width="100%">
                        <tr style="height: 30px">
                            <td width="20%">1</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2NTM3OTUwNA==.html?spm=a2hzp.8244740.userfeed.5!9~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)" target="_blank">CRM功能简介</a></td>
                            <td width="20%">3:53</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">2</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjExNTYwOA==.html" onclick="save(this.innerText)" target="_blank">排课</a></td>
                            <td width="20%">16:03</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">3</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjIxNDM5Ng==.html" onclick="save(this.innerText)" target="_blank">调课</a></td>
                            <td width="20%">8:51</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">4</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjI2NjY2MA==.html" onclick="save(this.innerText)" target="_blank">小班管理</a></td>
                            <td width="20%">10:47</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">5</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjMyMjQ2OA==.html" onclick="save(this.innerText)" target="_blank">教师课量管理</a></td>
                            <td width="20%">13:14</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">6</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjMzNzEyOA==.html" onclick="save(this.innerText)" target="_blank">培训记录</a></td>
                            <td width="20%">2:56</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">7</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjM3NTg1Mg==.html" onclick="save(this.innerText)" target="_blank">教学事故</a></td>
                            <td width="20%">8:06</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">8</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NjM4Njc1Ng==.html" onclick="save(this.innerText)" target="_blank">查看学员信息</a></td>
                            <td width="20%">1:59</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection