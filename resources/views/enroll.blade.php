 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
 <main id="main">
<form method="POST" action="{{ route('enroll') }}" role="form" class="php-email-form">
    @csrf
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" :value="old('name')"  placeholder="Your Name" required>
    </div>
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" class="form-control" name="email" id="email" :value="old('email')" placeholder="Your Email" required>
    </div>
  </div>
  <div class="form-group mt-3">
    <input type="text" class="form-control" name="course" id="subject" :value="old('course')" placeholder="Course" required>
  </div>
 
  <div class="my-3">
    <div class="loading">Loading</div>
    <div class="error-message"></div>
 
    <div class="sent-message">Your message has been sent. Thank you!</div>
  </div>

  <div class="text-center"><button type="submit">Submit</button></div>
</form>
 </main>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
