<?php
session_start();
if(!isset($_SESSION["username"])) {
  echo "Welcome, " . $_SESSION["username"];
  header("Location: index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctors Carousel</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <style>
      body {
        font-family: "Poppins", sans-serif;
      }
      .footer {
        background-color: #003366;
        color: white;
        padding: 20px;
        text-align: center;
      }

      /* Navbar Styling */
      .navbar {
        background: linear-gradient(
          to right,
          rgb(75, 139, 208),
          rgb(10, 55, 103)
        ) !important ;
      }
      .nav-link.active {
        color: lightcoral !important;
        border-radius: 5px;
      }

      .nav-link {
        color: white !important;
        font-weight: 500;
        padding: 10px 15px; /* Adjust padding */
      }
      .nav-link:hover {
        color: lightsalmon !important;
        font-weight: 500;
        padding: 10px 15px; /* Adjust padding */
      }
      .navbar-brand {
        color: white !important;
        font-size: 24px; /* Adjust brand font size */
        font-weight: bold;
        line-height: 70px; /* Match navbar height */
      }
      @media (max-width: 991px) {
        .navbar {
          height: auto; /* Adjust for mobile */
        }

        .navbar-brand {
          line-height: normal;
        }

        .navbar-nav .nav-item .nav-link {
          line-height: normal;
          padding: 8px 10px;
        }
      }
      /* navbar over */
      /* card-2 starts */
      html {
        scroll-padding-top: 80px; /* Adjust based on navbar height */
      }

      .navbar {
        height: 80px; /* Set a fixed height */
      }

      section {
        padding-top: 100px; /* Ensures content is not hidden behind navbar */
      }

      /* doctor starts */
      #card2 {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px;
      }

      #card2:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
      }

      #card-header2 {
        background: linear-gradient(135deg, #198754, #145c32);
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 12px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }

      /* Improved Image Styling (Logo) */
      #card-body2 img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #007bff; /* Changed to a vibrant blue */
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.4); /* Blue glow effect */
        margin-bottom: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      #card-body2 img:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 14px rgba(0, 123, 255, 0.6); /* Stronger glow on hover */
      }

      #card-body2 p {
        font-size: 16px;
        color: #333;
        margin-top: 10px;
      }

      #card-footer2 {
        background-color: transparent;
        padding-top: 10px;
        padding-bottom: 15px;
      }

      #card-footer2 a {
        margin: 0 12px;
        font-size: 22px;
        color: #198754;
        transition: color 0.3s, transform 0.3s;
      }

      #card-footer2 a:hover {
        color: #145c32 ;
        transform: scale(1.2);
      }

      /* Carousel Button Styling */
      #carousel-control-prev2,
      #carousel-control-next2 {
        filter: invert(100%);
        opacity: 0.8;
        transition: opacity 0.3s ease;
        width: 5%;
      }

      #carousel-control-prev2:hover,
      #carousel-control-next2:hover {
        opacity: 1;
      }
      #card-footer2 a {
        margin: 0 15px;
        font-size: 32px; /* Increased icon size */
        color: #198754;
        transition: color 0.3s, transform 0.3s, opacity 0.3s;
      }

      #card-footer2 a:hover {
        color: #11b656;
        transform: scale(1.3); /* Slightly bigger on hover */
        opacity: 0.9;
      }
      /* doctor ends */
      /* footer starts */
      .footer {
        background-color: #e3f2fd; /* Light blue */
        color: #003366; /* Dark blue text */
        padding: 40px 20px;
        text-align: center;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }

      .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        max-width: 1200px;
        margin: auto;
      }

      .footer-box {
        flex: 1 1 250px;
        text-align: left;
        padding: 15px;
      }

      .footer-box h3 {
        font-size: 18px;
        margin-bottom: 15px;
        text-transform: uppercase;
        color: #0077b6; /* Deep blue */
        border-bottom: 2px solid #0077b6;
        padding-bottom: 5px;
        display: inline-block;
      }

      .footer-box a {
        display: block;
        color: #0056b3; /* Medium blue */
        text-decoration: none;
        margin: 8px 0;
        font-size: 15px;
        transition: 0.3s ease-in-out;
      }

      .footer-box a i {
        color: #0077b6;
        margin-right: 8px;
      }

      .footer-box a:hover {
        color: #ff6b6b; /* Red hover effect */
        padding-left: 8px;
      }

      .footer-credit {
        margin-top: 30px;
        font-size: 14px;
        background: #0077b6;
        color: white;
        padding: 10px;
        border-radius: 5px;
      }

      .footer-credit span {
        font-weight: bold;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .footer-container {
          flex-direction: column;
          text-align: center;
        }

        .footer-box {
          text-align: center;
        }

        .footer-box h3 {
          display: block;
          text-align: center;
          margin: auto;
        }
      }
      /* footer ends */
      /* Add spacing to all sections */
      section {
        padding: 100px 0; /* Adds space above and below each section */
        margin-bottom: 50px; /* Adds extra space between sections */
      }

      /* Increase footer spacing */
      .footer {
        padding: 60px 20px; /* Adjust the padding for more spacing */
        margin-top: 50px; /* Creates a gap between the last section and the footer */
      }
      body {
        font-family: "Poppins", sans-serif;
      }

      /* Navbar Styling */
      .navbar {
        background: linear-gradient(
          to right,
          rgb(75, 139, 208),
          rgb(10, 55, 103)
        ) !important;
      }

      .nav-link.active {
        color: lightcoral !important;
        border-radius: 5px;
      }

      .nav-link {
        color: white !important;
        font-weight: 500;
        padding: 10px 15px;
      }

      .nav-link:hover {
        color: lightsalmon !important;
        font-weight: 500;
        padding: 10px 15px;
      }

      .navbar-brand {
        color: white !important;
        font-size: 24px;
        font-weight: bold;
        line-height: 70px;
      }

      @media (max-width: 991px) {
        .navbar {
          height: auto;
        }
        .navbar-brand {
          line-height: normal;
        }
        .navbar-nav .nav-item .nav-link {
          line-height: normal;
          padding: 8px 10px;
        }
      }

      /* Card Styling */
      #card2 {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px;
      }

      #card2:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
      }

      #card-header2 {
        background: linear-gradient(135deg, #198754, #145c32);
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 12px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }

      #card-body2 img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #007bff;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.4);
        margin-bottom: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      #card-body2 img:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 14px rgba(0, 123, 255, 0.6);
      }

      /* #card-footer2 a {
        margin: 0 15px;
        font-size: 32px;
        color: #198754;
        transition: color 0.3s, transform 0.3s, opacity 0.3s;
      }

      #card-footer2 a:hover {
        color: #11b656;
        transform: scale(1.3);
        opacity: 0.9;
      } */
      #card-footer2 a {
        font-size: 32px;
        margin: 0 10px;
        transition: transform 0.3s, color 0.3s;
      }

      #card-footer2 a:hover {
          transform: scale(1.3);
      }
      #card-footer2 .text-success:hover {
          color: #25D366 !important; /* WhatsApp Green */
      }
      #card-footer2 .text-danger:hover {
          color:rgb(243, 101, 127) !important; /* Instagram Pink */
      }
      #card-footer2 .text-primary:hover {
          color:rgb(48, 136, 224) !important; /* Facebook Blue */
      }

      /* Section Spacing */
      section {
        padding: 50px 0;
        margin-bottom: 20px;
      }

      /* Footer Styling */
      .footer {
        background-color: #e3f2fd;
        color: #003366;
        padding: 60px 20px;
        text-align: center;
        font-size: 16px;
        font-family: Arial, sans-serif;
      }

      .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        max-width: 1200px;
        margin: auto;
      }

      .footer-box {
        flex: 1 1 250px;
        text-align: left;
        padding: 15px;
      }

      .footer-box h3 {
        font-size: 18px;
        margin-bottom: 15px;
        text-transform: uppercase;
        color: #0077b6;
        border-bottom: 2px solid #0077b6;
        padding-bottom: 5px;
        display: inline-block;
      }

      .footer-box a {
        display: block;
        color: #0056b3;
        text-decoration: none;
        margin: 8px 0;
        font-size: 15px;
        transition: 0.3s ease-in-out;
      }

      .footer-box a i {
        color: #0077b6;
        margin-right: 8px;
      }

      .footer-box a:hover {
        color: #ff6b6b;
        padding-left: 8px;
      }

      .footer-credit {
        margin-top: 30px;
        font-size: 14px;
        background: #0077b6;
        color: white;
        padding: 10px;
        border-radius: 5px;
      }

      .footer-credit span {
        font-weight: bold;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .footer-container {
          flex-direction: column;
          text-align: center;
        }
        .footer-box {
          text-align: center;
          margin: 10px 0;
        }
        .footer-box h3 {
          display: block;
          text-align: center;
        }
        .footer-box a {
          font-size: 14px;
        }
        .footer-credit {
          font-size: 12px;
          padding: 8px;
        }
      }

      @media (max-width: 576px) {
        .navbar-brand {
          font-size: 20px;
        }
        .nav-link {
          font-size: 14px;
        }
        .footer-container {
          padding: 0 10px;
        }
        .footer-box h3 {
          font-size: 16px;
        }
      }

      /* review starts */
      .body-container {
        font-family: "Poppins", sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      .main-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px;
      }
      .main-heading {
        font-size: 2.8rem;
        background: linear-gradient(90deg, #007bff, #0e93b7);
        color: white;
        margin-bottom: 30px;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        animation: fadeIn 1s ease-in-out;
        border-radius: 8px;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(-10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .review-heading {
        font-size: 1.8rem;
        color: #34495e;
        margin-bottom: 10px;
      }

      .review-text {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
      }

      .review-image {
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        max-width: 100%;
        height: auto;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      }

      .review-image:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
      }

      .rating {
        font-weight: bold;
        color: #e67e22;
      }
      /* review ends */
      /* Section Styling */
      .blog-section {
        padding: 50px 0;
      }

      /* Blog Title */
      .blog-h2 {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2.8rem;
        background: linear-gradient(90deg, #007bff, #0e93b7);
        color: white;
        margin-bottom: 30px;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        animation: fadeIn 1s ease-in-out;
        border-radius: 8px;
      }

      /* Blog Video Styling */
      .blog-image {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Accordion Styling */
      .accordion {
        border-radius: 10px;
        overflow: hidden;
      }

      .accordion-item {
        border: none;
        margin-bottom: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .accordion-button {
        font-weight: bold;
        background-color: #007bff;
        color: white;
        border-radius: 10px;
        transition: all 0.3s ease;
      }

      .accordion-button:not(.collapsed) {
        background-color: #0056b3;
        color: white;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }

      .accordion-body {
        background-color: white;
        font-size: 1rem;
        color: #444;
        padding: 15px;
      }

      /* Hover Effect */
      .accordion-item:hover {
        transform: scale(1.02);
        transition: all 0.3s ease;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
      }

      /* Responsive Design */
      @media (max-width: 767px) {
        .blog-h2 {
          font-size: 1.75rem;
        }
        .accordion-button {
          font-size: 0.9rem;
        }
      }
      /* Change arrow color when accordion is open */
      .accordion-button:not(.collapsed) {
        background-color: #007bff; /* Change background color if needed */
        color: white; /* Change text color */
      }

      /* Change the arrow (caret) color when accordion is open */
      .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1); /* Makes the arrow white */
      }

      /* blog ends */
      /* expand/collapse effect */
      .collapse {
        transition: max-height 0.3s ease-out;
      }
    </style>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var navLinks = document.querySelectorAll(".nav-link");
        var navbarCollapse = document.querySelector(".navbar-collapse");

        navLinks.forEach(function (link) {
          link.addEventListener("click", function () {
            if (window.innerWidth < 992) {
              // Ensure this only happens on small screens
              navbarCollapse.classList.remove("show");
            }
          });
        });
      });
    </script>
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <nav class="navbar navbar-expand-lg fixed-top bg-blue">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img
            src="images/heartbeart_logo.jpg"
            alt="Hospital Logo"
            class="rounded-pill me-2"
            width="40"
            height="40"
          />
          <span>SHIVAM HOSPITAL</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-danger" href="home.php#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#appointment">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#doctors">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#review">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blogs">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="doctors">
      <style>
        h1 {
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 2.8rem;
          background: linear-gradient(90deg, #007bff, #0e93b7);
          color: white;
          margin-bottom: 30px;
          text-align: center;
          text-transform: uppercase;
          letter-spacing: 2px;
          font-weight: bold;
          text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
          animation: fadeIn 1s ease-in-out;
          border-radius: 8px;
        }
      </style>
      <div class="container mt-5">
        <h1 class="d-flex justify-content-center align-items-center">
          Our Doctors
        </h1>
        <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Jemmy Dells
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-1.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +1234567890</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Jane Smith
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-2.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +9876543210</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Sophia Leo
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-3.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +1122334455</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Emily Clark
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-4.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +6655443322</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Daniel Lee
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-5.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +7788990011</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Alex Luis
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-6.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +9988776655</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Sneha Shah
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-7.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +6655443322</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. Deep Lee
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-8.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +7788990011</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" id="card2">
                    <div class="card-header" id="card-header2">
                      Dr. James Bond
                    </div>
                    <div class="card-body" id="card-body2">
                      <img
                        src="images/doc-9.jpg"
                        class="img-fluid rounded-circle mb-2"
                        alt="Doctor Image"
                        width="100"
                      />
                      <p>Contact: +9988776655</p>
                    </div>
                    <div class="card-footer" id="card-footer2">
                      <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                      <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            id="carousel-control-prev2"
            type="button"
            data-bs-target="#doctorCarousel"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon"
              id="carousel-control-prev-icon2"
              aria-hidden="true"
            ></span>
          </button>
          <button
            class="carousel-control-next"
            id="carousel-control-next2"
            type="button"
            data-bs-target="#doctorCarousel"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon"
              id="carousel-control-next-icon2"
              aria-hidden="true"
            ></span>
          </button>
        </div>
      </div>
    </section>

    <section id="review" class="review-section">
      <div class="main-container">
        <div class="row">
          <div class="col-12">
            <h1 class="main-heading">Hospital Reviews</h1>
          </div>

          <div class="row d-flex flex-md-row flex-column-reverse mb-4">
            <div class="col-md-8 col-sm-12">
              <h3 class="review-heading">Vasoya Krisha</h3>
              <p class="rating">Rating: 5/5</p>
              <p class="review-text">
                "The hospital's management is exceptional. The staff is
                incredibly professional, and the services are top-notch. I felt
                well-cared-for from the moment I entered. Highly recommend!"
              </p>
            </div>
            <div class="col-md-4 col-sm-12">
              <img
                class="review-image d-block w-100"
                src="images/Review_1.jpg"
                alt="Hospital Image"
              />
            </div>
          </div>

          <div class="row d-flex flex-md-row-reverse flex-column-reverse mb-4">
            <div class="col-md-8 col-sm-12">
              <h3 class="review-heading">Shah Nirali</h3>
              <p class="rating">Rating: 4.5/5</p>
              <p class="review-text">
                "I had a great experience overall. The management was very
                efficient, and my treatment went smoothly. The only reason I
                didn't give it 5 stars is because of the waiting time, but the
                care I received was wonderful."
              </p>
            </div>
            <div class="col-md-4 col-sm-12">
              <img
                class="review-image d-block w-100"
                src="images/Review_2.jpg"
                alt="Hospital Image"
              />
            </div>
          </div>

          <div class="row d-flex flex-md-row flex-column-reverse mb-4">
            <div class="col-md-8 col-sm-12">
              <h3 class="review-heading">Suthar Abhay</h3>
              <p class="rating">Rating: 5/5</p>
              <p class="review-text">
                "The hospital is outstanding in terms of both management and
                services. The facilities are modern, and the medical team is
                highly skilled. My experience was nothing short of excellent,
                and I would gladly return if needed."
              </p>
            </div>
            <div class="col-md-4 col-sm-12">
              <img
                class="review-image d-block w-100"
                src="images/Review_3.jpg"
                alt="Hospital Image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- blog starts -->
    <section id="blogs" class="blog-section py-5">
      <div class="container">
        <h2 class="text-center mb-4 blog-h2">Hospital Blog Video</h2>
        <div class="row">
          <!-- Left side: Video -->
          <div class="col-lg-6">
            <video
              src="images/blog_1.mp4"
              class="blog-image w-100 rounded shadow"
              autoplay
              loop
              muted
              playsinline
            ></video>
          </div>

          <!-- Right side: Accordion (Hospital Blog Details) -->
          <div class="col-lg-6">
            <div class="accordion shadow-lg" id="hospitalAccordion">
              <!-- Blog 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Blog 1: The Importance of Hygiene in Hospitals
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#hospitalAccordion"
                >
                  <div class="accordion-body">
                    Hospitals need to prioritize hygiene to prevent the spread
                    of hospital-acquired infections (HAIs). Proper sterilization
                    of equipment, hand hygiene, and keeping patient areas clean
                    are essential practices to ensure safety and protect
                    patients from further health complications.
                  </div>
                </div>
              </div>

              <!-- Blog 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Blog 2: How Hospitals Handle Emergencies
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#hospitalAccordion"
                >
                  <div class="accordion-body">
                    During emergencies, hospitals deploy emergency response
                    teams, prioritize cases based on severity, and provide
                    immediate care. A coordinated effort ensures that critical
                    cases are addressed promptly, making efficient use of
                    available resources.
                  </div>
                </div>
              </div>

              <!-- Blog 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Blog 3: Advances in Medical Technology in Hospitals
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#hospitalAccordion"
                >
                  <div class="accordion-body">
                    Medical technology has revolutionized patient care in
                    hospitals. From robotic surgery to advanced diagnostic
                    tools, technology helps healthcare providers make accurate
                    diagnoses, perform less invasive surgeries, and monitor
                    patients' health more efficiently.
                  </div>
                </div>
              </div>

              <!-- Blog 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    Blog 4: Patient Care and Mental Health in Hospitals
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#hospitalAccordion"
                >
                  <div class="accordion-body">
                    In addition to physical care, hospitals play a crucial role
                    in addressing mental health. Providing emotional support,
                    counseling, and offering mental health services are vital
                    for a holistic approach to patient care.
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Accordion -->
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-box">
          <h3>Quick Links</h3>
          <a href="home.php#home">
            <i class="fas fa-chevron-right"></i> Home
          </a>
          <a href="home.php#about">
            <i class="fas fa-chevron-right"></i> About
          </a>
          <a href="home.php#services"
            ><i class="fas fa-chevron-right"></i> Services</a
          >
          <a href="home.php#appointment"
            ><i class="fas fa-chevron-right"></i> Appointment</a
          >
          <a href="#doctors"> <i class="fas fa-chevron-right"></i> Doctors </a>
          <a href="#review"> <i class="fas fa-chevron-right"></i> Review </a>
          <a href="#blogs"> <i class="fas fa-chevron-right"></i> Blogs </a>
        </div>

        <div class="footer-box">
          <h3>Our Services</h3>
          <a href="#"> <i class="fas fa-chevron-right"></i> Dental Care </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> Massage Therapy </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> Cardiology </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> Diagnosis </a>
          <a href="#">
            <i class="fas fa-chevron-right"></i> Ambulance Service
          </a>
        </div>

        <div class="footer-box">
          <h3>Contact Info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +91 98765 43210 </a>
          <a href="#">
            <i class="fas fa-envelope"></i> contact@shivamhospital.com
          </a>
          <a href="#">
            <i class="fas fa-map-marker-alt"></i> 123, Main Street, New Delhi,
            India
          </a>
        </div>

        <div class="footer-box">
          <h3>Follow Us</h3>
          <a href="#"> <i class="fab fa-facebook"></i> Facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
        </div>
      </div>

      <div class="footer-credit">
        Created by <span>Shivam Hospital</span> | All rights reserved © 2025
      </div>
    </footer>
  </body>
</html>
