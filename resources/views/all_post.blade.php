@extends('layouts.app')

@section('content')
    <!--Start latest blog area-->
    <section class="latest-blog-area">
        <div class="container">
            <div class="row">
                <!--Start single blog item-->
                @foreach($posts as $post)
                    @include('card_post', ['post' => $post])
                @endforeach
            </div>
        </div>
    </section>
    <!--End latest blog area-->
@endsection

@section('script')
@endsection

@section('style')
@endsection
