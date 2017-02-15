@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{--loglist:only admin and hr can see--}}
                    {{--需要赋值的变量:$role_id,$logs--}}
                    @if($role_id==1)
                        <div class="col-md-2">@include('nav/admin')</div>
                        <div class="col-md-10">@include('log/log')</div>
                    @else
                        <div class="col-md-2">@include('nav/hr')</div>
                        <div class="col-md-10">@include('log/log')</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection