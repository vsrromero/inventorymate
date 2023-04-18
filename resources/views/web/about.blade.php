<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Inventory Mate - About</title>
        <meta charset="utf-8">

        <style>
            html, body {
                height: 100%;
                margin: 0;
                font-family: 'Roboto', sans-serif;
            }

            p, span {
                color: #ffffff;
            }

            h1 {
                color: #ffffff;
                font-size: 28px;
            }

            h2 {
                color: #333333;
                font-size: 22px;
            }

            input, select, textarea, button {
                width: 100%;
                padding: 10px 15px;
                margin: 10px 0px 10px 0px;
                box-sizing: border-box;
                border-radius: 3px;
                background-color: transparent;
                color: #333;
            }

            .white-text {
                color: #ffffff;
            }

            .white-board {
                border: solid 1px #fff;
            }

            .black-board {
                border: solid 1px #333;
            }

            button {
                background-color: #7ab829;
                cursor: pointer;
                color: #fff;
            }

            button:hover {
                background-color: #6ea22c;
            }

            ::placeholder {
                color: #333333;
                opacity: 1;
            }

            :-ms-input-placeholder {
                color: #333333;
            }

            ::-ms-input-placeholder {
                color: #333333;
            }

            header {
                width: 100%;
                background-color: #f8f8f8;
                position: absolute;
                padding: 20px 0px 10px 0px;
            }

            .logo {
                width: 50px;
                float: left;
                margin-left: 40px;
            }

            nav {
                float: right;
                margin-right: 40px;
            }

            nav li {
                display: inline;
                float: left;
            }

            nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            nav a {
                text-decoration: none;
                padding: 14px 16px;
                color: #333;
                border-radius: 50%;
            }

            nav a:hover {
                color: #fff;
                background-color: #268fd0;
                transition: 0.5s;
                border-radius: 50%;
            }

            .featured-content {
                width: 100%;
                height: 100%;
            }

            .left {
                float:left;
                background-color: #268fd0;
                width: 60%;
                height: 100%;
            }

            .right {
                float:right;
                background-color: #2a9ee2;
                width: 40%;
                height: 100%;
            }

            .information, .contact {
                margin: 100px 40px 40px 40px;
            }

            .main-contact {
                margin: 0px 60px 60px 40px;
            }

            .call {
                margin-top: 30px;
                margin-left: 20px;
            }

            .video {
                margin: 40px;
            }

            .video img {
                max-width: 100%;
                max-height: 100%;
            }

            .page-content {
                width: 100%;
                text-align: center;
                margin-bottom: 100px;
            }

            .page-title {
                padding: 100px 0px 60px 0px;
                background-color: #2a9ee2;
                text-align: center;
            }

            .page-info {
                text-align: center;
                margin-top: 30px;
            }

            .page-info p{
                color: #333;
            }

            .about-info {
                text-align: justify;
                margin: 0 20%;
                width: 60%;
            }

            .form-area {
                text-align: center;
                margin: 0 30%;
                width: 40%;
            }

            .form-text-area {
                width: 100%;
                height: 150px;
            }

            footer {
                width: 100%;
                position: absolute;
                bottom: 0;
            }

            .social-network, .area-contact, .location {
                width: 33.333%;
                border-top:solid 1px #ccc;
                float: left;
                text-align: center;
                background-color: #f8f8f8;
                height: 250px;
            }

            .social-network, .area-contact, .location p, span {
                color: #333333;
            }

            .social-network img {
                margin: 0px 15px 0px 15px;
            }

        </style>
    </head>

    <body>
        <header>

            <div class="logo">
                <img src="img/logo.png">
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('web.home') }}">Home</a></li>
                    <li><a href="{{ route('web.about') }}">About</a></li>
                    <li><a href="{{ route('web.contact') }}">Contact</a></li>
                </ul>
            <nav>
        </header>

        <div class="page-content">
            <div class="page-title">
                <h1>Inventory Mate, your business mate.</h1>
            </div>

            <div class="page-info about-info">
                <p>Inventory Mate is a leading technology company that offers innovative solutions for inventory management, customer and supplier management, and secure cloud storage. Our mission is to provide our clients with the peace of mind that their data is safe and accessible from anywhere in the world.</p>
                <p>At Inventory Mate, we understand the importance of managing your business data effectively. That's why we offer a suite of user-friendly software tools that can help you streamline your inventory, customer and supplier management, and data storage. With our cloud-based solutions, you can securely store, access, and manage your data from anywhere, at any time.</p>
                <p>Our team of experts is dedicated to delivering high-quality products and exceptional customer service. We work closely with our clients to understand their unique needs and provide tailored solutions that help them achieve their goals. Whether you're a small business owner or a large enterprise, Inventory Mate has the tools and expertise you need to take your business to the next level.</p>
                <p>Contact us today to learn more about our products and services, and discover how Inventory Mate can help you manage your data more effectively.</p>
            </div>  
        </div>

        <footer>
            <div class="social-network">
                <h2>Social network</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contact">
                <h2>Contact</h2>
                <span>(+44) 0151-544 2020</span>
                <br>
                <span>contact@inventorymate.co.uk</span>
            </div>
            <div class="location">
                <h2>Location</h2>
                <img src="img/map.png">
            </div>
        </footer>
    </body>
</html>