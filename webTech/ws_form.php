<?php
    
    if(isset($_POST["add_h"]))
    {
        $conn=mysqli_connect("localhost","root","sooraj0411","user");
        $id= mysqli_real_escape_string($conn,$_POST["id"]);
        $col=mysqli_real_escape_string($conn,$_POST["color"]);
        $txt=mysqli_real_escape_string($conn,$_POST["heading"]);
        $top=mysqli_real_escape_string($conn,$_POST["top"]);
        $btm=mysqli_real_escape_string($conn,$_POST["btm"]);
        $lft=mysqli_real_escape_string($conn,$_POST["lft"]);
        $rgt=mysqli_real_escape_string($conn,$_POST["rgt"]);
        $size=mysqli_real_escape_string($conn,$_POST["size"]);
        $type="h";
        $user="123@gmail.com";
        print_r($size);
        $q="SELECT * FROM elements WHERE id='$id'";
        $res=mysqli_query($conn,$q);
        $num=mysqli_num_rows($res);
        if($num>=1)
        {
            $q="UPDATE elements SET id='$id',type='$type',user='$user',color='$col',txt='$txt',top='$top',btm='$btm',lft='$lft',rgt='$rgt',size='$size' WHERE id='$id'";
            print_r("In if");
            mysqli_query($conn,$q);
        }
        else
        {
            $query="INSERT INTO elements(id,type,user,color,txt,top,btm,rgt,lft,size) VALUES('$id','$type','$user','$col','$txt','$top','$btm','$rgt','$lft','$size')";
            print_r("In else");            
            if(!mysqli_query($conn,$query))
            {
                echo mysqli_error($conn);
            }
        }
    }

    if(isset($_POST["add_p"]))
    {
        $conn=mysqli_connect("localhost","root","sooraj0411","user");
        $id= mysqli_real_escape_string($conn,$_POST["id"]);
        $col=mysqli_real_escape_string($conn,$_POST["color"]);
        $txt=mysqli_real_escape_string($conn,$_POST["txt"]);
        $top=mysqli_real_escape_string($conn,$_POST["top"]);
        $btm=mysqli_real_escape_string($conn,$_POST["btm"]);
        $lft=mysqli_real_escape_string($conn,$_POST["lft"]);
        $rgt=mysqli_real_escape_string($conn,$_POST["rgt"]);
        $size=mysqli_real_escape_string($conn,$_POST["size"]);
        $bcolor=mysqli_real_escape_string($conn,$_POST["bcolor"]);
        $bwidth=mysqli_real_escape_string($conn,$_POST["bwidth"]);
        $type="p";
        $user="123@gmail.com";
        $q="SELECT * FROM elements WHERE id='$id'";
        $res=mysqli_query($conn,$q);
        $num=mysqli_num_rows($res);
        if($num>=1)
        {
            $q="UPDATE elements SET id='$id',type='$type',user='$user',color='$col',txt='$txt',top='$top',btm='$btm',lft='$lft',rgt='$rgt',size='$size',borderColor='$bcolor',borderWidth='$bwidth' WHERE id='$id'";
            print_r("In if");
            mysqli_query($conn,$q);
        }
        else
        {
            $query="INSERT INTO elements(id,type,user,color,txt,top,btm,rgt,lft,size,borderColor,borderWidth) VALUES('$id','$type','$user','$col','$txt','$top','$btm','$rgt','$lft','$size','$bcolor','$bwidth')";
            print_r("In else");            
            if(!mysqli_query($conn,$query))
            {
                echo mysqli_error($conn);
            }
        }
    }


    if(isset($_POST["del_h"]))
    {
        $id=$_POST["id"];
        $query="DELETE FROM elements where id='$id'";
        mysqli_query($conn,$query);
    }

?>
