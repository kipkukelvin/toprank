@extends('partials.layouts')

@section('content')
@section('title','siloam apllication')
<link rel="stylesheet" href="{{ asset('assets/main.css') }}">
<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h3 class="mb-4 text-center">Course Application Form</h3>

        <form action="{{ route('academic.application.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="form-label">Full Names</label>
            <input type="text" name="name" class="form-control" required>

            <label class="form-label mt-3">Email</label>
            <input type="email" name="email" class="form-control" required>

            <label class="form-label">Phone Number</label>

            <input id="phone" type="tel" class="form-control" required>

            <label class="form-label">Select Course</label>
            <select class="form-select text-capitalize" aria-label="Select an option" required>
             <option selected>choose course</option>
             <option value="1">orthopedic & trauma medicine</option>
             <option value="2">perioperative teathre technology</option>
             <option value="3">CNA</option>
             <option value="4">computer packages</option>
             </select>
            <label class="form-label mt-3">Upload ID</label>
            <input type="file" name="id_scan" class="form-control" required>

             <label class="form-label mt-3">Academic Cerificates</label>
            <input type="file" name="academic_certificates" class="form-control" required>

            <button class="btn btn-success w-100 mt-4" type="submit">Submit Application</button>
        </form>

    </div>
</div>
@endsection
