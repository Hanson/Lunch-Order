@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($errors->has('time'))
            <div class="alert alert-danger" role="alert">{{ $errors->first('time') }}</div>
        @endif
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">New Feature!</div>
                <div class="panel-body">
                    * 菜单按照热门排序<br>
                    * 点餐订单按人合并<br>
                    * 增加特性栏（feature）<br><br>
                    <div class="col-md-3 col-md-offset-10">2016-3-24</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection