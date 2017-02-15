@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{--rolelist:only admin can operate--}}
                    {{--需赋值的变量:$roles，用来显示角色列表--}}
                    <div class="col-md-2">@include('nav/admin')</div>
                    <div class="col-md-10">@include('role/role')</div>
                </div>
            </div>
        </div>
    </div>
@endsection