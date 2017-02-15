@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                {{--1=>admin--}}
                @if($role_id==1)
                    <div class="col-md-2">@include('nav/admin')</div>
                    <div class="col-md-10">@include('role/role')</div>
                {{--2=>hr--}}
                @elseif($role_id==2)
                    <div class="col-md-2">@include('nav/hr')</div>
                    <div class="col-md-10">@include('user/user')</div>
                {{--其他角色--}}
                @else
                    <div class="col-md-2">@include('nav/normal')</div>
                    <div class="col-md-10">@include('project/project')</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
