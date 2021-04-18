<html> 
<head>
    <title>REVERSING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    <style>
        body{
            background:url('https://i.pinimg.com/originals/c9/9d/39/c99d39b33816930a091c259f9659a923.gif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-size: 20px;
            color:white;
        }
        form{
            margin-top: 15%;
            margin-left: 15%;
            font-size: 25px;
            font-family: Monospace;
            border: 1px solid white;
            width: 70%;
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
    <p style="float:left; margin: 5px">7. Write a function to reverse a string. If the string has an even number for its length, grab only half of the reversed string.</p>
    <center>
         Enter words to reverse:  
         <input  class="input" type="text" name="text">  
         <input  class="btn btn-primary" type="submit" value="Submit">
         <?php  
         if($_POST){     
            $text = $_POST['text'];  
         
         function reverseHalf($text){
            $len = strlen($text);
            if($len % 2 ==0){
                $half = $len/2;
                $halfRev = substr($text, -$half);
                return  strrev($halfRev);
            }
            else{
                return strrev($text);
            }
         }
         echo "<h3> " .(reverseHalf($text));
         
         }
         ?>       
   </center>
  </form>
</body>  
</html>  
