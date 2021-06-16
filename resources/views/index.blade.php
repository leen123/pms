<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--our website must be rendered with the width of the device it is used for our website to be responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
       <!-- <link rel="stylesheet" type="text/css" href="css/icon-font.css"> --> <!--Already included in our css file-->
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="images/pharma-icon.png">
        
        <title>Pharmaty | Login</title>
    </head>

    <body>
        <div class="login">

            <form action="#" class="login__form">

                <div class="logo-with-header">
                	<img src="images/logo-white.png" alt="Logo White" class="logo-with-header__image">
                    <h3>Pharmaty</h3>
                </div>

                <div class="login__form__group">
                    <input type="text" placeholder="Username" class="login__form__input" required>
                    <label class="login__form__label">Username</label>
                </div>

                <div class="login__form__group">
                    <input type="password" placeholder="Password" class="login__form__input" required>
                    <label class="login__form__label">Password</label>
                </div>

                <a href="launcher.html" class="btn btn__launcher btn__launcher--empty login--btn">Log In</a>
            </form>
        </div>

    </body>
</html>