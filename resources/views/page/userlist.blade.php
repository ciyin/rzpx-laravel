@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{--userlist:only admin and hr can operate--}}
                    {{--需要赋值的变量:$role_id,$roles,$users--}}
                    @if($role_id=1)
                        <div class="col-md-2">@include('nav/admin')</div>
                    @else
                        <div class="col-md-2">@include('nav/hr')</div>
                    @endif
                    <div class="col-md-10">@include('user/user')</div>
                </div>
            </div>
        </div>
    </div>
@endsection