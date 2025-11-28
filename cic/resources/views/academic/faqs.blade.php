@extends('partials.layouts')

@section('title', 'FAQs')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">Frequently Asked Questions</h2>

    <div class="accordion" id="faqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How do I apply for a course?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can apply online through our <a href="{{ route('academic.application') }}">application portal</a>.
                    Fill out the form, upload required documents, and submit.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What are the entry requirements?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Requirements vary by programme. Check the <a href="{{ route('academic.programs') }}">programmes page</a>
                    for detailed requirements.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Does the college offer accommodation?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, the college provides safe and affordable accommodation for students.
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    How can I contact the admissions office?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can reach us at <a href="https://mail.google.com/mail/u/0/?fs=1&amp;tf=cm&amp;source=mailto&amp;to=info.siloamhospitalcollegeofhscs@gmail.com" target="_blank" rel="noreferrer noopener" class="text-primary text-decoration-none">info.siloamcollegeofhscs@gmail.com</a> or visit the admissions office on campus.
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Do you offer online learning?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Selected programmes offer blended learning (online + physical). Contact the department for details.
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
