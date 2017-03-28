<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        img{
            width: 90vw;
            height: auto;
        }
        div{
            margin-top: 10em;
        }
    </style>
</head>

<body>
   <form action="load.php" method="post">
       
        <fieldset>
        Myndheiti:<input type="text" name="nafn" required><br>
        Linkur:   <input type="text" name="linkur" required><br>
        <input type="submit">
       </fieldset>
   </form>
   
   
   <div>
   <?php
$myndir = file_get_contents('myndir.json');
$json = json_decode($myndir, true);
    
    for ($i = 0; $i <= count($json['myndir'])-1; $i++) {
        echo "<fieldset><img src='{$json['myndir'][$i]['linkur']}'>";
        echo "<h2>{$json['myndir'][$i]['nafn']}</h2>";
        echo "</fieldset><br>";
    }
?>
</div>
</body>
</html>