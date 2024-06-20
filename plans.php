<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h1 class="h3 mb-3 fw-normal">Completer Pour Qu'on Puisse vous Contacter </h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone number" required>
      <label for="floatingPhone">Phone number</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" required> J'accepte les Termes & Conditions
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Envoyer</button>
    <p class="bigline">&copy; 2024- <a class="dowl1" href="https://www.termsfeed.com/live/f924f486-2f4f-41ba-a356-e67a0a2e66a9">Termes & Conditions </a></p>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $to = "mario.videos.canada@gmail.com"; // Replace with your email
    $subject = "New Lead Captured";
    $message = "
    Un nuevo email esta siendo enviado desde la pagina web.
    Email: $email\nPhone: $phone";
    $headers = "From: no-reply@example.com"; // Replace with your sender email

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Lead captured successfully! An email has been sent.</p>";
    } else {
        echo "<p>An error occurred while capturing the lead. Please try again.</p>";
    }
  }
  ?>

</main>

  </body>
</html>
