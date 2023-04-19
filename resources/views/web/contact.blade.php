<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventory Mate - Contact</title>
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
                <h1>Get in touch</h1>
            </div>

            <div class="page-info form-area">
                <div class="main-contact">
                    <form>
                        <input type="text" placeholder="Name" class="black-board">
                        <br>
                        <input type="text" placeholder="Phone" class="black-board">
                        <br>
                        <input type="text" placeholder="Email" class="black-board">
                        <br>
                        <select class="black-board">
                            <option value="">Contact Reason</option>
                            <option value="">Doubts</option>
                            <option value="">Compliments</option>
                            <option value="">Complains</option>
                        </select>
                        <br>
                        <textarea class="black-board form-text-area">Your message here</textarea>
                        <br>
                        <button type="submit" class="black-board">SEND</button>
                    </form>
                </div>
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