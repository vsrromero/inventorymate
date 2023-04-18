<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
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

            .menu {
                float: right;
                margin-right: 40px;
            }

            .menu li {
                display: inline;
                float: left;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .menu a {
                text-decoration: none;
                padding: 14px 16px;
                color: #333;
            }

            .menu a:hover {
                color: #268fd0;
            }

            .featured-content {
                width: 100%;
                height: 100%;
                min-height: 800px; 
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
                height: 100%;
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

            .footer {
                width: 100%;
            }

            .redes-sociais, .area-contact, .localizacao {
                width: 33.333%;
                border-top:solid 1px #ccc;
                float: left;
                text-align: center;
                background-color: #f8f8f8;
                height: 250px;
            }

            .redes-sociais, .area-contact, .localizacao p, span {
                color: #333333;
            }

            .redes-sociais img {
                margin: 0px 15px 0px 15px;
            }

        </style>
    </head>

    <body>
        <header>

            <div class="logo">
                <img src="img/logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">main</a></li>
                    <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contact') }}">contact</a></li>
                </ul>
            </div>
        </header>

        <div class="page-content">
            <div class="page-title">
                <h1>Olá, eu sou o Super Gestão</h1>
            </div>

            <div class="page-info">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
            </div>  
        </div>

        <footer>
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contact">
                <h2>contact</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </footer>
    </body>
</html>

<!-- -------------------------------------------------------- -->


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - contact</title>
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

            .menu {
                float: right;
                margin-right: 40px;
            }

            .menu li {
                display: inline;
                float: left;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .menu a {
                text-decoration: none;
                padding: 14px 16px;
                color: #333;
            }

            .menu a:hover {
                color: #268fd0;
            }

            .featured-content {
                width: 100%;
                height: 100%;
                min-height: 800px; 
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
                height: 100%;
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

            .footer {
                width: 100%;
            }

            .redes-sociais, .area-contact, .localizacao {
                width: 33.333%;
                border-top:solid 1px #ccc;
                float: left;
                text-align: center;
                background-color: #f8f8f8;
                height: 250px;
            }

            .redes-sociais, .area-contact, .localizacao p, span {
                color: #333333;
            }

            .redes-sociais img {
                margin: 0px 15px 0px 15px;
            }

        </style>
    </head>

    <body>
        <div class=header">

            <div class="logo">
                <img src="img/logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">main</a></li>
                    <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contact') }}">contact</a></li>
                </ul>
            </div>
        </div>

        <div class="page-content">
            <div class="page-title">
                <h1>Entre em contact conosco</h1>
            </div>

            <div class="page-info">
                <div class="main-contact">
                    <form>
                        <input type="text" placeholder="Nome" class="black-board">
                        <br>
                        <input type="text" placeholder="Telefone" class="black-board">
                        <br>
                        <input type="text" placeholder="E-mail" class="black-board">
                        <br>
                        <select class="black-board">
                            <option value="">Qual o motivo do contact?</option>
                            <option value="">Dúvida</option>
                            <option value="">Elogio</option>
                            <option value="">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="black-board">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="black-board">ENVIAR</button>
                    </form>
                </div>
            </div>  
        </div>

        <footer>
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contact">
                <h2>contact</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </footer>
    </body>
</html>