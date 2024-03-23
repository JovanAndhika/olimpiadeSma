@extends('layout.twlayout')

@section('head')
    <style>
        body {
            background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 49%, rgba(0, 212, 255, 1) 100%);
            color: white;
        }
    </style>
@endsection

@section('content')

    @if (session('registrationSuccess'))
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

    @include('homepageComponents.about')
    {{-- @include('homepageComponents.timeline') --}}
    {{-- @include('homepageComponents.guide') --}}
    @include('homepageComponents.faq')
    @include('homepageComponents.footer')
@endsection
