<?php

$ua_to_us = 0;
$ua_to_eu = 0;
$us_to_ua = 0;
$us_to_eu = 0;
$eu_to_us = 0;
$eu_to_ua = 0;

if(isset($_POST["ua_to_us"])){

$ua_to_us = $_POST["ua_to_us"] / 27;
}
if(isset($_POST["ua_to_eu"])){

$ua_to_eu = $_POST["ua_to_eu"] / 32;
}
if(isset($_POST["us_to_ua"])){

    $us_to_ua = $_POST["us_to_ua"] * 27;
}
if(isset($_POST["ua_to_eu"])){

    $us_to_eu = $_POST["us_to_eu"] * 32;
}
if(isset($_POST["ua_to_us"])){

    $eu_to_us = $_POST["eu_to_us"] + 2;
}
if(isset($_POST["eu_to_ua"])){

    $eu_to_ua = $_POST["eu_to_ua"] * 32;
}

echo  "UA в US - кол-во US:" . $ua_to_us. "<br>" .
      "UA в EU - EU:" . $ua_to_eu . "<br>";

?>