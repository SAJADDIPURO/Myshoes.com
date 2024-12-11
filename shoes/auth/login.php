<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

// Redirect user yang sudah login ke index.php
include('function.php');

if(isset($_SESSION['login'])) {
}

if(isset($_POST['login'])) {
    login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../auth/css/login.css">
    <style>
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
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to right, #4facfe, #00f2fe);
    color: white;
}

.container {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 20px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

h1 {
    font-size: 2rem;
    margin-bottom: 10px;
}

h3 {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: #eee;
}

form ul {
    list-style: none;
    padding: 0;
}

form ul .teksbox div label {
    display: block;
    font-size: 0.9rem;
    margin-bottom: 5px;
    color: #ddd;
}

form ul .teksbox div input {
    width: 100%;
    height: 6vh;
    padding: 0 10px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
    outline: none;
    background-color: #fff;
    color: #333;
    transition: all 0.3s ease-in-out;
}

form ul .teksbox div input:focus {
    border: 2px solid #00c3ff;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

p {
    margin-top: 15px;
    font-size: 0.9rem;
}

p a {
    color: red;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <form action="" method="post" class="login">
        <div class="container">
            <h1>WELCOME TO SHOES STORE</h1>
            <h3>Please Have A Login</h3>
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
                    </div>
                    <button type="submit" name="login">Log In</button>
                    <p>Don't Have Account? <a href="register.php">Sign In</a></p>
                </ul>
            </form>
        </div>
    </form>
</body>
</html>