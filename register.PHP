<?php
require_once "config.php";
$username=$password=$confirm="";
$username_err=$password_err=$confirm_err="";
if ($_SERVER['REQUEST_METHOD']) {
    if (empty(trim($_POST['username']))) {
      $username_err="username is empty";
    }
    else {
        $sql="SELECT id from users where username =?";
        $stmt=mysqli_prepare($con,$sql);
    
    if ($stmt) {
      mysqli_stmt_bind_param($con,$sql);
      $stmt=mysqli_prepare($con,$sql);

      if (mysqli_stmt_execute($stmt)) {
         mysqli_stmt_store_result($stmt);


         if (mysqli_stmt_num_rows($stmt)==1) {
             $username_err="duplicate are not allowed";
         }
         else {
             $username=trim($_POST['username']);
         }















      }










mysqli_stmt_close($stmt);

      
    }
    








    }
    if (empty(trim($_POST['password']))) {
        $password_err="password is empty";
    }
    elseif (strlen(trim($_POST['password']))<5) {
        $password_err="password chars are less than 5";
    }
    else {
        $password=trim($_POST['password']);
    }



    if (trim($_POST['password'])                !=       trim($_POST['confirm']))                {
        $password_err="password is not matched";
    }



    if (empty($username_err)       &&            empty($password_err)    && empty($confirm_err)     ) {


$username=$_POST['username'];
$password=$_POST['password'];

      $sql= "INSERT INTO `new`.`new` (`id`, `username`, `password`, `date time`) VALUES (NULL, '$username', '$password', '2021-06-19 07:19:53')";


      if ($con->query($sql)) {
          # code...
      }
      else {
          echo "error; $sql $con->error()";
      }

$stmt=mysqli_prepare($con,$sql);
      if ($stmt) {
         if (mysqli_stmt_execute($stmt)) {
            header('location: login13.php');
         }
         else {
             echo "something is gone wrong";
         }






mysqli_stmt_close($stmt);


      }






     
    }




    mysqli_close($con);
















}


















?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in sign-up</title>
</head>
<body>
    <div class="myflex">
    <div class="container">
        <h1>Submit Form</h1>
        <form action="register.PHP" method="post">
            Enter your username:<input type="text" name="username" id="user1">
           
            Enter your password:<input type="password" name="password" id="user2">
            Enter your confirmpassword:<input type="password" name="confirm" id="user3" placeholder="">
            <button id="submit">submit</button>
















        </form>










    </div>
    </div>
    <style>
        .myflex{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 210px;
            border: 899px solid white;
            padding: 23px;
            border-top-color: rgb(43, 42, 42);
            border-bottom-color: rgb(44, 23, 23);
            border-right-color: rgb(82, 32, 32);
            border-left-color: rgb(51, 22, 22);
            background-color: black;
            
            
           









        }
        .myflex>div{





        }
        form,input{
            display: list-item;
            font-size: 56px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            border-top-color: white;
            border-bottom-color: white;
            color: white;
            background-color: black;
            color: black;
           

        }
        #submit{
            width: 60%;
            height: 60px;
            font-size: 30px;
            margin-top: 34px;
        }
        body{
          background-color: black;
        }
        form{
            box-shadow: 40px 80px 50px black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            
        }
        input{
            background-color: black;
            width: 200%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        h1{
            color: white;
            text-align: center;
            font-size: 54px;
            background-color: white;
            color: black;
        }








    </style>
</body>
</html>