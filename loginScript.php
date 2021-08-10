<?php 
require 'connection.php';
$email=$password=null;
if(isset($_POST) and !empty($_POST)){
    if(isset($_POST['email']) and !empty($_POST['email'])){
        if(isset($_POST['password']) and !empty($_POST['password'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            if($email=="admin@gmail.com" and $password=="Admin4"){
                $_SESSION['email']='admin@gmail.com';
                $_SESSION['name']='Admin';
              header('location:pat_admin.php'); 
            }
            else{
            $password=md5($_POST['password']);
           $select_query="select name,email,password from student where email='$email'";
           $result=mysqli_query($con,$select_query) or die(mysqli_error($con)); 
            if(mysqli_num_rows($result)>0){ 
                $row=mysqli_fetch_row($result);
                if($row[2]===$password){
                    // echo "yo"; exit();
                        $_SESSION['email']=$row[1];
                        $_SESSION['name']=$row[0];
                      header('location:studentDashboard.php');  
                }
                else{
                    header('location:pat_home.php?error=wrong_credentials');
                }
            }
            else{
                header('location:pat_home.php?error=NotAUser');     
            }
          }
        }
        else{
            header('location:pat_home.php?error=wrong_credentials');
        }
    }
    else{
        header('location:pat_home.php?error=wrong_credentials');
    }   
}
else{
    header('location:pat_home.php');
}

?>