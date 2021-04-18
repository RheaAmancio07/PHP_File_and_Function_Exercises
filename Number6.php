<html> 
<head>
    <title>PRIME/ NOT PRIME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    <style>
        body{
            background:url('https://cdn.dribbble.com/users/583436/screenshots/1696376/wavy.gif');
            background-repeat: no-repeat;
            background-size:cover;
            background-position: center;
            font-size: 20px;
            color:white;
        }
        form{
            margin-top: 15%;
            margin-left: 20%;
            font-size: 25px;
            font-family: Monospace;
            border: 1px solid white;
            width: 60%;
            align-items: center;
            background-color:black;
        }
        .input{
            margin:5%;
            font-size: 25px;
        }
        .btn{
            font-size: 25px;
            radius: 5px;
        }
    </style>
</head>
<body >
 <form method="post">  
    <p style="float:left; margin: 5px">6. Write a function to check whether a number is prime or not.
    </p>
    <center>
         Enter the Number:  
         <input  class="input" type="number" name="number">  
         <input  class="btn btn-primary" type="submit" value="Submit">
         <?php  
         if($_POST){     
            $num = $_POST['number'];  
         
         function checkPrime($num){
            if ($num == 1)
            return 0;
            for ($i = 2; $i <= $num/2; $i++)
            {
            if ($num % $i == 0)
            return 0;
            }
            return 1;
         }
         $flag_val = checkPrime($num);
         if ($flag_val == 1)
            echo "<h3> " . $num . " is a prime number";
         else
            echo "<h3> " . $num . " is a non-prime number";
         }
         ?>       
   </center>
  </form>
</body>  
</html>  
<?php


