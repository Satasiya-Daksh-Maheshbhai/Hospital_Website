<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful registration
        header("Location: index.php?registered=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Hospital Registration</title>
    <style>
        /* style.css */

/* General Styles */
body {
  font-family: "Arial", sans-serif;
  background-color: #e9ecef; /* Light background for contrast */
  margin: 0;
  padding: 0;
}

.container {
  max-width: 400px; /* Limit the width of the container */
  margin: 50px auto; /* Center the container with margin */
  padding: 30px;
  background-color: #ffffff; /* White background for the form */
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.welcome-message {
  text-align: center;
  margin-bottom: 20px;
  font-size: 1.8em; /* Larger font for welcome message */
  color: #007bff; /* Bootstrap primary color */
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 1.5em; /* Heading size */
  color: #343a40; /* Darker text color */
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold; /* Bold labels */
  color: #495057; /* Darker label color */
}

input[type="text"],
input[type="password"],
input[type="email"] {
  width: 100%; /* Full width inputs */
  padding: 10px; /* Padding for inputs */
  border: 1px solid #ced4da; /* Light border */
  border-radius: 5px; /* Rounded input corners */
  transition: border-color 0.3s; /* Smooth transition for border color */
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
  border-color: #007bff; /* Change border color on focus */
  outline: none; /* Remove default outline */
}

.btn {
  width: 100%; /* Full width buttons */
  padding: 10px; /* Padding for buttons */
  background-color: #007bff; /* Bootstrap primary color */
  color: white; /* White text */
  border: none; /* No border */
  border-radius: 5px; /* Rounded button corners */
  font-size: 1em; /* Button font size */
  cursor: pointer; /* Pointer cursor on hover */
  transition: background-color 0.3s; /* Smooth transition for background color */
}

.btn:hover {
  background-color: #0056b3; /* Darker blue on hover */
}

p {
  text-align: center; /* Centered text */
}

a {
  color: #007bff; /* Link color */
  text-decoration: none; /* No underline */
}

a:hover {
  text-decoration: underline; /* Underline on hover */
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
  .container {
    padding: 20px; /* Reduce padding on smaller screens */
  }

  h1,
  h2 {
    font-size: 1.5em; /* Adjust font size for headings */
  }
}

@media (max-width: 576px) {
  h1 {
    font-size: 1.2em; /* Further adjust font size for very small screens */
  }

  .form-group label {
    font-size: 0.9em; /* Smaller labels */
  }
}

    </style>
    <script>
        function validateForm() {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Regex for username: only a-z, A-Z, 0- 9
            const usernameRegex = /^[a-zA-Z0-9]+$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!usernameRegex.test(username)) {
                alert("Username can only contain letters and numbers.");
                return false;
            }

            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            return true; // Form is valid
        }
    </script>
</head>
<style>
  .ht{
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
<body>
<div class="container">
    <h1 class="welcome-message">Welcome to Our Hospital</h1>
    
    <h2>Register</h2>
    <form method="POST" action="" onsubmit="return validateForm();">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <p>Already have an account? <a href="index.php">Login here</a>.</p>
</div>
</body>
</html>