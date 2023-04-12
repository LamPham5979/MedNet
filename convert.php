<?php
function convertMeasurement($measurement, $from_unit, $to_unit) {
    // Convert the measurement from the from_unit to meters
    if (is_numeric($measurement)){
        $meters;
        switch ($from_unit) {
            case "m":
                $meters = $measurement;
                break;
            case "cm":
                $meters = $measurement / 100;
                break;
            case "km":
                $meters = $measurement * 1000;
                break;
            case "in":
                $meters = $measurement * 0.0254;
                break;
            case "ft":
                $meters = $measurement * 0.3048;
                break;
            case "mi":
                $meters = $measurement * 1609.34;
                break;
            default:
                return;
        }

        // Convert the meters to the to_unit
        $result;
        switch ($to_unit) {
            case "m":
                $result = $meters;
                break;
            case "cm":
                $result = $meters * 100;
                break;
            case "km":
                $result = $meters / 1000;
                break;
            case "in":
                $result = $meters / 0.0254;
                break;
            case "ft":
                $result = $meters / 0.3048;
                break;
            case "mi":
                $result = $meters / 1609.34;
                break;
            default:
                return;
        }
        return $result;
    } 
}