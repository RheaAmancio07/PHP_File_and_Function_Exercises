<html> 
<head>
    <title>FACTORIAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    <style>
        body{
            background:url('https://treecity679.weebly.com/uploads/1/2/5/1/125101988/752956613.gif');
            background-repeat: no-repeat;
            background-size:cover;
            background-position: center;
            font-size: 20px;
            color:white;
        }
        form{
            margin-top: 10%;
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
    <p style="float:left; margin: 5px">5. Write a function to calculate the factorial of a number. The function accepts the number as an argument. If the argument given is a negative number, get its absolute value.

    </p>
    <center>
        Enter the Number:  
        <input  class="input" type="number" name="number">  
        <input  class="btn btn-primary" type="submit" value="Submit">
        <?php  
        if($_POST){     
            $num = $_POST['number'];  
         
            function numberFactorial($num){
                if($num ==0){
                    return 1;
                }elseif($num < 0){
                    return abs($num);
                }else {	
                    return $num * numberFactorial($num-1);
                }
            }
            echo "<h3> " .(numberFactorial($num));
        }//end 
         ?>       
   </center>
  </form>
</body>  
</html>  
