<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Liner</title>
    <style>
    p{
        color:white;
        margin-top:270px; 
        
        
    }
    p:hover{
        color:red;
        

    }
    body{
        background-image:url('https://i.pinimg.com/originals/fe/5c/26/fe5c26a16c454ac9d24bc9365f2ba023.gif');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        font-size: 20px;
        color:white;
    }
    
    </style>
</head>
<body>
<?php
    function randomLiner($filename){
    if(file_exists($filename)){
        $newFile = strtolower($filename);
        $vowelsLength =  substr_count($newFile, 'a')
                        + substr_count($newFile, 'e')
                        + substr_count($newFile, 'i')
                        + substr_count($newFile, 'o')
                        + substr_count($newFile, 'u');
        $file = fopen($filename,'r');
        $line2 = 2;
        $line3 = 3;
        if($vowelsLength % 2 == 0){
            $counter = 0;
            while(!feof($file)){
                $counter++;
                $lines = fgets($file);
                if($counter == $line2){
                     return "3. ".$lines."<br>";
                }
            }
        }else{
            $counter = 0;
            while(!feof($file)){
                $counter++;
                $lines = fgets($file);
                if($counter == $line3){
                    return "<center><p > ".$lines."</p></center><br>";
                }
            }
        }
    } else{
        return sprintf('file %s does not exist !',$filename);
    }
    }
    echo "<h1>" .randomLiner("number3.text");
    echo "<h1 style=margin-left:570px;margin-top:-60px;color:white;>3</h1>";
?>
</body>
</html>
