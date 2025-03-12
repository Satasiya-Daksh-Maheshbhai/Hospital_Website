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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shivam Hospital</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
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

      /* about us start */
      /* About Us Section Styling */
      #about {
        background: linear-gradient(
          to right,
          #e6f7ff,
          #ffffff
        ); /* Soft blue & white gradient */
        padding: 50px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      /* Heading Styling */
      #about h3 {
        font-size: 28px;
        font-weight: bold;
        color: #0077b6; /* Hospital Blue */
        text-transform: capitalize;
        margin-bottom: 15px;
      }

      /* Paragraph Styling */
      #about p {
        font-size: 18px;
        color: #555;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto 15px;
      }

      /* Appointment Button */
      #about .btn {
        background: #0077b6; /* Deep hospital blue */
        color: #fff;
        padding: 12px 25px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
        text-transform: uppercase;
        transition: 0.3s ease-in-out;
        display: inline-block;
        margin-top: 10px;
        text-decoration: none;
      }

      #about .btn:hover {
        background: #005f8d; /* Darker blue on hover */
        transform: scale(1.05);
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        #about {
          padding: 30px 20px;
        }

        #about h3 {
          font-size: 24px;
        }

        #about p {
          font-size: 16px;
        }

        #about .btn {
          font-size: 14px;
          padding: 10px 20px;
        }
      }

      /* Navbar Styling */
      .navbar {
        background: linear-gradient(
          to right,
          rgb(75, 139, 208),
          rgb(10, 55, 103)
        ) !important ;
      }
      .nav-link {
        color: white !important;
        font-weight: 500;
        padding: 10px 15px; /* Adjust padding */
      }
      .nav-link.active {
        color: lightcoral !important;
        border-radius: 5px;
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
      /* box of home starts */
      .box {
        border: 2px solid rgb(96, 204, 247); /* Light blue shade */
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        background-color: #ffffff;
        transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
      }
      .box h3 {
        color: rgb(53, 162, 205); /* Light blue for numbers */
        font-size: 2rem;
        font-weight: bold;
      }
      .box p {
        color: #555;
        font-size: 1.1rem;
        margin-top: 5px;
      }
      /* Hover effect */
      .box:hover {
        transform: translateY(-5px);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
        background-color: #87ceeb;
        color: #fff;
      }
      .box:hover h3,
      .box:hover p {
        color: #fff;
      }

      /* box over  */
      html {
        scroll-padding-top: 80px; /* Adjust based on navbar height */
      }

      .navbar {
        height: 80px; /* Set a fixed height */
      }

      section {
        padding-top: 100px; /* Ensures content is not hidden behind navbar */
      }

      /* services start */
      /* Ensure all cards have equal height */
      .service-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%; /* Make all cards equal height */
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #f8f9fa;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      }
      #services h2 {
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

      /* Hover Effect */
      .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
      }

      /* Card Header Styling */
      .card-header {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        padding: 12px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }

      /* Card Body Styling */
      .card-body {
        flex-grow: 1; /* Makes the body flexible for equal height */
        text-align: center;
        padding: 15px;
      }

      .card-body p {
        font-size: 14px;
        color: #555;
      }

      /* Card Footer Styling */
      .card-footer {
        text-align: center;
        padding: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
      }

      /* Button inside footer */
      .card-footer a {
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
      }

      /* Service Icon */
      .service-icon {
        font-size: 40px;
        margin-bottom: 10px;
      }

      /* Ensures equal height within Bootstrap row */
      .row .col-md-4,
      .row .col-lg-3 {
        display: flex;
      }

      /* services end */

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
      /* responsive css */
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

      /* Section Spacing */
      section {
        padding: 100px 0;
        margin-bottom: 50px;
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

      /* appointment starts */
      .appointment-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: #495057;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        .appointment-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .appointment-btn:hover {
            background-color: #0056b3;
        }
        .appointment-message {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .appointment-container {
                padding: 20px;
            }
        }
        @media (max-width: 576px) {
            h1 {
                font-size: 1.2em;
            }
        }
        #appointment h2 {
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
      /* appointment ends */
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
              <a class="nav-link text-danger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#appointment">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor.php">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor.php#review">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor.php#blogs">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="home">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="images/caorusal5.jpg"
              class="d-block w-100 h-50"
              alt="Hospital Image 1"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/caorusal6.jpg"
              class="d-block w-100 h-50"
              alt="Hospital Image 2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/caorusal7.jpg"
              class="d-block w-100 h-50"
              alt="Hospital Image 3"
            />
          </div>
          <div class="carousel-item">
            <img
              src="images/caorusal8.jpg"
              class="d-block w-100 h-50"
              alt="Hospital Image 4"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      <div class="container my-5">
        <div class="row g-4">
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <h3>150+</h3>
              <p>Doctors At Work</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <h3>1030+</h3>
              <p>Satisfied Patients</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <h3>490+</h3>
              <p>Bed Facility</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <h3>70+</h3>
              <p>Available Hospitals</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container mt-5" id="about">
      <h3>we take care of your healthy life</h3>
      <p>
        A person who has good physical health is likely to have bodily functions
        and processes working at their peak.
      </p>
      <a href="#appointment" class="btn">
        appointment us <span class="fas fa-chevron-right"></span>
      </a>
      <p>
        Shivam Hospital is dedicated to providing the best healthcare services
        with top professionals.
      </p>
    </section>

    <section class="container mt-5" id="services">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <!-- Free Checkups -->
        <div class="col-md-4 col-lg-3 mb-4 col-12 justify-content-center">
          <div class="card shadow service-card">
            <div class="card-header text-center bg-success text-white fw-bold">
              ✅ Free Checkups
            </div>
            <div class="card-body text-center">
              <p>Regular health checkups to keep you fit and healthy.</p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <!-- 24/7 Ambulance -->
        <div class="col-md-4 col-lg-3 mb-4 col-12 justify-content-center">
          <div class="card shadow service-card">
            <div class="card-header text-center bg-danger text-white fw-bold">
              🚑 24/7 Ambulance
            </div>
            <div class="card-body text-center">
              <p>Emergency ambulance service available round the clock.</p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-danger">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Expert Doctors -->
        <div class="col-md-4 col-lg-3 mb-4 col-12 justify-content-center">
          <div class="card shadow service-card">
            <div class="card-header text-center bg-primary text-white fw-bold">
              👨‍⚕️ Expert Doctors
            </div>
            <div class="card-body text-center">
              <p>
                Our team of specialists is here to provide top-quality care.
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Medicines -->
        <div class="col-md-4 col-lg-3 mb-4 col-12 justify-content-center">
          <div class="card shadow service-card">
            <div class="card-header text-center bg-warning text-white fw-bold">
              💊 Medicines
            </div>
            <div class="card-body text-center">
              <p>Providing quality medicines to meet your healthcare needs.</p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-warning text-white">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Bed Facility -->
        <div class="col-md-4 col-lg-3 mb-4 col-12 justify-content-center">
          <div class="card shadow service-card">
            <div class="card-header text-center bg-info text-white fw-bold">
              🛏 Bed Facility
            </div>
            <div class="card-body text-center">
              <p>Comfortable hospital beds for inpatient care.</p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-info text-white">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Total Care -->
        <div class="col-md-4 col-lg-3 mb-4 col-12 justify-content-center">
          <div class="card shadow service-card">
            <div
              class="card-header text-center bg-secondary text-white fw-bold"
            >
              ❤ Total Care
            </div>
            <div class="card-body text-center">
              <p>Comprehensive healthcare services for all your needs.</p>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="btn btn-secondary text-white">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
$conn = new mysqli('localhost', 'root', '', 'hospital_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $date = trim($_POST['date']);

    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $numberPattern = "/^[0-9]{10}$/";

    if (!empty($name) && !empty($email) && !empty($number) && !empty($date)) {
        if (!preg_match($emailPattern, $email)) {
            $message = "Invalid email format!";
        } elseif (!preg_match($numberPattern, $number)) {
            $message = "Invalid contact number! It must be 10 digits.";
        } else {
            $stmt = $conn->prepare("INSERT INTO contact_form (name, email, number, date) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $name, $email, $number, $date);

            if ($stmt->execute()) {
                $message = "Appointment made successfully!";
            } else {
                $message = "Appointment failed. Please try again.";
            }
            $stmt->close();
        }
    } else {
        $message = "All fields are required!";
    }
}
$conn->close();
?>
    <section class="container mt-5" id="appointment">
      <h2 class="appointment-h2">Book an Appointment</h2>
      <div class="container py-5">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-6">
            <video
              src="images/apoointment.mp4"
              class="w-100 rounded shadow"
              autoplay
              loop
              muted
              playsinline>
            </video>
          </div>
            <div class="col-md-6">
                <div class="appointment-container">
                    <h1>Make an Appointment</h1>
                    <?php if (isset($message)) echo "<p class='appointment-message'>$message</p>"; ?>
                    <form name="appointmentForm" method="post" onsubmit="validateForm(event)">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="number" class="form-control" placeholder="Your Number" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <button type="submit" class="appointment-btn">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validateForm(event) {
            let name = document.forms["appointmentForm"]["name"].value.trim();
            let number = document.forms["appointmentForm"]["number"].value.trim();
            let email = document.forms["appointmentForm"]["email"].value.trim();
            let date = document.forms["appointmentForm"]["date"].value;
            let today = new Date().toISOString().split('T')[0];
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            let numberPattern = /^[0-9]{10}$/;

            if (!name || !number || !email || !date) {
                alert("All fields are required!");
                event.preventDefault();
                return false;
            }
            if (!emailPattern.test(email)) {
                alert("Invalid email format!");
                event.preventDefault();
                return false;
            }
            if (!numberPattern.test(number)) {
                alert("Invalid contact number! It must be 10 digits.");
                event.preventDefault();
                return false;
            }
            if (date <= today) {
                alert("Please select a future date.");
                event.preventDefault();
                return false;
            }
        }
    </script>
    </section>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-box">
          <h3>Quick Links</h3>
          <a href="#home"> <i class="fas fa-chevron-right"></i> Home </a>
          <a href="#about"> <i class="fas fa-chevron-right"></i> About </a>
          <a href="#services"><i class="fas fa-chevron-right"></i> Services</a>
          <a href="#appointment"
            ><i class="fas fa-chevron-right"></i> Appointment</a
          >
          <a href="doctor.php#doctors">
            <i class="fas fa-chevron-right"></i> Doctors
          </a>
          <a href="doctor.php#review">
            <i class="fas fa-chevron-right"></i> Review
          </a>
          <a href="doctor.php#blogs">
            <i class="fas fa-chevron-right"></i> Blogs
          </a>
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
