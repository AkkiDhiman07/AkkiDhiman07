<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourist - Explore the World</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">


</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#">
        <h1 class="logo">Tourist</h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="./about_us.php" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="./tours.html"class="navbar-link">Tours</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Destinations</a>
          </li>

          <li>
            <a href="https://www.instagram.com/chaukhambatravels?igsh=MnNpeWRpZ3Zra250" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="ContactUs.php" class="navbar-link">Contact Us</a>
          </li>

        </ul>
          
        <a href="booking_now.php" class="btn btn-secondary">Booking Now</a>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle">Explore Your Travel</p>

            <h2 class="hero-title">CHAUKHAMBA TRAVEL AGENCY</h2>

            <p class="hero-text">
              "Travel is the only thing you buy that makes you richer. Let us be your compass to a world of unforgettable experiences and hidden treasures."
            </p>

            <div class="btn-group">
              <a href="ContactUs.php" loading="lazy"class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #DESTINATION
      -->

      <section class="section destination">
        <div class="container">

          <p class="section-subtitle">Destinations</p>

          <h2 class="h2 section-title">SERVICES WE PROVIDE</h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-1.jpg" width="1140" height="1120" loading="lazy"
                    alt="CharDham,Yatra" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">CharDham</p>

                  <h3 class="h3 card-title">Yatra</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-2.jpg" width="1140" height="1100" loading="lazy"
                    alt="Manali,Himachal Pradesh" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Manali</p>

                  <h3 class="h3 card-title">Himachal</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-3.jpg" width="1110" height="480" loading="lazy"
                    alt="kochi,Kerala" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Kochi</p>

                  <h3 class="h3 card-title">Kerala</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-4.jpg" width="1110" height="480" loading="lazy"
                    alt="Ravangla,Sikkim" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Ravangla</p>

                  <h3 class="h3 card-title">Sikkim</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-5.jpg" width="1110" height="480" loading="lazy"
                    alt="ShriNagar,Kashmir" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">ShriNagar</p>

                  <h3 class="h3 card-title">Kashmir</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #POPULAR
      -->

      <section class="section popular">
        <div class="container">

          <p class="section-subtitle">Featured Tours</p>

          <h2 class="h2 section-title">Most Popular Tours In Summer</h2>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-1.jpg" width="740" height="518" loading="lazy"
                      alt="CharDham,Yatra" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">11N-12 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From $???</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">A good traveler has no fixed plans and is not intent on arriving.</a>
                  </h3>

                  <address class="card-location">CharDham,Yatra</address>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-2.jpg" width="740" height="518" loading="lazy"
                      alt="Uttarkhand" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">5N-6D</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From $???</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">A good traveler has no fixed plans and is not intent on arriving.</a>
                  </h3>

                  <address class="card-location">Uttarkhand</address>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-3.jpg" width="740" height="518" loading="lazy"
                      alt="Goa ,Maharastra" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">3N-4D</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From $???</div>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">A good traveler has no fixed plans and is not intent on arriving.</a>
                  </h3>

                  <address class="card-location">Goa,Maharastra</address>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Explore all tour of the world with us.</h2>

            <p class="about-text">
              "Embark on a journey through India with us, a land where every corner offers a tapestry 
              of vibrant cultures, ancient wonders,and breathtaking landscapes. 
              From the snowy peaks of the Himalayas to the serene backwaters of Kerala, 
              our tailored tours promise unforgettable adventures and deeply authentic experiences. 
              Let us guide you through India's mesmerizing diversity,
               where each destination is a new discovery waiting to enchant your soul."
            </p>

            <ul class="about-list">

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="compass"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Tour guide</h3>

                  <p class="about-item-text">
                    "Discover the secrets of your destination with our expert tour guides, 
                    who bring each location to life with passion and deep local knowledge. 
                    They're not just guides;
                     they're your gateway to unforgettable experiences and hidden gems off the beaten path."
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="briefcase"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Friendly price</h3>

                  <p class="about-item-text">
                    "Explore the world without breaking the bank with our friendly prices, 
                    designed to bring your dream destinations within reach. 
                    Experience more, spend less, and embark on unforgettable 
                    journeys that enrich your life, not deplete your wallet."
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="umbrella"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Reliable tour</h3>

                  <p class="about-item-text">
                    "Embark on your adventure with confidence, knowing our reliable tours 
                    are crafted with care, expertise, 
                    and a deep commitment to your safety and satisfaction. We're here to ensure 
                    your journey is smooth, secure, and filled with only the best memories."
                    </p>
                </div>

              </li>

            </ul>

            <a href="booking_now.php" class="btn btn-primary">Booking Now</a>

          </div>

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="756" height="842" loading="lazy" alt="" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Top destination</p>
          </li>

          <li>
            <a href="#" class="footer-link">CharDham Yatra</a>
          </li>

          <li>
            <a href="#" class="footer-link">Himachal Pradesh</a>
          </li>

          <li>
            <a href="#" class="footer-link">Kerala</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sikkim</a>
          </li>

          <li>
            <a href="#" class="footer-link">Kashmir</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Categories</p>
          </li>

          <li>
            <a href="#" class="footer-link">Travel</a>
          </li>

          <li>
            <a href="#" class="footer-link">Lifestyle</a>
          </li>

          <li>
            <a href="#" class="footer-link">Fashion</a>
          </li>

          <li>
            <a href="#" class="footer-link">Education</a>
          </li>

          <li>
            <a href="#" class="footer-link">Food & Drink</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick links</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tours</a>
          </li>

          <li>
            <a href="#" class="footer-link">Booking</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Get a newsletter</p>

          <p class="newsletter-text">
            For the latest deals and tips, travel no further than your inbox
          </p>

          <form action="process_booking.php" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <a href="#" class="logo">Tourist</a>

        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">codewithAkshay</a>. All Rights Reserved
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>