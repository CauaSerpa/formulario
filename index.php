<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavra-chave,do,meu,site">
    <meta name="description" content="Descrição do meu site">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="http://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <section class="enter">
        <video src="video/bg-video.mkv" muted loop autoplay></video>

        <div class="home">
            <p class="enter__title">CAUÃ SERPA</p>

            <div class="buttons">
                <a class="home__button home__sing-in">SING IN</a>
                <a class="home__button home__sing-up">SING UP</a>
            </div>
        </div>

        <div class="container__form">
            <div class="slide-controls">
                <input type="radio" name="slider" id="checkSingIn" checked>
                <input type="radio" name="slider" id="checkSingUp">
                <label for="checkSingIn" class="slide checkSingIn sing-in">SING IN</label>
                <div class="slide line"></div>
                <label for="checkSingUp" class="slide checkSingUp sing-up">SING UP</label>
            </div>
            <form class="form__sing-in" id="singIn" action="">
                <p class="title">Put the following information</p>
                <ul>
                    <li>
                        <input type="email" placeholder="Email" name="email" required>
                        <i class='bx bxs-envelope' aria-hidden="true"></i>
                    </li>
                    <li>
                        <input type="password" placeholder="Password" id="password" name="password" required>
                        <i class='bx bxs-lock' aria-hidden="true"></i>
                        <i class='bx bxs-show' id="btn"></i>
                    </li>
                    <input type="submit" class="buttom" name="acao" value="Sing In">
                </ul>
            </form>
            <form class="form__sing-up" id="singUp" action="">
                <p class="title">Tell us about yourself</p>
                <ul>
                    <li>
                        <input type="email" placeholder="Email" name="email" required>
                        <i class='bx bxs-envelope' aria-hidden="true"></i>
                    </li>
                    <li>
                        <input type="text" placeholder="Name" name="name" required>
                        <i class='bx bxs-user' aria-hidden="true"></i>
                    </li>
                    <li>
                        <input type="password" placeholder="Password" id="newPassword" name="password" required>
                        <i class='bx bxs-lock' aria-hidden="true"></i>
                        <i class='bx bxs-show' id="newBtn"></i>
                    </li>
                    <li>
                        <input type="password" placeholder="Re-enter Password" id="rePassword" name="confirm-password" required>
                        <i class='bx bxs-lock' aria-hidden="true"></i>
                        <i class='bx bxs-show' id="reBtn"></i>
                    </li>
                    <input type="submit" class="buttom" name="acao" value="Sing Up">
                </ul>
            </form>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>
