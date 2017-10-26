@extends('galleries/layouts/master')

@section('home')
    @include('galleries/carousel')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        @include('galleries/columns')
        @include('galleries/featurettes')
    </div>
@endsection