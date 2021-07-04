<?php
if (isset($_POST['hj'])) {


    $con=mysqli_connect("localhost","root","","u0");
    if (isset($_POST['hj'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT   * from u0  where username ='{$username}'  and password ='{$password}'";

    }









$result=mysqli_query($con,$sql);



     
   

if ($res=mysqli_fetch_array($result)) {
    echo "<script>alert(\"successfully done\")</script>";
   
}
else {
    echo "<script>   alert(\"failed\")  </script>";
}






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
        <form action="" method="post">
            <img src="bussiness-man.png">
            
            Enter your username:<input type="text" name="username" id="user1">
            Enter your password:<input type="password" name="password" id="user2">
         
            <button id="sub" name="hj">submit</button>
















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
        #sub{
            width: 60%;
            height: 60px;
            font-size: 30px;
            margin-top: 34px;
        }
        body{
          background-color: unset;
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
        #mop{
            z-index: -1;
            position: absolute;
            width: 100%;








    </style>
</body>
</html>