@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs' => 'page'])
        {{ $page->title }}
    @endcomponent

    <div class="x_about_seg_main_wrapper float_left padding_tb_50">
        <div class="container">
            {!! $page->body !!}
        </div>
    </div>
@stop
