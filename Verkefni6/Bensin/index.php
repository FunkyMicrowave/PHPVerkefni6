<?php
$url = "http://apis.is/petrol";
$json = file_get_contents($url);
$bensin = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
        th, td {
    padding: 15px;
}
        th {
    text-align: left;
}
        table {
    border-spacing: 5px;
}
    </style>
</head>

<body>
   <table>
   <tr>
       <th>Stöð</th>
       <th>Bensín 95</th>
       <th>m/ afslætti</th>
       <th>Dísel</th>
       <th>m/ afslætti</th>
   </tr>
    <?php
$url = "http://apis.is/petrol";
$json = file_get_contents($url);
$bensin = json_decode($json, true);

        for ($i = 0; $i <= count($bensin['results'])-1; $i++) {
        echo "<tr>";
        echo "<td>{$bensin['results'][$i]['company']}</td>";
        echo "<td>{$bensin['results'][$i]['bensin95']}</td>";
        echo "<td>{$bensin['results'][$i]['bensin95_discount']}</td>";
        echo "<td>{$bensin['results'][$i]['diesel']}</td>";
        echo "<td>{$bensin['results'][$i]['diesel_discount']}</td>";
        
        
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
