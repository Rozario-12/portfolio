<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Example</title>
    <!-- Link to Bootstrap CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Link to your custom CSS (main.css) -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Link to Google Fonts (Sofia) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> <!-- Font Awesome CSS for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Include Bootstrap JS and jQuery -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
</head>

<body>
    <!-- Main Banner -->
    <div class="container-fluid mb-5 " id="main-banner">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <div class="mx-3">
                    <a class="navbar-brand" href="#">
                        <span class="text-portfoli0">Portfoli</span><span id="initial"> O</span>
                    </a>
                </div>
            </div>
        </nav>
        <div class="row p-5 main-banner-row d-flex align-items-center justify-content-center">
            <div class="col-md-8 col-sm-6 main-text">
                <p class="text-color fade-in-left " id="animated-text">{{ $user->name }} {{--<span id="initial">
                        A</span></p> --}}
                <p class="text-color">I'm a <span id="developer-text">Developer</span> </p>
            </div>
            <div class="col-sm-2" id="imgdiv"><img src="{{ asset($user->proimage) }}" id="devit-img"
                    class="animated-border-box img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- flip card  -->



    <div class="container skill d-flex align-items-center justify-content-center flex-wrap bg-transparent">
        <div class="row justify-content-between col-12">
        @foreach($Skills as $Skill)
        <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box">
                    <div class="body">
                        <div class="imgContainer">
                            <img src="{{asset($Skill->skill_image)}}" alt="">
                        </div>
                        <div class="content d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <h3 class="text-white fs-5">{{ $Skill->title}}</h3>
                                <p class="fs-6 text-white">
                                  {{ $Skill->content}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    @endforeach</div>
    </div>
    <div class="container-fluid careers mb-3 body-color edu">
        <div class="container">
            <div class="row justify-content-between p-3">
                <p class="text-white text-center">EDUCATION QUALIFICATION</p>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-header header-hover container-header" id="card-header-1">
                            My Engineering Journey at Anna University (2018-2022)
                        </div>
                        <div class="card-body" id="card-body-1">
                            <p>
                                As A Recent Graduate With A Bachelor's Degree In Electrical And Electronics Engineering
                                From Info Institute Of Engineering, Coimbatore, Boasting A Noteworthy Cgpa Of 7.5, My
                                Academic Voyage Delved Deeply Into The Principles And Applications Of Electrical
                                Engineering. This Journey Honed Not Only My Technical Prowess But Also Nurtured A Keen
                                Analytical Mindset, Enabling Me To Address Complex Engineering Hurdles With Innovative
                                Solutions. My Passion For Sustainability And Efficiency Drives My Ambition To Contribute
                                Meaningfully To The Field </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-header header-hover container-header" id="card-header-2">
                            My Journey Through 12th Standard Under the State Board (2017-2018)
                        </div>
                        <div class="card-body" id="card-body-2">
                            <p>Graduating From Sri Vinayaga Matriculation Higher Secondary School in Elavanasurkottai
                                With a 65% in My Higher Secondary Certificate (Hsc) Laid the Groundwork for My Academic
                                and Professional Ambitions. This Score, Achieved in a Challenging Environment, Reflects
                                My Dedication and Hard Work During My Formative Years. Located in the Postcode 607202,
                                the School Provided a Nurturing Atmosphere That Encouraged Not Just Academic Excellence
                                but Also the Development of Personal and Interpersonal Skills, Setting Me on the Path to
                                Further Education and Career Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-header header-hover container-header" id="card-header-3">
                            My Academic Year Under The State Board (2015-2016)
                        </div>
                        <div class="card-body" id="card-body-3">
                            <p>Attaining a Commendable Score of 74% in the Secondary School Leaving Certificate (Sslc)
                                Examination From Sri Vinayaga Matriculation Higher Secondary School in Elavanasurkottai
                                (Postcode 607202) Marks a Significant Milestone in My Academic Journey. This Achievement
                                Reflects My Diligence and Commitment to Academic Excellence During My Foundational
                                Years. It Signifies Not Only My Proficiency in the Subjects but Also the Supportive
                                Educational Environment Provided by the School, Which Nurtured My Intellectual Growth
                                and Prepared Me for Future Academic Pursuits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid careers mb-3">
        <div class="container">
            <div class="row justify-content-between p-3">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-header header-hover" id="card-header-1">
                            Education
                        </div>
                        <div class="card-body" id="card-body-1">
                            <p>Education details go here...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-header header-hover" id="card-header-1">
                            Education
                        </div>
                        <div class="card-body" id="card-body-1">
                            <p>Education details go here...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-header header-hover" id="card-header-1">
                            Education
                        </div>
                        <div class="card-body" id="card-body-1">
                            <p>Education details go here...</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <!-- Social Media Icons -->
                <div class="d-flex justify-content-center"><img src="assets/image/background/last-image.jpg"
                        class="img-fluid" width="420px" alt=""></div>

                <div class=" container social-icons mt-md-0 mt-3 d-flex justify-content-center">
                    <a href="#" class="p-3"><img src="assets/image/icon/insta-icon.png" width="22px" alt=""></a>
                    <a href="#" class="p-3"><img src="assets/image/icon/facebook-icon.png" width="25px" alt=""></a>
                    <a href="#" class="p-3"><img src="assets/image/icon/linkedin-icon.png" width="25px" alt=""></i></a>
                    <a href="https://api.whatsapp.com/send?phone=916384236497&text=Hi%20David" class="p-3"
                        target="_blank">
                        <img src="assets/image/icon/whatsapp-icon.png" width="25px" alt="WhatsApp">
                    </a>
                    <!-- Add more social media icons as needed -->
                </div>

            </div>
            <div class="col-md-8 ">
                <!-- Contact Form -->
                
                @livewire('contact-form')


            </div>
        </div>
    </div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>


</html>
