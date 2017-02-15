@extends('layouts.app')

@section('content')
    <div class="container">
        <!--培训内容-->
        <!--前台-->
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
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMTc2NTM3OTUwNA==.html?spm=a2hzp.8244740.userfeed.5!9~5~5~5!3~5~A.UYfmbU" onclick="save(this.innerText)">CRM功能简介</a></td>
                            <td width="20%">3:53</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">2</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwODYxMg==.html" onclick="save(this.innerText)">线索</a></td>
                            <td width="20%">5:53</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">3</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwOTk4MA==.html" onclick="save(this.innerText)">合同</a></td>
                            <td width="20%">9:39</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">4</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwNjQzNg==.html" onclick="save(this.innerText)">来款</a></td>
                            <td width="20%">3:53</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">5</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwODg4NA==.html" onclick="save(this.innerText)">教材</a></td>
                            <td width="20%">10:02</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">6</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwNjA2MA==.html" onclick="save(this.innerText)">课程</a></td>
                            <td width="20%">2:51</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">7</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwNTcyNA==.html" onclick="save(this.innerText)">教室</a></td>
                            <td width="20%">2:16</td>
                        </tr>
                        <tr style="height: 30px">
                            <td width="20%">8</td>
                            <td width="60%"><a href="http://v.youku.com/v_show/id_XMjQ5NTAwNTI2NA==.html" onclick="save(this.innerText)">平板</a></td>
                            <td width="20%">2:26</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection