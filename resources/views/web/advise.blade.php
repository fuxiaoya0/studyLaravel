@extends('layout/app')
@section('title', 'welcome')
@section('body')
    <div class="container">
        <div class="row">
            @include('web.left')
            <div class="col-sm-9">
                <form action="" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="如何称呼您？" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">联系方式</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" placeholder="电话/邮箱/QQ/微信" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">内容</label>
                        <div class="col-sm-10">
                            <textarea class="form-control limit-words" data-max="200" name="content" rows="3" required></textarea>
                            <span class="help-block">0/200</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ config('view.paths.js')}}/web.js"></script>
@endsection