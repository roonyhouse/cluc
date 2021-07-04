
<?php

if (isset($_POST['up'])) {
   $con=mysqli_connect("localhost","root","","db");
   if (isset($_POST['up'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];

      $sql="SELECT * from db where username='{$username}' and password ='{$password}'";






   }
   $result=mysqli_query($con,$sql);

   if ($res=mysqli_fetch_array($result)) {
       session_start();
       $_SESSION['username']=$username;
       echo "<script>alert(\"successfully submit\")</script>";
       header('location: welcome.php');
   }
   else {
       
    echo "<script>alert(\" not successfully submit\")</script>";
   }















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
        
        <h1>log-in to continue</h1>
        <form action="" method="post">
            <img src="m.png">
            Enter your username:<input type="text" name="username" id="username">
            Enter your password:<input type="password" name="password" id="password">
      
            See your-password<input type="checkbox" onclick="myf()" id="ch">
         

            <button id="submit" name="up">submit</button>












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
