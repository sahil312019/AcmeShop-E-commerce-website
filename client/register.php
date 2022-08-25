<?php

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    include_once '../shared/config.php';

    $cmd="insert into clients(name,mobile,mailid,password) values('$name','$mobile','$mail','$password')";

    $result=mysqli_query($conn,$cmd);
    if($result)
    {
        header('location:login.html');
    }
    else
    {
        echo "<div class='card'>
                <div class='product align-items-center p-2 text-center'>
        
                <h1>Mobile/Mail Id is already Registered</h1>

        
             </div>

            <div class='p-3 atc text-center text white mt-3 cursor'>
                <a href='register.html'>
                <button class='btn btn-success mt-3 p-3 gbtn'>Try Again</button>
                </a>
            </div>
        </div>";
    }
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <script src="https://kit.fontawesome.com/aabaffe564.js" crossorigin="anonymous"></script>
        <style>
            .h-primary{
                /* color: white; */
                font-size:2.8rem;
                font-family: 'Russo One';
                padding:12px;
                padding: 2rem;
                color:white;
                background: linear-gradient(to right, #3E8AFF, #BBDEFF);
            }
            .gbtn:hover{
                background-color: rgb(71, 207, 82);
            }
            .rbtn:hover{
                background-color: rgb(255, 0, 0);
            }
        </style>
    </head>
</html>
