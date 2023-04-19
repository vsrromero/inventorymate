<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventory Mate</title>
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

        <div class="featured-content">
        
            <div class="left">
                <div class="information">
                    <h1>Inventory Mate</h1>
                    <p>Not only inventory! Not only goods.<p>
                    <div class="call">
                        <img src="/img/check.png">
                        <span class="white-text">Manage your suppliers, costumers and more.</span>
                    </div>
                    <div class="call">
                        <img src="img/check.png">
                        <span class="white-text">Your company everywhere</span>
                    </div>
                </div>

                <div class="video">
                    <img src="img/player_video.jpg">
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
        </div>
    </body>
</html>