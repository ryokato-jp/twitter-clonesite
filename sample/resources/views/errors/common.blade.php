<?php //@extends('layouts.fullwidth') ?>
@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">{{$status_code}}</h1>
    <p class="lead">{{ $message }}</p>
    <hr class="my-4">
    <p>ご不便をおかけして申し訳ございません。</p>
    <p class="lead">
    <a class="btn btn-primary" href="/" role="button">トップページへ戻る</a>
    </p>
</div>
@endsection
