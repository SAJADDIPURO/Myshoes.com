<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

if (!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSHOES.COM</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #222, #555, #000);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            overflow: hidden;
        }

        /* Navbar Styling */
        nav {
            width: 100%;
            background-color: #333;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            margin-right: 15px;
            font-size: 1rem;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #ff6f91;
        }

        nav button {
            background-color: #ff6f91;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            color: #fff;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease-in-out;
        }

        nav button:hover {
            background-color: #ff476f;
        }

        /* Container Styling */
        .container {
            text-align: center;
            margin: 30px 0;
        }

        .container .tombols a {
            display: inline-block;
            margin: 10px 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #555;
            border-radius: 30px;
            transition: background-color 0.3s ease-in-out;
        }

        .container .tombols a:hover {
            background-color: #ff6f91;
        }

        /* Animation Container */
        .animation-container {
            position: relative;
            text-align: center;
            margin-top: 50px;
        }

        .animation-container h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            z-index: 10;
            position: relative;
        }

        /* Moving Boxes */
        .moving-box {
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            animation: move-around 6s ease-in-out infinite;
        }

        /* Individual Box Colors */
        .moving-box:nth-child(2) { background-color: #ff6f91; animation-delay: 0s; }
        .moving-box:nth-child(3) { background-color: #ffcc00; animation-delay: 1s; }
        .moving-box:nth-child(4) { background-color: #4caf50; animation-delay: 2s; }
        .moving-box:nth-child(5) { background-color: #2196f3; animation-delay: 3s; }
        .moving-box:nth-child(6) { background-color: #9c27b0; animation-delay: 4s; }
        .moving-box:nth-child(7) { background-color: #ff5722; animation-delay: 5s; }
        .moving-box:nth-child(8) { background-color: #607d8b; animation-delay: 6s; }
        .moving-box:nth-child(9) { background-color: #00bcd4; animation-delay: 7s; }
        .moving-box:nth-child(10) { background-color: #8bc34a; animation-delay: 8s; }
        .moving-box:nth-child(11) { background-color: #ffc107; animation-delay: 9s; }
        .moving-box:nth-child(12) { background-color: #673ab7; animation-delay: 10s; }
        .moving-box:nth-child(13) { background-color: #e91e63; animation-delay: 11s; }

        /* Animation */
        @keyframes move-around {
            0% {
                transform: rotate(0deg) translateX(150px) rotate(0deg);
            }
            25% {
                transform: rotate(90deg) translateX(150px) rotate(-90deg);
            }
            50% {
                transform: rotate(180deg) translateX(150px) rotate(-180deg);
            }
            75% {
                transform: rotate(270deg) translateX(150px) rotate(-270deg);
            }
            100% {
                transform: rotate(360deg) translateX(150px) rotate(-360deg);
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="usermarket.php">All Products</a>
        <form action="auth/logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
    </nav>
    <section class="home">
        <div class="container">
            <div class="tombols">
                <a href="usermarket.php">See All Product</a>
                <a href="adminmarket.php">ADMIN....</a>
            </div>
        </div>
    </section>
    <section class="home">
        <div class="animation-container">
            <h1>Welcome to MyShoes.com</h1>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
            <div class="moving-box"></div>
        </div>
    </section>
</body>
</html>
