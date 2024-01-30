<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/145.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #blue;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;} </style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>

    <div class="page">
      <div id="home">

        <!-- Page Header-->
        <header class="section page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">

            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->

                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.php"><img src="images/Logo MoE-01.png" alt="" width="223" height="50"/></a></div>
                  </div>

                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.php"><span id="datetime"></span></a></div>
                  </div>

                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Share-->
                      <div class="rd-navbar-share fl-bigmug-line-share27" data-rd-navbar-toggle=".rd-navbar-share-list">
                        <ul class="list-inline rd-navbar-share-list">
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-facebook" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-twitter" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </div>
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#schemes">Schemes</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#particles-js">Students</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#faq">FAQs</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="admin/index.php">Admin</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </nav>
          </div>

          <script>
            
      // create a function to update the date and time
      function updateDateTime() {
        // create a new `Date` object
        const now = new Date();

        // get the current date and time as a string
        const currentDateTime = now.toLocaleString();

        // update the `textContent` property of the `span` element with the `id` of `datetime`
        document.querySelector('#datetime').textContent = currentDateTime;
      }

      // call the `updateDateTime` function every second
      setInterval(updateDateTime, 1000);
    </script>

    <style>
        .box {
            background-color: black;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        p {
            font-size: 17px;
            align-items: center;
        }
        .box a {
            display: inline-block;
            background-color: #fff;
            padding: 15px;
            border-radius: 3px;
        }
        .modal {
            align-items: center;
            display: flex;
            justify-content: center; 
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(254, 126, 126, 0.7);
            transition: all 0.4s;
            visibility: hidden;
            opacity: 0;
        }
        .content {
            position: absolute;
            background: white;
            width: 400px;
            padding: 1em 2em;
            border-radius: 4px;
        } 
        .modal:target {
            visibility: visible;
            opacity: 1;
        }
        .box-close {
            position: absolute;
            top: 0;
            right: 15px;
            color: #fe0606;
            text-decoration: none;
            font-size: 30px;
        }
    </style>

        </header>

<br>

        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
          <div class="swiper-wrapper text-center">

            <div class="swiper-slide" data-slide-bg="images/IMG_6970.jpg">
              <div class="swiper-slide-caption section-md">
                <!--<div class="container">
                  <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Majlis Menandatangan Biasiswa</h1>
                  <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate purposes of worldwide businesses.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Read More</a>
                </div>-->
              </div>
            </div>

            <div class="swiper-slide" data-slide-bg="images/IMG_5704.jpg">
              <div class="swiper-slide-caption section-md">
                <!--<div class="container">
                  <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Majlis Pembukaan Jati Diri Berkat 2023</h1>
                  <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">We are a team of qualified software developers, aimed at creating unique and powerful tools for your business & everyday life.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Read More</a>
                </div>-->
              </div>
            </div>

            <div class="swiper-slide" data-slide-bg="images/IMG_9303.jpg">
              <div class="swiper-slide-caption section-md">
                <!--<div class="container">
                  <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Majlis Penutup Jati Diri Berkat</h1>
                  <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">The software solutions developed by our company have been numerously awarded for usability and innovative features.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Read More</a>
                </div>-->
              </div>
            </div>

          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination__module">
            <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
            <div class="swiper-pagination__divider"></div>
            <div class="swiper-pagination"></div>
          </div>
        </section>


        <!--<div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
               Team Classic
              <article class="team-classic team-classic-lg justify-content-center"><a class="team-classic-figure" href="#"><img src="images/145.png" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Jill Peterson</a></h4>
                  <p class="team-classic-status">UI Designer</p>
                </div>
              </article>
            </div>-->

        <section class="section section-sm section-fluid bg-default text-center" id="home">
        <div class="container-fluid">
          <img src="images/145.png" alt="" width="200" height="120"/>
          <h2 class="wow fadeInLeft">Jabatan Pengurusan Biasiswa</h2>
          <h4 class="wow fadeInLeft">Department of Scholarship Management</h4>
        </div>
      </section>

        
        <section class="section section-sm section-fluid bg-default text-center" id="home">
        <div class="container-fluid">
          <h3 class="wow fadeInLeft"><span style="color: royalblue">Vision</span></h3>
          <h5 class="wow fadeInLeft">Create Highly Skilled, Well Educated Graduates Towards Nation Building</h5>

          <br>

          <h3 class="wow fadeInLeft"><span style="color: royalblue">Mission</span></h3>
          <h5 class="wow fadeInLeft">To Provide Scholarship to Qualified Students to Realise Their True Potential and National Aspirations</h5>
        </div>
      </section>

      <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-40">

              <hr>

    <h2>Biasiswa Kerajaan is <span style="color: red"> Closing </span> in</h2>
    <h4 id="counter" class="text-center"></h4>     

    <hr>
    
            </div>
        </div>
    </div>

<?php 
 $dateTime = strtotime('February 29, 2024 18:00:00');
 $getDateTime = date("F d, Y H:i:s", $dateTime); 
?>
<!-- Script -->
<script>
        var countDownTimer = new Date("<?php echo "$getDateTime"; ?>").getTime();
        // Update the count down every 1 second
        var interval = setInterval(function() {
            var current = new Date().getTime();
            // Find the difference between current and the count down date
            var diff = countDownTimer - current;
            // Countdown Time calculation for days, hours, minutes and seconds
            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById("counter").innerHTML = days + " Days : " + hours + " Hours : " +
            minutes + " Minutes : " + seconds + " Seconds";
            // Display Expired, if the count down is over
            if (diff < 0) {
                clearInterval(interval);
                document.getElementById("counter").innerHTML = "Application is now closed.";
            }
        }, 1000);
</script>

      <!-- Events and News -->
      <section class="section section-sm section-fluid bg-default text-center" id="events">
        <div class="container-fluid">
          <h2 class="wow fadeInLeft">Events and News</h2>
          <!--<p class="quote-jean wow fadeInRight" data-wow-delay=".1s">In our portfolio, you can browse the latest products developed for our clients for different corporate purposes. Our qualified team of interface designers and software developers is always ready to create something unique for you.</p>-->
          <!--<div class="isotope-filters isotope-filters-horizontal">
            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
            <ul class="isotope-filters-list" id="isotope-3">
              <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
              <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">mobile Apps</a></li>
              <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Custom Software</a></li>
              <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">QA & Testing</a></li>
              <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">UX and Design</a></li>
            </ul>
          </div>-->
          <div class="row row-30 isotope justify-content-center" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/420penutupberkat.JPG" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/penutupberkat.JPG" data-lightgallery="item"><img src="images/penutupberkat.JPG" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Majlis Penutup JatiDiri Berkat 2023</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">Kementerian Pendidikan melalui Jabatan Pengurusan Biasiswa pada 5 September 2023 telah mengadakan Majlis Penutup bagi Program Jati Diri 'Berkat' di Dewan Teater, Pejabat Daerah Brunei-Muara.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/420pembukaanberkat.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/pembukaanberkat.jpg" data-lightgallery="item"><img src="images/pembukaanberkat.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Majlis Pembukaan Rasmi Program Jati Diri 'Berkat' 2023</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">Majlis Pembukaan Rasmi Program JatiDiri 'Berkat' bagi pelajar yang dianugerahkan Biasiswa Kerajaan ke Luar Negeri dan Skim Bantuan Pinjaman Pendidikan (SBPP) di Dewan Utama, Kementerian Pendidikan dan Sekolah Menengah Menglait pada 30 Ogos 2023.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Q-Manage</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">details details here.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">WeatherCast</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">details details here.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Home Calendar</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">details details here.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">MPlanner</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">details details here.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Alice Messenger</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">details details here.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">WiseMoney</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">details details here.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      </div>
      <!-- See all services-->
      <section class="section section-sm section-first bg-default text-center" id="schemes">
        <div class="container">
          <div class="row row-45 justify-content-center">
            <h2 class="wow fadeInLeft">Schemes</h2>
            <!--<div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp"><img src="images/index-1-415x592.png" alt="" width="415" height="592"/>
            </div>-->
            <div>
              <div class="row row-45">

                <!-- vokasional -->
                
                <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h3 class="box-icon-modern-big-title">Vocational</h3>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-laptop-phone"></div>
                    <h5 class="box-icon-modern-title"><a href="bptv.html">Skim Biasiswa Pendidikan Teknikal dan Vokasional (BPTV)</a></h5>
                    <!--<div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>-->
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-hammer-wrench"></div>
                    <h5 class="box-icon-modern-title"><a href="tvet.html">Skim Pendidikan dan Latihan Teknikal dan Vokasional (TVET)</a></h5>
                    <!--<div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Need specific software for your company? We are ready to develop it!</p>-->
                  </article>
                </div>

                <!-- end vokasional -->

                <!-- Undergrad -->

                <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h3 class="box-icon-modern-big-title">Undergraduate</h3>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-graduation-hat"></div>
                    <h5 class="box-icon-modern-title"><a href="degree.html">Biasiswa Kerajaan Kebawah Duli Yang Maha Mulia</a></h5>
                    <!-- <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>-->
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-receipt"></div>
                    <h5 class="box-icon-modern-title"><a href="sbpp.html">Skim Bantuan Pinjaman Pendidikan (SBPP)</a></h5>
                    <!-- <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>-->
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <!--<article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h3 class="box-icon-modern-big-title">Undergrad</h3>
                      <div class="box-icon-modern-decor"></div><a class="button button-primary button-ujarak" href="#">View All Schemes</a>
                    </div>
                  </article> -->
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".3s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-plane"></div>
                    <h5 class="box-icon-modern-title"><a href="ame.html">Skim Biasiswa Khas Aircraft Maintenance Engineer (AME) </a></h5>
                    <!--<div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">We can also offer you reliable cloud development solutions.</p>-->
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <!--<article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-headset"></div>
                    <h5 class="box-icon-modern-title"><a href="#">Biasiswa Kerajaan</a></h5>
                     <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>
                  </article>-->
                </div>

                <!-- end Undergrad -->

                <!-- Postgrad -->

                <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h3 class="box-icon-modern-big-title">Postgraduate & <br> Professional</h3>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-graduation-hat"></div>
                    <h5 class="box-icon-modern-title"><a href="postprobk.html">Biasiswa Kerajaan Kebawah Duli Yang Maha Mulia</a></h5>
                    <!-- <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>-->
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <!--<article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-headset"></div>
                    <h5 class="box-icon-modern-title"><a href="#">Biasiswa Kerajaan</a></h5>
                     <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>
                  </article>-->
                </div>

                <!-- end Postgrad -->

                <!-- Professional 

                <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h3 class="box-icon-modern-big-title">Professional</h3>
                      <div class="box-icon-modern-decor"></div><a class="button button-primary button-ujarak" href="#">View All Schemes</a>
                    </div>
                  </article>
                </div>

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-graduation-hat"></div>
                    <h5 class="box-icon-modern-title"><a href="/temp/degree.html">Biasiswa Kerajaan Kebawah Duli Yang Maha Mulia</a></h5> -->
                    <!-- <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>--><!--
                  </article>
                </div>-->

                <div class="col-sm-10 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                  <!--<article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-headset"></div>
                    <h5 class="box-icon-modern-title"><a href="#">Biasiswa Kerajaan</a></h5>
                     <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>
                  </article>-->
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Cta-->
     <!-- <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/parallax-1.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay">
            <div class="container">
              <div class="row row-30 justify-content-end text-right">
                <div class="col-sm-7">
                  <h3 class="wow fadeInLeft">Let's Develop Your Next Great App!</h3>
                  <p>Do you need a unique software solution for your company? We know how to help you!</p>
                  <div class="group-sm group-middle group justify-content-end"><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal">Get in Touch</a><a class="button button-white-outline button-ujarak" href="#">Learn More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->

      

      <!-- Years of experience-->
      <section class="section section-sm bg-default" id="students">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
            <div class="col-md-6 col-lg-5 col-xl-4 text-center"><a class="text-img" href="#">
                <div id="particles-js"></div><span class="counter">503</span></a></div>
            <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
              <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                <h3 class="title-decoration-lines-left">MOE Scholarship Students</h3>
                <!--<p class="text-gray-500">RatherApp is a team of highly experienced app designers and developers creating unique software for you.</p><a class="button button-secondary button-pipaluk" href="#">Get in touch</a>-->
              </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="row justify-content-center border-2-column offset-top-xl-26">
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">86</span>
                     <!-- <span class="symbol">k</span> -->
                    </div>
                    <h6 class="counter-amy-title">SBPP Students</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">40</span>
                    </div>
                    <h6 class="counter-amy-title">BPTV Students</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">67</span>
                    </div>
                    <h6 class="counter-amy-title">TVET Students</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">78</span>
                    </div>
                    <h6 class="counter-amy-title">AME Students</h6>
                  </div>
                </div>
              </div>
            </div>

              </div>
</div>
</section>

<section class="section section-sm bg-default" id="students">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-left align-items-left align-items-lg-start text-left">

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Australia', 'Ireland', 'United Kingdom', 'Hong Kong', 'New Zealand'],
          ['2021', 3, 2, 40, 2, 10],
          ['2022', 7, 3, 23, 2, 5],
          ['2023', 5, 4, 34, 4, 2],
          ['2024', 1, 4, 45, 3, 9]
        ]);

        var options = {
          chart: {
            title: 'Total Number of Students',
            subtitle: 'All Total Data: 2021-2024',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <div id="barchart_material" style="width: 900px; height: 500px;"></div>


  </div>
</div>
</section>

<section class="section section-sm bg-default" id="students">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Courses', 'Number of Students'],
          ['Medicine',     11],
          ['Dentistry',      2],
          ['Non-Medicine',  2],
        ]);

        var options = {
          title: 'Total Number of Students',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>




            </div>
          </div>
        </section>


<section class="section section-sm bg-default" id="students">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">

            <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h5 class="box-icon-modern-big-title"><a href="melapor.php">Melapor Diri (Tamat)</a></h5>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
            </div>
            <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h5 class="box-icon-modern-big-title"><a href="melaporcuti.php">Melapor Diri (Cuti)</a></h5>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
            </div>
            <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h5 class="box-icon-modern-big-title"><a href="privatestudents.php">Private Students</a></h5>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
            </div>
            <div class="col-sm-10 col-lg-4 col-xxl-3 isotope-item wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h5 class="box-icon-modern-big-title"><a href="downloadforms.html">View and Download all forms</a></h5>
                      <div class="box-icon-modern-decor"></div><!--<a class="button button-primary button-ujarak" href="#">View All Schemes</a>-->
                    </div>
                  </article>
            </div>

           <!-- <div class="col-lg-6 col-xl-12 align-self-center">
              <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft"><a class="clients-classic" href="#"><img src="images/clients-9-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="images/clients-10-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="images/clients-3-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="images/clients-11-270x117.png" alt="" width="270" height="117"/></a></div>
              </div>
            </div>-->
          </div>
        </div>
      </section>

      <!-- Meet The Team-->
      <section class="section section-sm section-fluid bg-default" id="team">
        <div class="container-fluid">
          <h2>Meet The Team</h2>

          <br>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#popup-box">Dyg Rosimah Sumaimah binti Matassim</a></h4>
                  <p class="team-classic-status">Pemangku Pegawai Tugas-Tugas Khas Kanan</p>
                </div>
              </article>
            </div>

          </div>

          <br>
          <br>

          <h3>Unit Biasiswa Dan Bursari</h3>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Syed Rozman bin Haji Syed Abdul Rahim</a></h4>
                  <p class="team-classic-status">Pegawai Pelajaran Kanan</p>
                </div>
              </article>
            </div>

          </div>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Awg Hj Ismayuda bin DP Hj Muhammad</a></h4>
                  <p class="team-classic-status">Pegawai Pelajaran</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Rosnah binti Hj Jamadil</a></h4>
                  <p class="team-classic-status">Pengajar Teknik Kanan</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Nur'Afifah binti Safry</a></h4>
                  <p class="team-classic-status">Pegawai Dermasiswa Kanan</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Susilayati binti Hj Md Diah</a></h4>
                  <p class="team-classic-status">Pegawai Pelajaran</p>
                </div>
              </article>
            </div>

          </div>

          <br>
          <br>

          <h3>Unit Pentadbiran dan Kewangan</h3>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Norkhanizah Wati binti Hj Ahmad</a></h4>
                  <p class="team-classic-status">Ketua Pegawai Dermasiswa dan Kesejahteraan</p>
                </div>
              </article>
            </div>

          </div>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Fakhriah binti Haji Jumaidi</a></h4>
                  <p class="team-classic-status">Pegawai Pelajaran</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Noor Farizan binti Awang Abdullah</a></h4>
                  <p class="team-classic-status">Penolong Pegawai Kewangan Tingkat Satu</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Najwa Iman Majeedah binti Hj Aspar</a></h4>
                  <p class="team-classic-status">Penolong Pegawai Kewangan Tingkat Satu</p>
                </div>
              </article>
            </div>

          </div>

          <br>
          <br>

          <h3>Unit Pengurusan Strategik Dan Pemantauan</h3>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Awg Hj Raminey bin Hj Salleh</a></h4>
                  <p class="team-classic-status">Ketua Pegawai Dermasiswa dan Kesejahteraan</p>
                </div>
              </article>
            </div>

          </div>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Nur Rez Raziqin binti Mohd Laidin</a></h4>
                  <p class="team-classic-status">Pegawai Dermasiswa Kanan</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Noreida binti Mohammad</a></h4>
                  <p class="team-classic-status">Pegawai Dermasiswa dan Kesejahteraan</p>
                </div>
              </article>
            </div>

          </div>

          <br>
          <br>

          <h3>Kakitangan Jabatan Pengurusan Biasiswa</h3>

          <div class="row row-sm row-30 justify-content-center">

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-12-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Noorussa'adah binti Hashim</a></h4>
                  <p class="team-classic-status">Kerani Sulit</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Awg Muhammad Wafiuddin bin Abd Wahab</a></h4>
                  <p class="team-classic-status">Pembantu Pejabat</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Awg Abdul Qohaar @ Isa bin Ibrahim</a></h4>
                  <p class="team-classic-status">Pembantu Pejabat</p>
                </div>
              </article>
            </div>

          </div>

          <div class="row row-sm row-30 justify-content-center">

          <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-12-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Hajah Normah binti Haji Bakar</a></h4>
                  <p class="team-classic-status">Kerani</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Hajah Emysuriati binti Haji Busu</a></h4>
                  <p class="team-classic-status">Kerani</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Awg Haji Halimshah bin Haji Bakar</a></h4>
                  <p class="team-classic-status">Kerani</p>
                </div>
              </article>
            </div>

          </div>

          <div class="row row-sm row-30 justify-content-center">
            
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Pg Md Muin bin Pg Hj Idris</a></h4>
                  <p class="team-classic-status">Pekerja Tingkat 3</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Awg Muhammad Hairul Ilham bin Haji Abdul Rahman</a></h4>
                  <p class="team-classic-status">Pekerja Tingkat 3</p>
                </div>
              </article>
            </div>

          </div>

          <div class="row row-sm row-30 justify-content-center">
            
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dk Hajah Zati Qasdina binti Pg Haji Abd Kadir</a></h4>
                  <p class="team-classic-status">Kerani</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Dyg Norazatul Aliyah binti Haji Ladi</a></h4>
                  <p class="team-classic-status">Kerani</p>
                </div>
              </article>
            </div>

          </div>




        </div>
      </section>

      <!-- FAQ-->
      <section class="section section-sm section-bottom-70 section-fluid bg-default" id="faq">
        <div class="container-fluid">
          <h2>Frequently Asked Questions</h2>
          <div class="row row-50 row-sm">

            <div class="col-md-6 col-xl-4 wow fadeInRight">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                 <!-- <div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-11-75x75.jpg" alt="" width="75" height="75"/></a></div>-->
                  <div class="unit-body">
                    <h4 class="quote-modern-status"><a href="#">What is the requirements to apply for Scholarship?</a></h4>
                    <!--<p class="quote-modern-status">Regular client</p>-->
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">Information on Scholarship requirements can be retrieved from "Surat Pemberitahuan" which can be downloaded from MOE Website (www.moe.gov.bn)</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <!--<div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-12-75x75.jpg" alt="" width="75" height="75"/></a></div>-->
                  <div class="unit-body">
                    <h4 class="quote-modern-status"><a href="#">Where can I get Surat Pemberitahuan?</a></h4>
                    <!--<p class="quote-modern-status">Regular client</p>-->
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">Surat Pemberitahuan can be downloaded from MOE Website (www.moe.gov.bn)</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <!--<div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-20-75x75.jpg" alt="" width="75" height="75"/></a></div>-->
                  <div class="unit-body">
                    <h4 class="quote-modern-status"><a href="#">How do I apply for Scholarship?</a></h4>
                    <!--<p class="quote-modern-status">Regular client</p>-->
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">1. Degree<br>Applications for Degree Scholarship are made online through HECAS (www.hecas.edu.bn)<br>2. Master / Professsional / PhD<br>Applications for Master / Professional / PhD Scholarship are made by filling out an Application Form which can be collected from Scholarship Section's Office during office hours.</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <!--<div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-20-75x75.jpg" alt="" width="75" height="75"/></a></div>-->
                  <div class="unit-body">
                    <h4 class="quote-modern-status"><a href="#">What courses are being offered by Scholarship?</a></h4>
                    <!--<p class="quote-modern-status">Regular client</p>-->
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">Information on courses offered can be retrieved from "Surat Pemberitahuan" which can be downloaded from MOE Website (www.moe.gov.bn)</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <!--<div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-20-75x75.jpg" alt="" width="75" height="75"/></a></div>-->
                  <div class="unit-body">
                    <h4 class="quote-modern-status"><a href="#">Scholarship Application Dates and Deadlines?</a></h4>
                    <!--<p class="quote-modern-status">Regular client</p>-->
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">The timeline for Scholarship applications is announced through Social Media especially through radio</p>
                </div>
              </article>
            </div>

            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <!--<div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-20-75x75.jpg" alt="" width="75" height="75"/></a></div>-->
                  <div class="unit-body">
                    <h4 class="quote-modern-status"><a href="#">Do private students need to register with Scholarship Section? and how?</a></h4>
                    <!--<p class="quote-modern-status">Regular client</p>-->
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">Yes. Registration form can be collected from Scholarship Section's Office during office hours</p>
                </div>
              </article>
            </div>

          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left" id="contacts">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Get in touch</h3>
            </div>
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
          </form>
        </div>

        <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Contact Us</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact-modal" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-modal-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-modal-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-modal-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-modal-message">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-modal-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->


      </section>

      <!-- Contact information-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-3">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#">Tel: +673 2380019</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-3">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">Tingkat 5, Blok C, Kementerian Pendidikan Berakas, BB3510, Negara Brunei Darussalam</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-3">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">scholarship@moe.gov.bn</a></p>
                  <!--<p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>-->
                </div>
              </article>
            </div>
            <div class="col-sm-3">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-user143"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">Kaunter 3, Pusat <br>Perkhidmatan Setempat, <br> Block C, Lantai dasar,<br> Kementerian Pendidikan,<br> Negara Brunei Darussalam</a></p>
                  <!--<p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>-->
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section section-fluid footer-minimal context-dark">
        <div class="bg-gray-15">
          <div class="container-fluid">
            <div class="footer-minimal-inset oh">
              <ul class="footer-list-category-2">
                <a>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp Downloads</a>
                <a href="#">&nbsp &nbsp Quicklinks</a>
                <a href="#">&nbsp &nbsp &nbsp Forms</a>
                <a href="#">&nbsp &nbsp &nbsp &nbsp Contact Us</a>
              </ul>
              <ul class="footer-list-category-2">
                <li><a href="#">Surat Pemberitahuan</a></li>
                <li><a href="#">Alumnis</a></li>
                <li><a href="#">Melapor Tamat</a></li>
                <li><a href="#">Location</a></li>
              </ul>
              <ul class="footer-list-category-2">
                <li><a href="#">Terma Syarat SBPP</a></li>
                <li><a href="#">Attaches</a></li>
                <li><a href="#">Melapor Cuti</a></li>
                <li><a href="#">Email</a></li>
              </ul>
            </div>
            <div class="footer-minimal-bottom-panel text-sm-left">
              <div class="row row-10 align-items-md-center">
                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                  <div>
                    <ul class="list-inline list-inline-sm footer-social-list-2">
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 order-sm-first">
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>RatherApp</span>
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-md-right"><span>All rights reserved.</span> <span>Design&nbsp;by&nbsp;Halizzah Sirat</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

  </body>
</html>