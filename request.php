<?php

$myObj = new \stdClass();

$myObj->name = $_POST["name"];
$myObj->mail = $_POST["mail"];
$myObj->phone = $_POST["phone"];
$myObj->details = $_POST["details"];

$dir = "requests.json";
$f = fopen($dir, "r") or die("Unable to open file!");
$json = json_decode(fread($f,filesize($dir)));
fclose($f);

array_push($json->requests, $myObj);

$f = fopen($dir, 'w') or die("Unable to open file!");
fwrite($f, json_encode($json));
fclose($f);

echo '<div class="modal-content">
<p>Thank You!</p>
<p>We have noted that down and will get back to you very soon.</p>
<button id="modalBtn">Accept</button>
</div>';

?>