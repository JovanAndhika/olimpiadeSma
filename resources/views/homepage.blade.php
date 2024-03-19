@extends('layout.mainlayout')

@section('content')

<div class="d-flex justify-content-center">
    <h1>Title</h1>
</div>

@include('homepageComponents.aboutus')
@include('homepageComponents.timeline')
@include('homepageComponents.guide')
@include('homepageComponents.faq')
@include('homepageComponents.footer')

@endsection