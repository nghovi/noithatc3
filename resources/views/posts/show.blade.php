@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 5rem; margin-top: 5rem;">
            <div class="col-md-9 mx-auto" style="">
                <div class="">{!! $post->content !!}</div>
                <a class="mt-2" style="float: right" href="/news">Xem các tin khác >></a>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection

@section('style')
@endsection
