<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="header"></div>
<div class="main">
<img src="img/r.png" width="350" height="350" alt="" id="r">
<img src="img/u2.png" width="500" height="500" alt="" id="img">
<img src="img/h.png" width="400" height="400" alt="" id="h">
<button id="btn" >運勢を占う</button>
<audio src="audio/異次元空間.mp3" ></audio>
</div>
    <script>
    document.getElementById("btn").onclick = function() {
   location.href = "index2.php";
};
    </script>
</body>
</html>