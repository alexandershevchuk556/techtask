<?php require('include.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="auth/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
      var recaptchaCallback = function() {
      	$("#submit").removeAttr("disabled");
      }
      var onloadCallback = function() {
        grecaptcha.render('captcha', {
          'sitekey' : '6LdaKQEVAAAAACvT_aWwwGK60xzkO22WYCTpfQ2T',
          'callback': function () {
          	$("#submit").removeAttr("disabled");
          }
        });
         
     };
      
    </script>
    <title>Tech Task</title>
</head>
<body>
    <?php include($page); ?>
</body>
</html>
