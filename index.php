<?php
session_start();


include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>


<html>

<head>
  <!-- <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/styles.css" />


  <title>Bookingzz</title>
</head>

<body>
  <div class="landing-page-and-menu">
    <section class="showcase">
      <header>
        <a href="">
          <h2 class="logo">Bookingzz</h2>
        </a>
        <div class="nav-links">
          <ul>
            <li><a href="" class="active-page">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="">FAQs</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li>
              <div class="wrap">
                <div class="search">
                  <input type="text" class="searchTerm" placeholder="What are you looking for?">
                  <button type="button" class="searchButton">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </li>
            <li>
              <a href="logout.php" class="login"><i class="fas fa-user"></i>Logout</a>
            </li>
          </ul>
        </div>
        <div class="toggle"></div>
      </header>

      <video src="./assets/ktm.mp4" muted loop autoplay></video>
      <div class="overlay"></div>
      <div class="text">
        <h2>Hi <span class="username"><?php echo $user_data['user_name']; ?></span> </h2>
        <h3>What are you planning to do?</h3>
        <ul class="book-or-host">
          <li class="book"><a href="./Book Venue/book-venue.php">Book Venue</a></li>
          <li class="host"><a href="./Host Venue/host-venue.php">Host Venue</a></li>
        </ul>
      </div>
      <!-- <ul class="social">
          <li>facebook</li>
          <li>Instagram</li>
      </ul> -->
    </section>

    <div class="menu">
      <ul>
        <li>
          <div class="wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="What are you looking for?">
              <button type="button" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </li>
        <li><a href="" class="active-page">Home</a></li>
        <li><a href="#services">Services</a></li>

        <li><a href="">FAQs</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>

  <div id="services" class="section-two">
    <div class="section-two-title">
      <h2 class="section-heading">Book Anything & Everything</h2>
      <p class="subtext">
        Browse through our wide variety of services. Booking has never been
        this easier.
      </p>
    </div>
    <div class="booking-items-list">
      <div>
        <a href=""><i class="fa fa-film"></i><br />Movies</a>
      </div>
      <div>
        <a href=""><i class="fas fa-futbol bounce"></i><br />Sports</a>
      </div>
      <div>
        <a href=""><i class="fa fa-hotel"></i><br />Hotel</a>
      </div>
      <div>
        <a href=""><i class="fa fa-utensils"></i><br />Restaurant</a>
      </div>
      <div>
        <a href=""><i class="fa fa-taxi"></i><br />Cab</a>
      </div>
      <div>
        <a href=""><i class="fa fa-plane"></i><br />Flights</a>
      </div>
      <div>
        <a href=""><i class="fa fa-bed"></i><br />Vacation</a>
      </div>
      <div>
        <a href=""><i class="fa fa-mountain"></i><br />Tours</a>
      </div>
      <div>
        <a href=""><i class="fa fa-hospital"></i><br />Appointment</a>
      </div>
      <div>
        <a href=""><i class="fa fa-parking"></i><br />Parking Lot</a>
      </div>
      <div>
        <a href=""><i class="fa fa-bus"></i><br />Bus</a>
      </div>
      <div>
        <a href=""><i class="fas fa-guitar"></i><br />Concerts</a>
      </div>
    </div>
  </div>

  <div class="section-three">
    <div class="section-three-title">
      <h2 class="section-heading">Most Demanded Bookings</h2>
      <p class="subtext">These are some of the most popular bookings!!</p>
    </div>
    <div class="cards-section">
      <div class="container">
        <div class="owl-carousel owl-theme">
          <div class="card item">
            <div class="content">
              <img src="./assets/tu.jpg" alt="" />
              <h3>TU Cricket Ground</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                pariatur non.
              </p>
              <a href="">Book Now</a>
            </div>
          </div>
          <div class="card item">
            <div class="content">
              <img src="./assets/everest.jpg" alt="" />
              <h3>Everest Trek</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                pariatur non.
              </p>
              <a href="">Book Now</a>
            </div>
          </div>
          <div class="card item">
            <div class="content">
              <img src="./assets/lod.jpg" alt="" />
              <h3>LOD</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                pariatur non.
              </p>
              <a href="">Book Now</a>
            </div>
          </div>
          <div class="card item">
            <div class="content">
              <img src="./assets/qfx.jpg" alt="" />
              <h3>QFX City Centre</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                pariatur non .
              </p>
              <a href="">Book Now</a>
            </div>
          </div>
          <div class="card item">
            <div class="content">
              <img src="./assets/nepathya.jpg" alt="" />
              <h3>Nepathya Concert</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                pariatur non .
              </p>
              <a href="">Book Now</a>
            </div>
          </div>
          <div class="card item">
            <div class="content">
              <img src="./assets/shambala.jpg" alt="" />
              <h3>Shambala Hotel</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                pariatur non .
              </p>
              <a href="">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-four">
    <div class="section-four-title">
      <h2 class="section-heading">Payment Partners</h2>
      <p class="subtext">
        Hassle free payment with multiple payment gateways to choose from!!
      </p>
    </div>
    <div class="payment">
      <div><a href="https://www.fonepay.com/" target="_blank"><img src="./assets/fonepay.png" alt="" /></a></div>
      <div><a href="https://esewa.com.np/" target="_blank"><img src="./assets/esewa.png" alt="" /></a></div>
      <div><a href="https://www.connectips.com/" target="_blank"><img src="./assets/connectips.png" alt="" /></a></div>
      <div><a href="https://khalti.com/" target="_blank"><img src="./assets/khalti.png" alt="" /></a></div>
      <div><a href="https://usa.visa.com/" target="_blank"><img src="./assets/visa.svg" alt="" /></a></div>
      <div><a href="https://www.mastercard.us/en-us.html" target="_blank"><img src="./assets/mastercard.png" alt="" /></a></div>
      <div><a href="https://www.paypal.com/" target="_blank"><img src="./assets/paypal.png" alt="" /></a></div>
      <div><a href="https://prabhupay.com/" target="_blank"><img src="./assets/prabhu.png" alt="" /></a></div>
      <div><a href="https://www.imepay.com.np/" target="_blank"><img src="./assets/ime.png" alt="" /></a></div>
      <div><a href="https://www.ipay.com.np/" target="_blank"><img src="./assets/ipay.png" alt="" /></a></div>
    </div>
  </div>

  <div class="section-five">
    <div class="section-five-title">
      <h2 id="contact" class="section-heading">Contact Us</h2>
      <p class="get-in-touch">Get in touch with us so we can help you find the best of best deals!!</p>
    </div>

    <div class="contact-us-container">

      <div class="company-detail">
        <div class="details-container">
          <div class="address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h3>Address</h3>
            <p>Kathmandu, Nepal</p>
            <p>Nayabazar 03</p>
          </div>
          <div class="phone">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h3>Phone</h3>
            <p>+977-01-4982374</p>
            <p>+977-9875228367</p>
          </div>
          <div class="email">
            <i class="far fa-envelope"></i>
            <h3>Email</h3>
            <p>contact@bookingzz.com</p>
            <p>support@bookingzz.com</p>
          </div>
        </div>
      </div>

      <div class="contact-us-form">
        <form class="form-contents" id="contact-form" method="post" name="contact_form">
          <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="Type Your Name" value="">
            <input type="text" name="email" id="email" placeholder="Type Your Email" value="">
            <input type="text" name="message" id="message" placeholder="Type Your Message" value="">
          </div>
          <input type="submit" value="Submit" id="btn" class="btn">
        </form>


      </div>

    </div>

  </div>



  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
  <script src="./owlcarousel/dist/owl.carousel.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="./js/carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/script.js"></script>


</body>



</html>

<?php
include("contact_connection.php");
include("message.php");
?>

<?php

function successfulLogin()
{
  echo ("<script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Successfully Logged In',
    showConfirmButton: false,
    timer: 2000
  })
</script>");
}


if (isset($_SESSION['successMessage'])) {
  echo $_SESSION['successMessage' . successfulLogin()];
  unset($_SESSION['successMessage']);
}

?>