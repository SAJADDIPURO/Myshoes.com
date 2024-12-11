<?php
include('function.php');

if(isset($_POST['register'])) {
    register($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/register.css">
    <style>
       
       /* Reset */
body, h3, p, ul, form, div, input, select, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container Styling */
.container {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px 40px;
    width: 350px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    text-align: center;
}

/* Heading */
h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #f0f0f0;
}

/* Form Styling */
form ul {
    list-style: none;
    padding: 0;
}

form ul .teksbox div {
    margin-bottom: 15px;
    text-align: left;
}

form ul .teksbox div label {
    display: block;
    font-size: 0.9rem;
    margin-bottom: 5px;
    color: #f0f0f0;
}

/* Input Fields */
form ul .teksbox div input,
form ul .teksbox div select {
    width: 100%;
    height: 40px;
    padding: 0 10px;
    font-size: 1rem;
    color: #333;
    border: none;
    border-radius: 5px;
    background: #fff;
    transition: 0.3s;
}

form ul .teksbox div input:focus,
form ul .teksbox div select:focus {
    outline: none;
    border: 2px solid #6a11cb;
}

/* Select Styling */
form ul .teksbox div select {
    cursor: pointer;
}

/* Button */
button[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    background: #6a11cb;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button[type="submit"]:hover {
    background: #2575fc;
}

/* Footer Text */
p {
    margin-top: 15px;
    font-size: 0.9rem;
}

p a {
    color: #f0f0f0;
    text-decoration: none;
    font-weight: bold;
}

p a:hover {
    text-decoration: underline;
}
form ul .teksbox div input{
            width: 20vw;
            height: 6vh;
            padding: 0 10px;
            color: black;
            font-weight: 500;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <form action="" method="post" class="login">
        <div class="container">
            <h3>Please Register Your Account</h3>
            <form action="" method="post">
                <ul>
                    <div class="teksbox">
                        <div>
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Enter your username" required>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="pw" id="pw" placeholder="Enter your password" required>
                        </div>
                        <div>
                            <label for="password"> Confirm Password</label>
                            <input type="password" name="pw2" id="pw2" placeholder="Confirm your password" required>
                        </div>
                        <div>
                            <label for="role">What is Your Role?</label>
                            <select name="role" id="role">
                                <option value="" disabled selected>-- Select Role</option>
                                <option value="1" name="seller" id="seller">Seller</option>
                                <option value="0" name="customer" id="customer">Customer</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="register">Sign In</button>
                    <p>Already Have Account? <a href="login.php">Log In</a></p>
                </ul>
            </form>
        </div>
    </form>
</body>
</html>