<?php session_start(); ?>
<!-- if (isset($_SESSION['u_id']) && isset($_SESSION['u_name'])) { ?> -->

<?php include("co_head.php") ?>
<?php include("co_nav.php") ?>
<!-- ==============================================PAGE CONTENT================================================ -->

<!-- ================ start banner Area ================= -->
<section class="home-banner-area">
  <div class="container">
    <div class="row justify-content-center fullscreen align-items-center">
      <div class="col-lg-5 col-md-8 home-banner-left">
        <h1 class="text-white">
          Unlock Your Future:
        </h1>
        <p class="mx-auto text-white  mt-20 mb-40">
          Find, Rate & Secure Perfect Internship
        </p>
      </div>
      <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
        <img class="img-fluid" src="img/header-img.png" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- ================ End banner Area ================= -->

<!-- ================ Start Feature Area ================= -->
<section class="feature-area">
  <div class="container-fluid">
    <div class="feature-inner row">
      <div class="col-lg-2 col-md-6">
        <div class="feature-item d-flex">
          <i class="ti-book"></i>
          <div class="ml-20 h-100">
            <a href="#c_sec">
              <h4>Certification Courses</h4>
            </a>
            <p>
              Certification courses provide specialized training to validate expertise in a specific field, often resulting in a certificate or credential.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="feature-item d-flex">
          <i class="ti-cup"></i>
          <div class="ml-20 h-100">
            <a href="#sh_sec">
              <h4>Scholarships</h4>
            </a>
            <p>
              Scholarships provide financial aid to support education, recognizing academic or other achievements and reducing the cost of courses.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="feature-item d-flex border-right-0">
          <i class="ti-desktop"></i>
          <div class="ml-20 h-100">
            <a href="#in_sec">
              <h4>Internships</h4>
            </a>
            <p>
              Internships turn academic knowledge into real-world experience, providing hands-on skills, industry insights, and networking opportunities.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Feature Area ================= -->

<!-- ================ Start Popular Internship Area ================= -->
<section class="popular-course-area section-gap" id="in_sec">
  <div class="container-fluid">
    <div class="row justify-content-center section-title">
      <div class="col-lg-12">
        <h2>
          Popular Internships <br />
          Available Right Now
        </h2>
        <p>
          Internships offer hands-on experience, allowing you to apply academic knowledge in real-world settings. They provide valuable industry insights, skill development, and networking opportunities, helping you kickstart your professional career.
        </p>
      </div>
    </div>
    <div class="owl-carousel popuar-course-carusel">
      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/intern(3).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100 ">
            <p class="name">Walmart Globaltech Sparkathon</p>
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="i_walmart.php">
            <h4>Sparkathon is a showcase where students present tech solutions to Walmart leaders.</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <!-- <li>
                < href="#"><i class="fa fa-star"></i>
              </li> -->
            </ul>
            <p class="ml-20">36 Reviews</p>
          </div>
        </div>
      </div>

      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/intern(1).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100">
            <p class="name">Flipkart Grid 2024</p>
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="i_Flipkart.php">
            <h4>GriD is Flipkart's Flagship Engineering Campus Challenge</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p class="ml-20">28 Reviews</p>
          </div>
        </div>
      </div>

      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/intern(4).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100">
            <p class="name">UNICEF Internship Programme</p>
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="i_unicef.php">
            <h4>Gain hands-on experience with UNICEF through global internship opportunities.</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <!-- <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li> -->
            </ul>
            <p class="ml-20">51 Reviews</p>
          </div>
        </div>
      </div>

      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/intern(2).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100">
            <p class="name">JPMorganChase Software Engineer Internship</p>
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="i_jpmor.php">
            <h4>Create impactful solutions for customers, clients, and businesses worldwide.</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p class="ml-20">48 Reviews</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Popular Internship Area ================= -->

<!-- ================ Start Courses Area ================= -->
<section class="blog-post-area section-gap" id="c_sec">
  <div class="container-fluid">
    <div class="feature-inner row">
      <div class="col-lg-12">
        <div class="section-title text-left">
          <h2>
            Top Courses
          </h2>
          <p>
            Enhance your skills with expertly designed programs, tailored to provide in-depth knowledge and practical experience in your chosen field.
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-blog-post">
          <img src="img/blog-post/b1.jpg" class="img-fluid" alt="" />
          <div class="overlay"></div>
          <div class="top-text">
            <p>29th, sep., 2024</p>
            <p>121 likes</p>
            <p>05 comments</p>
          </div>
          <div class="text">
            <h4 class="text-white">Full Stack Developer</h4>
            <div>
            </div>
            <a href="c_full.php" class="primary-btn">
              View Details
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt--160">
        <div class="single-blog-post">
          <img src="img/blog-post/b2.jpg" class="img-fluid" alt="" />
          <div class="overlay"></div>
          <div class="top-text">
            <p>2nd, oct., 2024</p>
            <p>101 likes</p>
            <p>03 comments</p>
          </div>
          <div class="text">
            <h4 class="text-white">Postman API Fundamental Student Expert</h4>
            <div>

            </div>
            <a href="c_api.php" class="primary-btn">
              View Details
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt--260">
        <div class="single-blog-post">
          <img src="img/blog-post/b3.jpg" class="img-fluid" alt="" />
          <div class="overlay"></div>
          <div class="top-text">
            <p>1st, oct., 2024</p>
            <p>130 likes</p>
            <p>10 comments</p>
          </div>
          <div class="text">
            <h4 class="text-white">Azure Fundamentals</h4>
            <div>

            </div>
            <a href="c_azure.php" class="primary-btn">
              View Details
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Courses Area ================= -->

<!-- ================ Start Popular Scholarship Area ================= -->
<section class="popular-course-area section-gap" id="sh_sec">
  <div class="container-fluid">
    <div class="row justify-content-center section-title">
      <div class="col-lg-12">
        <h2>
          Ongoing <br />
          Scholarships
        </h2>
        <p>
          Scholarships offer financial support, enabling you to focus on your studies without the burden of fees. They provide recognition for your academic achievements, promote skill development, and open doors to opportunities, helping you advance your educational and professional career.
        </p>
      </div>
    </div>
    <div class="owl-carousel popuar-course-carusel">
      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/img(4).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100 ">
            <!-- <p class="name">Bharti Airtel Scholarship 2024-25</p> -->
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="s_airtel.php">
            <h4>Bharti Airtel Scholarship Program 2024-25</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <!-- <li>
                < href="#"><i class="fa fa-star"></i>
              </li> -->
            </ul>
            <p class="ml-20">36 Reviews</p>
          </div>
        </div>
      </div>

      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/img(2).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100">
            <!-- <p class="name">Kotak Kanya Scholarship 2024-25</p> -->
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="s_kotak.php">
            <h4>Kotak Kanya Scholarship Program 2024-25</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p class="ml-20">28 Reviews</p>
          </div>
        </div>
      </div>

      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/img(3).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100">
            <!-- <p class="name">Schaffler India Social Innovator Fellowship Program 2024</p> -->
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="s_schaffler.php">
            <h4>Schaffler India Social Innovator Fellowship Program 2024</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <!-- <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li> -->
            </ul>
            <p class="ml-20">51 Reviews</p>
          </div>
        </div>
      </div>

      <div class="single-popular-course">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="img/img(1).jpeg" alt="" />
        </div>
        <div class="details">
          <div class="d-flex justify-content-between mb-20 h-100">
            <!-- <p class="name">Tata Capital Pankh Scholarship 2024-25</p> -->
            <!-- <p class="value">$150</p> -->
          </div>
          <a href="s_tata.php">
            <h4>Tata Capital Pankh Scholarship 2024-25</h4>
          </a>
          <div class="bottom d-flex mt-15">
            <ul class="list">
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p class="ml-20">48 Reviews</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Popular Scholarship Area ================= -->

<!-- ================ Start Video Area ================= -->
<!-- <section class="video-area section-gap-bottom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="section-title text-white">
          <h2 class="text-white">
            Watch Our Trainers <br>
            in Live Action
          </h2>
          <p>
            In the history of modern astronomy, there is probably no one greater leap forward than the building and
            launch of the space telescope known as the Hubble.
          </p>
        </div>
      </div>
      <div class="offset-lg-1 col-md-6 video-left">
        <div class="owl-carousel video-carousel">
          <div class="single-video">
            <div class="video-part">
              <img class="img-fluid" src="img/video-img.jpg" alt="">
              <div class="overlay"></div>
              <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                <img class="play-icon" src="img/play-btn.png" alt="">
              </a>
            </div>
            <h4 class="text-white mb-20 mt-30">Learn Angular js Course for Legendary Persons</h4>
            <p class="text-white mb-20">
              In the history of modern astronomy, there is probably no one greater leap forward than the building and
              launch of the space telescope known as the Hubble.
            </p>
          </div>

          <div class="single-video">
            <div class="video-part">
              <img class="img-fluid" src="img/video-img.jpg" alt="">
              <div class="overlay"></div>
              <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                <img class="play-icon" src="img/play-btn.png" alt="">
              </a>
            </div>
            <h4 class="text-white mb-20 mt-30">Learn Angular js Course for Legendary Persons</h4>
            <p class="text-white mb-20">
              In the history of modern astronomy, there is probably no one greater leap forward than the building and
              launch of the space telescope known as the Hubble.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- ================ End Video Area ================= -->

<!-- ================ Start Feature Area ================= -->
<section class="other-feature-area">
  <div class="container">
    <div class="feature-inner row">
      <div class="col-lg-12">
        <div class="section-title text-left">
          <h2>
            Features That <br />
            Can Avail By Everyone
          </h2>
          <p>
            Discover personalized internships with ease. Access verified listings and expert resources. Start your career journey today!
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="other-feature-item">
          <i class="ti-key"></i>
          <h4>Lifetime Access</h4>
          <div>
            <p>
              Once you join our platform, you'll have continuous access to internship listings, career resources, and professional development tools for as long as you need them. Whether you're exploring opportunities or advancing in your career, our resources are always available to support your journey.

            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt--160">
        <div class="other-feature-item">
          <i class="ti-briefcase"></i>
          <h4>100+ Courses</h4>
          <div>
            <p>
              Our extensive catalog includes over 100 courses designed to enhance your skills and knowledge in fields relevant to internships. These courses cover everything from technical skills to soft skills, ensuring you're well-prepared to stand out in competitive internship applications and thrive in professional environments.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt--260">
        <div class="other-feature-item">
          <i class="ti-medall-alt"></i>
          <h4>Top Companies</h4>
          <div>
            <p>
              We partner with leading companies across industries to bring you exclusive internship opportunities. These internships provide invaluable hands-on experience, mentorship from industry experts, and a chance to network with professionals who can help shape your career trajectory.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Feature Area ================= -->

<!-- ================ Start Testimonials Area ================= -->
<section class="testimonials-area section-gap">
  <div class="container">
    <div class="testi-slider owl-carousel" data-slider-id="1">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="item">
            <div class="testi-item">
              <img src="img/quote.png" alt="" />
              <div class="mt-40 text">
                <p>
                  "The certification course was transformative. The content was comprehensive, and the instructors were top-notch. It opened doors to new career opportunities for me."
                </p>
              </div>
              <h4>Sarah T.</h4>
              <p> Data Analyst</p>
            </div>
          </div>
        </div>

        <div class="offset-lg-1 col-lg-6">
          <img src="img/person1.jpg" alt="" />
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="item">
            <div class="testi-item">
              <img src="img/quote.png" alt="" />
              <div class="mt-40 text">
                <p>
                  "Thanks to this scholarship, I could pursue my passion for art and design. I'm now working at my dream job."

                </p>
              </div>
              <h4>David M. </h4>
              <p>Graphic Design Student</p>
            </div>
          </div>
        </div>

        <div class="offset-lg-1 col-lg-6">
          <img src="img/person2.jpg" alt="" />
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="item">
            <div class="testi-item">
              <img src="img/quote.png" alt="" />
              <div class="mt-40 text">
                <p>
                  "Thanks to this platform, I landed an amazing internship at a top tech company. The process was seamless, and the resources were incredibly helpful!""
                </p>
              </div>
              <h4>Alex</h4>
              <p>Computer Science Student</p>
            </div>
          </div>
        </div>

        <div class="offset-lg-1 col-lg-6">
          <img src="img/person3.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Testimonials Area ================= -->

<!-- ================ Start Registration Area ================= -->
<section class="registration-area">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-5">
        <div class="section-title text-left text-white">
          <h2 class="text-white">
            Get in<br>
            Touch
          </h2>
          <p>
            Have questions or need support navigating your internship search? Our dedicated team is here to provide you with personalized assistance and guidance every step of the way. Whether you're unsure about how to optimize your profile, need help with application strategies, or have queries about specific internship opportunities, we're committed to helping you succeed. Reach out to us.
          </p>
        </div>
      </div>
      <div class="offset-lg-3 col-lg-4 col-md-6">
        <div class="course-form-section">
          <h3 class="text-white">Contact for Free</h3>
          <p class="text-white">It is high time for learning</p>
          <form class="course-form-area contact-page-form course-form text-right" id="myForm" <?php echo"action='database/message.php?pg=index'"; ?> method="post">
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
            </div>
            <div class="form-group col-md-12">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="message" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'">
            </div>
            <div class="col-lg-12 text-center">
              <button type="submit" class="btn text-uppercase">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Registration Area ================= -->

<!-- ==============================================PAGE CONTENT================================================ -->
<?php include("co_footer.php") ?>
<?php include("co_script.php") ?>

<?php
// }else{
//      header("Location: signin.php");
//      exit();
// }
?>