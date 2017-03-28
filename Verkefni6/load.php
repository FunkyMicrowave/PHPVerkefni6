<?php
    $nafn = $_POST['nafn'];
    $linkur = $_POST['linkur'];
    $json = file_get_contents('myndir.json');
    $json1 = json_decode($json);
    if (!$json) trigger_error('JSON FAIL: ' .  json_last_error(), E_USER_ERROR);
    $myndir = new StdClass;
    $myndir->nafn = $nafn;
    $myndir->linkur = $linkur;
    $json1->myndir[] = $myndir;
    $json2 = json_encode($json1);
    file_put_contents('myndir.json', $json2);
    header('Location:http://178.62.46.222/PHP/Verkefni6/index.php');
?>