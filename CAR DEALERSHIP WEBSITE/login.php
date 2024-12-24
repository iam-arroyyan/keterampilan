<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="icon" href="images/logos.png" type="image/png">

   <!-- BOOTSTRAP CSS -->

   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- MAIN CSS -->

   <link rel="stylesheet" href="css/style.css">

   <!-- GOOGLE FONT -->

   <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

   <!-- FONT AWESOME -->

   <script src="js/all.js"></script>
      <title>Login</title>
</head>
<body>
      <div class="container mt-5">
            <div class="row">
                  <div class="col-4">
                  <h3>Login Page</h3>
                  <form method="POST" action="cek_login.php">
                   <div class="form-floating mb-3">
                            <input class="form-control" id="username" type="text" name="username" placeholder="Enter your name..." />
                            <label for="username">Username</label>
                         </div>
                    <div class="form-floating mb-3">
                            <input class="form-control" id="password" type="password" name="password" placeholder="Enter your password..." />
                            <label for="password">Password</label>
                         </div>
                        <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" name="login" type="submit" href="cek_login.php">Submit</button></div>
                  </form>
                  </div>
            </div>
      </div>
   
      <!-- JQUERY -->

   <script src="js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->

<script src="js/bootstrap.min.js"></script>

<!-- MAIN JS -->

<script src="js/script.js"></script>
    </body>
</html>