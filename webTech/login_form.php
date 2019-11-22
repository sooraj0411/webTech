<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
    </head>
    <body>
        <?php
            extract($_POST);
            include("database.php");
            $rs=mysqli_query($conn,"select * from user where email='$email'");
            if(mysqli_num_rows($rs)>0)
            {
            }
            else
            {

            }
        
        ?>
    </body>

</html>


