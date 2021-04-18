<html> 
<head>
    <title>FILE LINE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    <style>
        body{
            background:url('https://media2.giphy.com/media/l0MYvEEv2Zndet9hC/source.gif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color:white;
        }
      
    </style>
</head>
<body >
         <?php  
         function fileLine ( $file,$lineNum){
            $counter = 0;
            $fp = fopen( $file, 'r+');
            while (!feof($fp)) {
              $counter++;
              $line = fgets($fp);
              if ($counter == $lineNum){
                return $line;
              } 
            }
        }
        echo "<center style=margin-top:20%;font-size:35px;>";
        echo fileLine( "number1.text",5);
        echo "</center>" ;
         ?>       
 
</body>  
</html>  
