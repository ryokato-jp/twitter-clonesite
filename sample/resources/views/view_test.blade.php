@extends('layouts.test_app')

@section('title', 'index')


@section('menubar')
    @parent
    <br>
    インデックスページ
@endsection

@section('content')
    <p>本文の文章です</p>

    <!-- ビューコンポーザー -->
    {{$view_message}}

    <!-- コンポーネントとしてfooter.blade.phpを呼び出し -->
    <!-- @component('components.footer')
        @slot('param1')
            これは１です。
        @endslot

        @slot('param2')
            これは２です。
        @endslot
    @endcomponent -->

    <!-- サブビューとしてfooter.blade.phpを呼び出し -->
    @include('components.footer', ['param1' => 'その１', 'param2' => 'その２'])

@endsection

<!-- @section('footer')
    copyright 2018
@endsection -->
