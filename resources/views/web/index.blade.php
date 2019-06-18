@extends('web/base')
@section('title', 'welcome')
@section('container')
    <style>
        .menu img {
            height: 50px;
            width: 50px;
            margin: 5px 10px;
        }
        .menu td {
            text-align: center;
        }
    </style>
    <table class="menu">
        <tbody>
        <tr>
            <td>
                <img class="img-rounded" src="{{ URL::asset('../resources/images/album.png') }}" alt="">
                <p>{{ __('system.album') }}</p>
            </td>
            <td>
                <img class="img-rounded" src="{{ URL::asset('../resources/images/article.png') }}" alt="">
                <p>{{ __('system.article') }}</p>
            </td>
        </tr>
        </tbody>
    </table>
    <script src="{{ config('view.paths.js')}}/web.js"></script>
@endsection
