<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Append Line</title>
    <style>
    p{
        color:white;
        margin-top:270px; 
        
        
    }
    p:hover{
        color:red;
        

    }
    body{
        background-image:url('https://i.gifer.com/1AY3.gif');
        background-repeat: no-repeat;
        background-size: cover;
        font-size: 20px;
        color:white;
    }
    
    </style>
</head>
<body>
<?php
    function appendLine($fileName,$stringInserted,$lineNum){
        $fp = fopen($fileName, "a+") or die("Unable to open file!");
        $counter = 0;
        while (!feof($fp)) {
            $counter++;
            $line = fgets($fp);
            if ($counter == $lineNum){
                fwrite($fp, $stringInserted);
                return $line.$stringInserted."this is append in line 2";
            }
        }
    }
    echo appendLine("number2.text"," Passerelles Numeriques",2); 
?>
</body>
</html>
