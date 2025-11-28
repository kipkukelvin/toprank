@extends('partials.layouts')

@section('title', 'Siloam College of Health sciences')
 <link rel="icon" type="image/png" href="{{ asset('assets/images/Logo.png') }}">
    <!-- Begin page content -->
  <div class="container-fluid mt-4 img-fluid fixed w-100 h-100 pt-2">
    @include('welcome')
    

</div>
<section id="academic-section">
@include('academic.academic')
</section>

@include('partials.gallery')


    <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
