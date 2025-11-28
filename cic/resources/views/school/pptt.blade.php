@extends('partials.layouts')
@section('title','Perioperative-Theatre-Technology')
<link rel="stylesheet" href="{{ asset('assets/css') }}">
<div class="position-relative bg-info mt-3 mb-3 text-white">
  <img src="{{ asset('assets/images/PERIP.jpg') }}" 
       class="img-fluid w-100"
       style="height:500px; object-fit:cover;"
       alt="">

  <div class="position-absolute top-50 bg-dark bg-opacity-50 rounded fs-1 fw-bold text-white">
    Perioperative <br> Theatre <br> Technology
</div>
</div>
<div class="container card-body my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-info bg-light h-100 p-4 border-top-3 ">
        <h4 class="fw-bold mb-3">Overview</h4>
        <p class="fs-6">
          The Perioperative Theatre Technology program at Siloam Medical, Technical and Commercial Training College equips students with the knowledge and skills required to support surgical teams. The course covers operating room procedures, theatre organization, sterilization techniques, infection prevention, patient preparation, and assisting surgeons during operations.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container my-4 pt-3">
  <div class="row g-4">

    <!-- Column 1: Accreditation Body -->
    <div class="col-md-4">
      <div class="card border-info h-100 card-hover">
        <!-- Header -->
        <div class="card-header bg-info text-white">
          <h5 class="mb-0"><i class="fa fa-award me-2"></i>Accreditation Body</h5>
        </div>
        <!-- Content -->
        <div class="card-body">
          <p class="fw-bold fs-4 mb-2">TVET Accredited</p>
          <p class="fs-5 fw-bold"><i class="fa fa-graduation-cap me-2 text-info"></i>Examining Body</p>
          <ul class="list-unstyled fs-6 mb-0">
            <li>TVET-CDAAC</li>
          </ul> 
        </div>
      </div>
    </div>

    <!-- Column 2: Diploma -->
    <div class="col-md-4">
      <div class="card border-info h-100 card-hover">
        <!-- Header -->
        <div class="card-header bg-info text-white">
          <h5 class="mb-0"><i class="fa fa-book me-2"></i>Diploma</h5>
        </div>
        <!-- Content -->
        <div class="card-body">
          <p class="fw-bold fs-5"><i class="fa fa-user-graduate me-2 text-info"></i>Entry Requiremets</p>
          <ul class="list-unstyled fs-6 mb-0">
            <li>KCSE Mean Grade C (Plain) or equivalent</li>
            <li>English or Kiswahili C– and above</li>
            <li>Biology or Physical Science C (Plain) and above</li>
            <li>Any other relevant subject C– and above</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Column 3: Certificate -->
    <div class="col-md-4">
      <div class="card border-info h-100 card-hover">
        <!-- Header -->
        <div class="card-header bg-info text-white">
          <h5 class="mb-0"><i class="fa fa-certificate me-2"></i>Certificate</h5>
        </div>
        <!-- Content -->
        <div class="card-body">
           <p class="fw-bold fs-5"><i class="fa fa-user-graduate me-2 text-info"></i>Entry Requiremets</p>
          <ul class="list-unstyled fs-6 mb-0">
            <li>KCSE Mean Grade D– or equivalent</li>
            <li>English or Kiswahili D– and above</li>
            <li>Biology or Physical Science D– and above</li>
            <li>Any other relevant subject D– and above</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Choose Us -->
<div class="container card-body my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-light bg-light h-100 p-4 border-top-3">
        <h4 class="fw-bold mb-3">Why Choose Us!
            <span class="d-block mt-1" style="height:3px; width:50px; background-color:#0dcaf0;"></span>
            </h4>
    <div class="row">
    <!-- Column 1 -->
    <div class="col-md-6">
      <ul class="list-unstyled fs-6">
        <li class="mb-3">
          <i class="fa fa-hospital me-2 text-info"></i>
          <strong>Guaranteed Hospital Placement</strong>
          <p class="mb-0 small text-muted">We ensure all students get practical experience in real hospital settings.</p>
        </li>
        <li class="mb-3">
          <i class="fa fa-credit-card me-2 text-info"></i>
          <strong>Flexible Payment Plans</strong>
          <p class="mb-0 small text-muted ms-4">Affordable options tailored to make your education stress-free.</p>
        </li>
        <li class="mb-3">
          <i class="fa fa-desktop me-2 text-info"></i>
          <strong>Digital Literacy Skills</strong>
          <p class="mb-0 small text-muted ms-4">Essential skills for mordern workplaces.</p>
        </li>
      </ul>
    </div>

    <!-- Column 2 -->
    <div class="col-md-6">
      <ul class="list-unstyled fs-6">
        <li class="mb-3">
          <i class="fa fa-book me-2 text-info"></i>
          <strong>Relevant Learning</strong>
          <p class="mb-0 small text-muted ms-4">Course content is up-to-date and aligned with industry needs.</p>
        </li>
        <li class="mb-3">
          <i class="fa fa-user-graduate me-2 text-info"></i>
          <strong>Learn from Experts</strong>
          <p class="mb-0 small text-muted ms-4">Experienced instructors guide you through practical and theoretical knowledge.</p>
        </li>
      </ul>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>
<!-- Full-width column -->
<div class="container card-body card-hover my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-info bg-light h-100 p-4">
        <h4 class="fw-bold mb-3">Apply Now</h4>
        <p class="fs-6">
          Interested candidates can apply online or visit the admissions office for more details.
          Please ensure that all required documents are ready before submission.
        </p>
        <div class="text-center">
        <a href="{{ route('academic.application') }}" class="btn btn-info text-white mt-3 px-5 py-4 w-auto d-inline-block rounded-pill fs-4">Apply Now</a>
      </div>
      </div>
    </div>
  </div>
</div>
