<?php
require_once "config.php";
$username=$password=$cp="";
$username_err=$password_err=$cp_err="";


$errors=array('username'=>'','password'=>'','cp'=>'');

if ($_SERVER['REQUEST_METHOD']) {
   if (empty(trim($_POST['username']))) {
       $username_err="username is empty";
       $errors['username']="username is empty";
   }

   else {
       $sql="SELECT id from db where username =?";
       $stmt=mysqli_prepare($con,$sql);


       if ($stmt) {
          // mysqli_stmt_bind_param($con,$sql);
       $stmt=mysqli_prepare($con,$sql);

       if (mysqli_stmt_execute($stmt)) {
           mysqli_stmt_store_result($stmt);

           if (mysqli_num_rows($stmt)<1) {
               $username_err="username is not matched";
               $errors['username']="username is already taken";
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
    $errors['password']="password is empty";
}
elseif (strlen(trim($_POST['password']))<5) {
    $password_err="chars are less than 5";
    $errors['password']="chars are less than 5";
}
else {
    $password=trim($_POST['password']);
}



if (trim($_POST['password'])    !=    trim($_POST['cp']))       {
    $password_err="password is not matched";
    $errors['password']="password is not matched";
}







if (empty($username_err)    && empty($password_err)    && empty($cp_err)) {

$username=$_POST['username'];
$password=$_POST['password'];
    $sql="INSERT INTO `db`.`db` (`id`, `username`, `password`, `date time`) VALUES (NULL, '$username', '$password', '2021-06-20 15:45:45.000000')";
    if ($con->query($sql)) {
        # code...
    }
    else {
        echo "error: $sql $con->error()";
    }
    $stmt=mysqli_prepare($con,$sql);

    if ($stmt) {
       if (mysqli_stmt_execute($stmt)) {
         header('location: login13.php');
       }
       else {
           echo "something went wrong";
       }
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
    <title>Log-in or sign-up</title>
</head>
<body>
    <div class="myflex">
        
    <div class="container">
        
        <h1>Submit Form to continue</h1>
        <form action="" method="post">
            <img src="m.png">
            Enter your username:<input type="text" name="username" id="username">
       <div class="red-text"><?php echo $errors['username']  ;     ?></div>

            Enter your password:<input type="password" name="password" id="password">
            <div class="red-text"><?php echo $errors['password']  ;     ?></div>
            Enter your confirm-password:<input type="password" name="cp" id="cp1">
            <div class="red-text"><?php echo $errors['cp']  ;     ?></div>
            See your-password<input type="checkbox" onclick="myf()" id="ch">
            See your-confirm password<input type="checkbox" onclick="myfu()" id="chp">

            <button id="submit">submit</button>












        </form>









    </div>
</div>
    <style>
        form,input{
            display: list-item;
            font-size: 45px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            font-family: fantasy;
           
            


        }
        .myflex{
            margin-top: 256px;
            border: 6px solid white;
            border-right-color: black;
            border-left-color: black;
            padding: 45px;










        }
        .myflex>div{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #submit{
            width: 40%;
            height: 30px;
            margin-top: 23px;
        }
        body{
            background-color: white;
        }
        input{
            border-top-color: black;
            height: 50px;
            background-color: black;
            border-right-color: black;
            border-left-color: black;
            color: white;
        }
        form{
            border:8px solid black;
            border-top-color: black;
            border-bottom-color: black;
            padding: 86px;
            color: black;
        }
        #submit{
            width: 60%;
            height: 60px;
            font-size: 45px;
            border: 8px solid black;
            background-color: black;
            border-top-color: blanchedalmond;
            border-bottom-color: blanchedalmond;
            color: white;
            
        }
        #submit:hover{
            font-size: 25px;
            cursor: pointer;
        }
        input:hover{
            border-color: black;
            border-bottom-color: white;

            


           


            





        }
        #ch,#chp{
            width: 90%;
            height: 90px;

            

        }
        h1{
            color: black;
           border: 5px solid black;
           border-top-color: blanchedalmond;
            border-bottom-color: blanchedalmond;
            font-size: 96px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            letter-spacing: 15px;
            text-transform: uppercase;
        }

        
        form{
            
            text-transform: uppercase;



        }
        .red-text{
            color: red;
            font-size: 17px;
            
            text-transform: lowercase;
            font-family: cursive;
            

       


    </style>
    <script>
        function myf() {
            var x=document.getElementById("password");
            if (x.type=="password") {
                x.type="text";
            }
            else{
                x.type="password";

            }


        }


        function myfu() {
            var x=document.getElementById("cp1");
            if (x.type=="password") {
                x.type="text";
            }
            else{
                x.type="password";

            }


        }












    </script>
</body>
</html>
