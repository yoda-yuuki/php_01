<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $btn = rand(1,5);
    
    
    switch($btn){
    case 1:
        $image="happy.jpg";
        break;
    case 2:
        $image="good.jpg";
        break;
    case 3:
        $image="usual.jpg";
        break;
    case 4:
        $image="unlucky.jpg";
        break; 
     case 5:
         $image="bad.jpg";
         break;   
}
echo "<p><img src='img/" ,$image,"' /></p>"; 
    
    
    ?>