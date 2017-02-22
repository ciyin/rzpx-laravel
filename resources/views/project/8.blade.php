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
        <!--财务-->
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
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NDk3NDgzNg==.html" onclick="save(this.innerText)" target="_blank">余额</a></td>
                            <td width="20%">7:13</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">3</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NDk3ODQ3Ng==.html" onclick="save(this.innerText)" target="_blank">合同</a></td>
                            <td width="20%">21:37</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection