<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventory Mate - About</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body>
        <header>

            <div class="logo">
                <img src="{{ asset('img/logo.png') }}">
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('web.home') }}">Home</a></li>
                    <li><a href="{{ route('web.about') }}">About</a></li>
                    <li><a href="{{ route('web.contact') }}">Contact</a></li>
                </ul>
            <nav>
        </header>

        <main class="page-content">
            <div class="page-title">
                <h1>Inventory Mate, your business mate.</h1>
            </div>

            <div class="page-info about-info">
                <p>Inventory Mate is a leading technology company that offers innovative solutions for inventory management, customer and supplier management, and secure cloud storage. Our mission is to provide our clients with the peace of mind that their data is safe and accessible from anywhere in the world.</p>
                <p>At Inventory Mate, we understand the importance of managing your business data effectively. That's why we offer a suite of user-friendly software tools that can help you streamline your inventory, customer and supplier management, and data storage. With our cloud-based solutions, you can securely store, access, and manage your data from anywhere, at any time.</p>
                <p>Our team of experts is dedicated to delivering high-quality products and exceptional customer service. We work closely with our clients to understand their unique needs and provide tailored solutions that help them achieve their goals. Whether you're a small business owner or a large enterprise, Inventory Mate has the tools and expertise you need to take your business to the next level.</p>
                <p>Contact us today to learn more about our products and services, and discover how Inventory Mate can help you manage your data more effectively.</p>
            </div>  
        </main>

        <footer>
            <div class="social-network">
                <h2>Social network</h2>
                <img src="{{ asset('img/facebook.png') }}">
                <img src="{{ asset('img/linkedin.png') }}">
                <img src="{{ asset('img/youtube.png') }}">
            </div>
            <div class="area-contact">
                <h2>Contact</h2>
                <span>(+44) 0151-544 2020</span>
                <br>
                <span>contact@inventorymate.co.uk</span>
            </div>
            <div class="location">
                <h2>Location</h2>
                <img src="{{ asset('img/map.png') }}">
            </div>
        </footer>
    </body>
</html>