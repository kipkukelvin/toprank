 <footer class="bg-info text-white text-center py-4 mt-auto">
    <div class="container">
    <div class="row">
      <!-- College Info -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase mb-3">My College</h5>
        <p class=" text-body text-uppercase text-success">
          Shaping minds changing life.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase mb-3">Quick Links</h5>
        <ul class="list-unstyled text-start">
          <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
          <li><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="" class="text-white text-decoration-none">Departments</a></li>
          <li><a href="https://mail.google.com/mail/u/0/?fs=1&amp;tf=cm&amp;source=mailto&amp;to=info.siloamhospitalcollegeofhscs@gmail.com" target="_blank" rel="noreferrer noopener" class="text-white text-decoration-none">Email Us</a></li>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase mb-3">Contact Us</h5>
        <ul class="list-unstyled text-start">
          <li><i class="fa fa-location-dot me-2"></i> Matobo former Milimani Schools, Kericho, Kenya</li>
          <li><i class="fa fa-phone me-2"></i> +254 701 444 333</li>
          <li><i class="fa fa-envelope me-2"></i> info.siloamhospitalcollegeofhscs@gmail.com</li>
        </ul>

        <!-- Social Media -->
        <div class="mt-3">
          <a href="https://www.facebook.com/profile.php?id=61581782424060" target="_blank" rel="noopener noreferrer" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-linkedin"></i></a>
          <a href="https://vm.tiktok.com/ZMHWptxVnpu9b-szpim/" target="_blank" rel="noopener norreferrer" class="text-dark me-3"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-light">
    <div class="text-start text-black fs-5">
      <p class="mb-2">&copy; {{ date('Y') }} Siloam Hosptial College of Health Sciences</p>
    </div>
  </div>
</footer>