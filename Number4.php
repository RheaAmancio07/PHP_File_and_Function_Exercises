<html> 
<head>
    <title>Loyalty of a Name</title>
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
    <p style="float:left; margin: 5px">4. Create a function to test the loyalty of a name based on the number of letters in the name and the occurences of the letters E, A, or N in the string.</p>
    <center>
         Enter a Name:  
         <input  class="input" type="text" name="name">  
         <input  class="btn btn-primary" type="submit" value="Submit">
         <?php  
         if($_POST){     
            $name = $_POST['name'];  
         
         function testLoyalty($name){
            $len = strlen($name);
            $name = strtoupper($name);
            $letterE = substr_count($name,"E");
            $letterA = substr_count($name,"A");
            $letterN = substr_count($name,"N");
            $total = $letterE + $letterA + $letterN;
            if($total>=3){
                $product = $len * $total;
                if ($product % 6 == 0){
                    return "Loyal";
                }else{
                    return "Di sure";
                }
            }
            else{
                return "Di sure";
            }
         }
         echo "<h3> " .(testLoyalty($name));
         
         }
         ?>       
   </center>
  </form>
</body>  
</html>  
