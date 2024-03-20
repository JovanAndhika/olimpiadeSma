@extends('layout.mainlayout')

@section('content')

<div class="d-flex justify-content-center">
    <h1>Title</h1>
</div>

@if(session('registrationSuccess'))
<script>
    // Tampilkan SweetAlert
    Swal.fire({
        title: "Registration Success",
        text: "Terima kasih telah mendaftar",
        icon: "success"
    });
</script>
@endif
</div>

@include('homepageComponents.aboutus')
@include('homepageComponents.timeline')
@include('homepageComponents.guide')
@include('homepageComponents.faq')
@include('homepageComponents.footer')

@endsection