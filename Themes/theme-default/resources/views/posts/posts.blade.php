@extends('v-theme::layouts.default')
@section('meta_title', 'Blog Posts')
@section('meta_description', 'Blog Posts')
@section('page_title', 'Blog Posts')

@section('content')
    @include('v-theme::partials.page-title')

    <div class="vspace-2"></div>
    @if ($featuredPost)
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12">
                    <div class="block-image-text">
                        @if (!empty($featuredPost->image))
                            <a href="{{ route('versatile-frontend.posts.post', ['slug' => $featuredPost->slug]) }}" class="block-image-text-img">
                                <img src="{{ image_url($featuredPost->image, 585, 390) }}">
                            </a> <!-- /.block-image-text-img -->
                        @endif

                        <div class="block-image-text-content">
                            @if (!empty($featuredPost->title))
                                    <h4>{{ $featuredPost->title or '' }}</h4>
                            @endif

                            @if (!empty($featuredPost->excerpt))
                                    <p>{{ $featuredPost->excerpt or '' }}</p>
                            @endif

                            <a href="{{ route('versatile-frontend.posts.post', ['slug' => $featuredPost->slug]) }}" class="button round">
                                    Read Post
                            </a>
                        </div> <!-- /.block-image-text-content -->
                    </div> <!-- /.block-image-text -->
                </div> <!-- /.cell -->
            </div> <!-- /.grid-x -->
        </div> <!-- /.grid-container -->
    @endif

    @include('v-theme::posts.posts-grid')
@endsection
