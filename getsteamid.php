<?php
header('Access-Control-Allow-Origin: *');
if($_GET["type"] == "json") {
  header('Content-type: application/json');
  $API = file_get_contents('https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='. $_GET["key"] .'&steamids=' . $_GET["id"] . '&format=json');
}
elseif($_GET["type"] == "xml"){
  header('Content-type: application/xml');
  $API = file_get_contents('https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='. $_GET["key"] .'&steamids=' . $_GET["id"] . '&format=xml');
}
elseif($_GET["type"] !== "json" || $_GET["type"] !== "xml") {
  http_response_code(415);
}
echo $API;
?>
