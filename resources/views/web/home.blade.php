<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventory Mate</title>
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

        <main class="featured-content">
        
            <div class="left">
                <div class="information">
                    <h1>Inventory Mate</h1>
                    <p>Not only inventory! Not only goods.<p>
                    <div class="call">
                        <img src="{{ asset('/img/check.png') }}">
                        <span class="white-text">Manage your suppliers, costumers and more.</span>
                    </div>
                    <div class="call">
                        <img src="{{ asset('/img/check.png') }}">
                        <span class="white-text">Your company everywhere</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{ asset('img/player_video.jpg') }}">
                </div>
            </div>

            <div class="right">
                <div class="contact">
                    <h1>Contact</h1>
                    <p>You have doubts, we have answers.<p>
                    <form>
                        <input type="text" placeholder="Name" class="white-board">
                        <br>
                        <input type="text" placeholder="Phone" class="white-board">
                        <br>
                        <input type="text" placeholder="Email" class="white-board">
                        <br>
                        <select class="white-board">
                            <option value="">Contact Reason</option>
                            <option value="">Doubts</option>
                            <option value="">Compliments</option>
                            <option value="">Complains</option>
                        </select>
                        <br>
                        <textarea class="white-board">Your message here</textarea>
                        <br>
                        <button type="submit" class="white-board">SEND</button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>