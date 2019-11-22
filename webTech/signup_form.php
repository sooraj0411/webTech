<?php 
  session_start();
  $fname="";
  $lname="";
  $email="";
  $errors=array();
  $errorl=array();
  $conn=mysqli_connect("localhost","root","sooraj0411","user");
  if(isset($_POST["sign_in"]))
  {
      $fname=mysqli_real_escape_string($conn,$_POST['firstname']);
      $lname=mysqli_real_escape_string($conn,$_POST['lastname']);
      $email=mysqli_real_escape_string($conn,$_POST['smail']);
      $pswd=mysqli_real_escape_string($conn,$_POST['spass']);
      $cpswd=mysqli_real_escape_string($conn,$_POST['cpass']);
      $phone=mysqli_real_escape_string($conn,$_POST['phone']);
      
      if(empty($fname) or !ctype_alpha($fname))
      {
          array_push($errors,"Invalid First Name");
      }
      if(empty($lname) or !ctype_alpha($lname))
      {
          array_push($errors,"Invalid Last Name");
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
          array_push($errors,"Invalid E-mail");
      }
      if(empty($pswd) or strlen($pswd)<8 or !count(array_filter(str_split($pswd),'is_numeric')))
      {
          array_push($errors,"Invalid Password");
      }
      if($pswd!=$cpswd)
      {
          array_push($errors,"Passwords do not match");
      }
      $query="SELECT * FROM user_info WHERE email='$email' LIMIT 1";
      $res=mysqli_query($conn,$query);
      $num=mysqli_num_rows($res);
      if($num>=1)
      {
          array_push($errors,"Email already exists");
      }
      if(count($errors)==0)
      {
        $enpswd=md5($pswd);
        $query="INSERT INTO user_info(firstName,lastName,email,password,phone) VALUES('$fname','$lname','$email','$enpswd','$phone')";
        mysqli_query($conn,$query);
        $_SESSION['email']=$email;
        $_SESSION['fname']=$fname;
        $_SESSION['success']=1;
        header('location:index.php');
      }
  }


  if(isset($_POST['login'])){
      $email=mysqli_real_escape_string($conn,$_POST['lmail']);
      $pswd=mysqli_real_escape_string($conn,$_POST['lpass']);

      if(empty($email)){
          array_push($errorl,"Email is required");
      }
      if(empty($pswd)){
          array_push($errorl,"Password is required");
      }

      if(count($errorl)==0)
      {
          $pswd=md5($pswd);
          $query="SELECT * FROM user_info WHERE email='$email' AND password='$pswd'";
          $res=mysqli_query($conn,$query);
          if(mysqli_num_rows($res)==1)
          {
              $_SESSION['email']=$email;
              $row=mysqli_fetch_assoc($res);
              $_SESSION['fname']=$row['firstName'];
              $_SESSION['success']=1;
              header('location:index.php');
          }
          else{
              array_push($errorl,"Wrong Email/Password");
          }
      }
  }
?>