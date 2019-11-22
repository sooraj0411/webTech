<?php
  session_start();

  if(isset($_GET['new']))
  {
    if(!isset($_SESSION['email']))
    {
      header('location:login.php');
    }
    else{
      header('location:workspace.php');
    }
  }

  if(isset($_GET['open']))
  {
    if(!isset($_SESSION['email']))
    {
      header('location:login.php');
    }
  }

  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header("location:login.php");
  }

?>

<!DOCTYPE html>

<html>
  <head>
    <?php include("header.html")?>
    <link rel="stylesheet" type="text/css" href="home.css"> 
    </head>
  <body>
    <?php include("nav.php") ?>
      <section class="banner"></section>
          <h1>Start your WebDev Adventure with us<h1>
          <h2>Get your Front-End done in no time</h2>  
          <button type="button" name="new" onclick="window.location.href='workspace.php';" class="btn btn-outline-danger" style="top:40%;left:38%;">Create Project</button>
          <button type="button" name="open" onclick="window.location.href='#';" class="btn btn-outline-danger" style="top:48%;left:38%;">Open Project</button>
      </section>

      <script>
      var e=document.getElementByClassName("navbar");
      e.classList.remove("navbar-round");
    </script>
    <?php include("footer.html"); ?>
  </body>
</html>