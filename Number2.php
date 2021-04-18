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
        if(file_exists($fileName)){
            $file = fopen($fileName,'a');
            $line = file($fileName,FILE_IGNORE_NEW_LINES);
            array_splice($line,$lineNum-1,0,$stringInserted);
            file_put_contents($fileName,join("\n",$line));
            fclose($file);
        }
    }

    function readTextFiles($fileName){
        if(file_exists($fileName)){
            $file = fopen($fileName,'r');
            $contents = fread($file, filesize($fileName));
            echo "<center><pre><h1>$contents</h1></pre></center>";
            echo $contents[4]; 
            fclose($file);
       }
    }
    readTextFiles("number2.text");
    appendLine("number2.text","Passerelles Numeriques Philippines Scholar",4); 
    
?>
</body>
</html>
