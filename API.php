<?php

include("convert.php");
if (!is_numeric($_GET["measurement"])) {
    $result = "Please input a number.";
} else {
    $result = convertMeasurement($_GET["measurement"], $_GET["from_unit"], $_GET["to_unit"]);
}
echo $result;

