@extends('layout.mainlayout')

@section('content')

<div class="d-flex justify-content-center">
    <h1>Title</h1>
</div>

@include('homepagePartials.aboutus')
@include('homepagePartials.timeline')
@include('homepagePartials.guide')
@include('homepagePartials.faq')


@endsection