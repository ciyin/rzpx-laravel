@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{--projectlist:everyone can see--}}
                    {{--需要赋值的变量:$role_id,$name,$projects--}}
                    @if($role_id==1)
                        <div class="col-md-2">@include('nav/admin')</div>
                        <div class="col-md-10">@include('project/project')</div>
                    @elseif($role_id==2)
                        <div class="col-md-2">@include('nav/hr')</div>
                        <div class="col-md-10">@include('project/project')</div>
                    @else
                        <div class="col-md-12">@include('project/project')</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection