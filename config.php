<?php
global $json;

$json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/export.json');
$json = json_decode($json, true);

$json['weather'] = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/json/weather.json');
$json['weather'] = json_decode($json['weather'], true);
