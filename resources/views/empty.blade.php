@extends('views.home.layout.particles')

@section('title', $page->title)

@section('meta')
    <meta name="description" content="{{ $page->short_desc }}">
@endsection

@section('content')
    @include('views.home.layout.particles.header')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>

    @include('views.home.layout.particles.footer')
@endsection
