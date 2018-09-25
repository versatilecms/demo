@extends('v-theme::layouts.default')
@section('meta_title', 'Portfolio')
@section('meta_description', 'Portfolio')
@section('page_title', 'Portfolio')

@section('content')
    @include('v-theme::partials.page-title')

    <div class="vspace-2"></div>

    @include('v-theme::portfolio.posts-grid')
@endsection
