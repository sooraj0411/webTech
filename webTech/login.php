<?php ini_set('display_errors',1); ?>
<?php include('signup_form.php')?>
<!DOCTYPE html>

<html>
  <head>
  <?php include("header.html"); ?>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script  src="project.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
  <body>
      <?php include("nav.php"); ?>
      <div class="form-container">
        <div class="btn-group">
          <button style="width:40%;border-radius:0.5rem 0rem 0rem 0.5rem" onclick="loginActive()">Login</button>
          <button style="width:40%;border-radius:0rem 0.5rem 0.5rem 0rem" onclick="signUpActive()">Sign Up</button>
          <script>loginActive()</script>
        </div>

          <form class="text-center  p-5" id="login" action="" method="post">
            <?php include('errorl.php'); ?>
            <input type="email" id="loginEmail" name="lmail" class="form-control mb-4" placeholder="E-mail" required>
            <input type="password" id="loginPassword" name="lpass" class="form-control mb-4" placeholder="Password" required>
            <button class="btn btn-info btn-block my-4" name="login" type="submit">Login</button>
          </form>

            <form class="text-center  p-5" style="display:none;" id="signUp" action="" method="post">
            <?php include('errors.php'); ?>
              <div class="form-row mb-4">
                <div class="col">
                  <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name" required>
                </div>
                  <div class="col">
                    <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name" required>
                 </div>
                </div>
                <input type="email" id="signUpEmail" name="smail" class="form-control mb-4" placeholder="E-mail" required>
                <input type="password" id="signUpPassword" name="spass" class="form-control" placeholder="Password" aria-describedby="password" required>
                <small id="password" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                </small>
                <input type="password" id="ConfirmPassword" name="cpass" class="form-control mb-4" placeholder="Confirm Password" required>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone number(Optional)">
                <button class="btn btn-info my-4 btn-block" type="submit" name="sign_in">Sign in</button>
              </form>
      </div>

      <script>
       var e=document.querySelector(".navbar");
       e.classList.add("navbar-round");
      </script> 



      <?php include("footer.html"); ?>
  </body>
</html>