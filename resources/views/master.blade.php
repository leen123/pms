<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--our website must be rendered with the width of the device it is used for our website to be responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /><!--for icons like 3 bars on top of each other and the X icon-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="images/pharma-icon.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <title>Pharmaty | hala</title>
    </head>

    @yield('content')

      <footer class="footer">
        <div class="footer__data">
          <span class="footer__data__pharmacy-name">Al-Amal pharmacy</span>
          <a href="my-account.html" class="footer__data__pharmacist-link">Dr. Ahmad Obaid</a>
        </div>
      </footer>
</html>
