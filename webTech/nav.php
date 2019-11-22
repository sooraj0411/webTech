<nav class="navbar navbar-expand-sm" style="background:skyblue">
    <ul class="navbar-nav">
      <li class="nav-item"><a id="home" class="nav-link" href="index.php">  Home  </a></li>
      <li class="nav-item"><a id="help" class="nav-link" href="#">  Help  </a></li>
      <li class="nav-item"><a id="about" class="nav-link" href="#">About Us</a></li>
    </ul>
      <div class="navbar-header abs-center" >
        <a class="navbar-brand" style="font-family:sofia;color:white;font-size:3rem;padding-top:1rem;padding-bottom:1rem;" href="#">Title</a>
      </div>
      <?php if(!isset($_SESSION['email'])): ?>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" id="log" href="login.php">  Login  </a></li>
      </ul>
      <?php endif ?>
      <?php if(isset($_SESSION['email'])): ?>
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" id="logout" href="index.php?logout='1'">  Logout  </a></li>
        <li class="nav-item"><a class="nav-link" id="profile" href="#"><?php  echo $_SESSION['fname']; ?> </a></li>
        </ul>
      <?php endif ?>
</nav>