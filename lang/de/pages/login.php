<html lang="de"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="Geben Sie Ihre Anmeldedaten ein um zur Webseite zu gelangen.">
    <link rel="apple-touch-icon" sizes="57x57" href="https://hg.prototype-area.com/media/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://hg.prototype-area.com/media/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://hg.prototype-area.com/media/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://hg.prototype-area.com/media/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://hg.prototype-area.com/media/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://hg.prototype-area.com/media/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://hg.prototype-area.com/media/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://hg.prototype-area.com/media/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://hg.prototype-area.com/media/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://hg.prototype-area.com/media/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://hg.prototype-area.com/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://hg.prototype-area.com/media/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://hg.prototype-area.com/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://hg.prototype-area.com/media/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://hg.prototype-area.com/media/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .pagewrapper {
            width: 100%;
            height: 100%;
            position: relative;
            background-color: transparent;
            max-height: 100%;
            overflow: hidden;
        }

        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            border-radius: 5px;

            padding: 50px;
            background-color: transparent;

            display: flex;
            flex-direction: column;;
            justify-content: center;
            align-items: center;
        }

        .login-form input,
        button{
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #c3c3c3;
            color: #000000;
            z-index: 5000000;
            outline: none;
        }

        .login-form button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #ffffff;
        }

        .login-form input::placeholder {
            color: #c3c3c3;
        }

        .bubble-holder {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
        }

        .bubble {
            animation-name: riseUp;
            animation-iteration-count: infinite;
            border-radius: 50%;
            position: absolute;
            animation-duration: 30s;
            animation-delay: -60s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            bottom: -40px;
            opacity: 0;
        }

        .invalid {
            animation-name: invalidUserInput;
            animation-duration: 0.6s;
            position: relative;
            left: 0px;
        }


        @keyframes riseUp {

            0% {
                opacity: 0;
                bottom: 0;
            }

            25% {
                opacity: 0.4;

            }

            50% {
                opacity: 0.8;
            }

            75% {
                opacity: 0.4;
            }

            100% {
                opacity: 0;
                bottom: 800px;
            }

        }


        @keyframes invalidUserInput {
            0%, 100% {
                left: 0px
            }

            20% {
                left: 10px
            }

            40% {
                left: -10px
            }

            60% {
                left: 5px
            }

            80% {
                left: -5px
            }
        }

    </style>
</head>

<body>

<div class="pagewrapper">

    <div class="bubble-holder"></div>
    <div class="login-form">
        <input type="username" name="username" class="username" placeholder="Username" autocomplete="off">
        <input type="password" name="password" class="password" placeholder="Password" autocomplete="off">
        <button name="submit-login" id="login">Login</button>
    </div>

</div>

<script src="https://hg.prototype-area.com/js/jquery.js"></script>
<script src="https://hg.prototype-area.com/js/jquery.cookie.js"></script>
<script src="../../../js/animation.js"></script>
<script src="../../../js/login.js"></script>

</body>
</html>