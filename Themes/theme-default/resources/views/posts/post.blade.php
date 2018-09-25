@extends('v-theme::layouts.default')
@section('meta_title', $post->title)
@section('meta_description', $post->meta_description)
@section('page_title', $post->title)
@section('page_subtitle', 'Posted // ' . $post->created_at->format('jS M. Y'))

@section('content')
    @include('v-theme::partials.page-title')

    <div class="vspace-2"></div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12">
                {!! $post->body !!}

                @if ($relatedPosts)
                    <div class="vspace-1"></div>
                    <hr />

                    <h2 class="text-center">Related Posts</h2>
                @endif
            </div> <!-- /.cell -->
        </div> <!-- /.grid -->
    </div> <!-- /.grid-container -->

    @include('v-theme::posts.posts-grid', ['posts' => $relatedPosts])

    <div class="vspace-2"></div>
@endsection
