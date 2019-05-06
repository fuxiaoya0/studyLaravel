@extends('layout/app')
@section('title', 'welcome')
@section('body')
<div class="container">
    <div class="row">
        @include('web.left')
        <div class="col-sm-9">

        </div>
    </div>
</div>
<script src="{{ config('view.paths.js')}}/web.js"></script>
@endsection