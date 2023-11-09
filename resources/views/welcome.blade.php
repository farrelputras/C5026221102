<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>5026221102_Fernandio Farrel</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Bootstrap 4 CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- Main CSS File -->
  <link rel="stylesheet" href="ETS/style.css" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="ETS/assets/Logo OSIS PNG.png" alt="" class="img-fluid" /></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">The Team</a></li>

          <li class="dropdown">
            <a href="#"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Pengenalan Lingkungan Sekolah</a></li>
              <li><a href="#">Sosial Media</a></li>
              <li class="dropdown">
                <a href="#"><span>Pentas Seni</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Malam Genitu</a></li>
                  <li><a href="#">Dempo Fair</a></li>
                  <li><a href="#">Dempo Talent Show</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#"><span>Tugas PWEB</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown">
                <a href="#"><span>Catatan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="http://127.0.0.1:8000/hello" target="blank">Hello</a></li>
                  <li><a href="http://127.0.0.1:8000/style" target="blank">Style</a></li>
                  <li><a href="http://127.0.0.1:8000/js1" target="blank">JavaScript 1</a></li>
                  <li><a href="http://127.0.0.1:8000/js2" target="blank">JavaScript 2</a></li>
                  <li><a href="http://127.0.0.1:8000/resp" target="blank">Responsive</a></li>
                </ul>
              </li>
              <li><a href="http://127.0.0.1:8000/tugas1" target="blank">Tugas 1</a></li>
              <li class="dropdown">
                <a href="#"><span>Tugas 2</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="http://127.0.0.1:8000/tugas2-card-columns" target="blank">Card Columns</a></li>
                  <li><a href="http://127.0.0.1:8000/tugas2-card-deck" target="blank">Card Deck</a></li>
                  <li><a href="http://127.0.0.1:8000/tugas2-card-images" target="blank">Card Images</a></li>
                  <li><a href="http://127.0.0.1:8000/tugas2-card-contextual" target="blank">Contextual Cards</a></li>
                </ul>
              </li>
              <li><a href="http://127.0.0.1:8000/tugas3" target="blank">Tugas 3</a></li>
            </ul>
          </li>

          <a href="" class="get-started-btn">Contact Us</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>OSIS #STHIRA</h1>
      <h2>Breakthrough the limit, together we can do it!</h2>
      <a href="" class="btn-get-started">Contact Us</a>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Visi Misi Section ======= -->
  <section id="visi-misi" class="visi-misi">
    <h1>About Us</h1>
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h3>Visi</h3>
                <q>Mendorong dan mengajak Dempoers menjadi kaum muda yang kreatif, inovatif, dan adaptif dengan
                  berlandaskan Doa, Persaudaraan, dan Pelayanan</q>
              </div>
              <div class="flip-card-back">
                <h3>Misi</h3>
                <p>1. Menjadikan OSIS sebagai wadah aspirasi, kreasi, dan inovasi.</p>
                <p>2. Menyelenggarakan kegiatan-kegiatan yang menumbuhkan kreativitas, inovasi, dan keaktifan warga
                  sekolah.</p>
                <p>3. Menjalankan program kerja OSIS dengan penuh tanggung jawab</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div id="carouselvm" class="carousel slide borderc" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active borderc">
                <img class="d-block w-100" src="ETS/assets/lead.jpg" alt="5th LEAD">
              </div>
              <div class="carousel-item borderc">
                <img class="d-block w-100" src="ETS/assets/rpj.jpg" alt="RPJ">
              </div>
              <div class="carousel-item borderc">
                <img class="d-block w-100" src="ETS/assets/trex.jpg" alt="T-Rex">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselvm" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselvm" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- End .content-->
      </div>
    </div>
    </div>
  </section>
  <!-- End Visi Misi Section -->

  <!-- ======= Coming Soon Section ======= -->
  <section id="cs" class="cs">
    <div class="container" data-aos="fade-in">
      <div class="text-center">
        <h1>Coming Soon!</h1>
        <div class="comsoon">
          <h3>Malam Genitu</h3>
          <p id="countdown"></p>
        </div>

        <a class="cs-btn" href="#">Tentang Kegiatan</a>
      </div>
    </div>
  </section>
  <!-- End Coming Soon Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <div class="text-center">
        <h1>Gallery</h1>
      </div>
    </div>

    <div class="container-fluid gallerym">
      <div class="row g-0">
        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/1633170995170.jpg" class="galelry-lightbox">
              <img src="ETS/assets/gallery/1633170995170.jpg" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/1645188458243.jpg" class="galelry-lightbox">
              <img src="ETS/assets/gallery/1645188458243.jpg" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/2022-01-08 (1).png" class="galelry-lightbox">
              <img src="ETS/assets/gallery/2022-01-08 (1).png" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/IMG-20210227-WA0012 (1).jpg" class="galelry-lightbox">
              <img src="ETS/assets/gallery/IMG-20210227-WA0012 (1).jpg" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/IMG-20211101-WA0004.jpg" class="galelry-lightbox">
              <img src="ETS/assets/gallery/IMG-20211101-WA0004.jpg" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/IMG-20211231-WA0020.jpg" class="galelry-lightbox">
              <img src="ETS/assets/gallery/IMG-20211231-WA0020.jpg" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/IMG_20211003_004735.jpg" class="galelry-lightbox">
              <img src="ETS/assets/gallery/IMG_20211003_004735.jpg" alt="" class="img-fluid" />
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 grid">
          <div class="gallery-item">
            <a href="ETS/assets/gallery/IMG_2357.JPG" class="galelry-lightbox">
              <img src="ETS/assets/gallery/IMG_2357.JPG" alt="" class="img-fluid" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <h1>Contact Us</h1>
    </div>

    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt">
                <span class="material-symbols-outlined">
                  location_on
                </span>
              </i>
              <h4>Alamat:</h4>
              <p>Jl. Talang 1, Malang 65112, Jawa Timur, Indonesia</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope">
                <span class="material-symbols-outlined">
                  mail
                </span>
              </i>
              <h4>Email:</h4>
              <p>osis@st-albertus.sch.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone">
                <span class="material-symbols-outlined">
                  smartphone
                </span>
              </i>
              <h4>Instagram</h4>
              <a href="https://instagram.com/dempoers">
                <p>@dempoers</p>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
              </div>
            </div>
            <div class="row warning">
              <div class="col-md-6 warning">
                <p id="vname"></p>
              </div>
              <div class="col-md-6 warning">
                <p id="vemail"></p>
              </div>
            </div>
            <div class="mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
            </div>
            <div class="row warning">
              <p id="vsub"></p>
            </div>
            <div class="mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="row warning">
              <p id="vmsg"></p>
            </div>
            <div class="text-center">
              <button onclick="form_validation()" type="button">Send Message</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- JS Script -->
  <script>
    // Countdown Timer
    var countDownDate = new Date("Nov 11, 2023 15:00:00").getTime();
    var x = setInterval(function () {
      var now = new Date().getTime();

      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("countdown").innerHTML =
        days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);

    //Form Validation
    function form_validation() {

    let fname = document.getElementById("name").value;
    let validatename = document.getElementById("vname");
    if (fname === "") {
      validatename.innerText = "Nama tidak boleh kosong";
      validatename.classList.add("inputform", "text-danger", "fw-bold", "warning");
    } else validatename.innerText = "";

    let email = document.getElementById("email").value;
    let validatemail = document.getElementById("vemail");
    if(email === ""){
      validatemail.innerText = "Email tidak boleh kosong";
      validatemail.classList.add("inputform", "text-danger", "fw-bold", "warning");
    } else if (!email.includes("@") || !email.includes(".")){
      validatemail.innerText = "Bukan sebuah email";
      validatemail.classList.add("inputform", "text-danger", "fw-bold", "warning");
    } else validatemail.innerText = "";

    let subject = document.getElementById("subject").value;
    let validatesub = document.getElementById("vsub");
    if (subject === "") {
      validatesub.innerText = "Subject tidak boleh kosong";
      validatesub.classList.add("inputform", "text-danger", "fw-bold", "warning");
    } else validatesub.innerText = "";
  }
  </script>
</body>

</html>
