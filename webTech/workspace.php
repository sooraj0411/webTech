<?php ini_set('display_errors',1); ?>
<?php error_reporting(E_ALL);?>
<?php include("ws_form.php");?>

<?php
  session_start();

    //if(!isset($_SESSION['email']))
    //{
      //header('location:login.php');
    //}

    $conn=mysqli_connect("localhost","root","sooraj0411","user");

    if(isset($_POST['view']))
    {
     // print_r("working");
      $email="123@gmail.com";
      $q="SELECT * FROM elements WHERE user='$email' ORDER BY id ASC";
      $res=mysqli_query($conn,$q);
      if(mysqli_num_rows($res)>0)
      {
        $f=fopen("/var/www/webTech/pages/".$email.".html","w") or die("Error");
        $st='<!DOCUMENT html>
              <html>
                <head>
                    <title>title<title>
                    <style>';
        while($r=mysqli_fetch_array($res))
        {
          $s='';
          if(!$r['id'])
            header("location:workspace.php");
          switch($r['type'])
          {
            case 'h':
              if($r['id'])
              {
                $s="#".$r['id']."{";
              }
              if($r['color'])
              {
                $c=$r['color'];
                $s=$s."color:".$c.";";
              }
              if($r['rgt'])
              {
                $t=$r['rgt'];
                $s=$s."right:".$t.";";
              }
              if($r['lft'])
              {
                $t=$r['lft'];
                $s=$s."left:".$t.";";
              }
              if($r['top'])
              {
                $t=$r['top'];
                $s=$s."top:".$t.";";
              }
              if($r['btm'])
              {
                $t=$r['btm'];
                $s=$s."bottom:".$t.";";
              }
            break;
            case 'p':
              if($r['id'])
              {
                $s="#".$r['id']."{";
              }
              if($r['color'])
              {
                $c=$r['color'];
                $s=$s."color:".$c.";";
              }
              if($r['rgt'])
              {
                $t=$r['rgt'];
                $s=$s."right:".$t.";";
              }
              if($r['lft'])
              {
                $t=$r['lft'];
                $s=$s."left:".$t.";";
              }
              if($r['top'])
              {
                $t=$r['top'];
                $s=$s."top:".$t.";";
              }
              if($r['btm'])
              {
                $t=$r['btm'];
                $s=$s."bottom:".$t.";";
              }
              if($r['borderColor'])
              {
                $t=$r['borderColor'];
                $s=$s."border-color:".$t.";"; 
              }
              if($r['borderWidth'])
              {
                $t=$r['borderWidth'];
                $s=$s."border-width:".$t.";"; 
              }
            break;
          }
          $s=$s."</style>\n</head>\n<body>";
          $st=$st.$s;
        }
        while($r=mysqli_fetch_array($res))
        {
          $s='';
          switch($r['type'])
          {
          case 'h':
               $s=$s."<".$r['size'].">".$r['txt']."</".$r['size'].">";
          break;
          case 'p':
            $s=$s."<p>".$r['txt']."</p>";
          break;
        }
        }
        $st=$st.$s."</body>\n</html>";
        fwrite($f,$st);
      }
      header("location:workspace.php");
    }
?>

<!DOCTYPE html>

<html>
  <head>
    <?php include("header.html");?> 
    <link rel="stylesheet" type="text/css" href="workspace.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        #right{
        border-radius:1rem 0rem 0rem 0rem;
       }
    </style>
    <script src="workspace.js"></script>
  <body>
    <?php include("nav.php"); ?>
      
      <div class="sidenav" id="left">
            <p>Elements</p>
            <a href="create_nav">Navigation Bar</a>
            <a href="create_p">Paragraph</a>
            <a href="create_h">Heading</a>
            <a href="create_form">Form</a>
            <a href="create_btn">Button</a>
            <a href="create_list">List</a>
      </div>

      <div class="sidenav"  style="left:85%;border-radius:1rem 0rem 0rem 1rem;">
            <p id="right">Included Elements</p> 
            <form action="" method="post">
              <button type="submit" class="btn btn-primary" id="view" name="view" style="bottom:0%;left:5%;">View</button> 
            </form>
      </div>

      <div id="content">
      <!--<textarea rows="15" cols="100" placeholder="Enter Text Here...."></textarea>-->
      </div>

      <script>
        var e=document.querySelector(".navbar");
        e.classList.add("navbar-round");
      </script> 
      <?php include("footer.html"); ?>
    </body>
</html>