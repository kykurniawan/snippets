<?php

/**
 * Function for geting day name in indoneisan
 * 
 * @param string $dateString Date (Y-m-d)
 * 
 * @return string
 */
function indonesian_day_name($dateString)
{
    $unixTimestamp = strtotime($dateString);
    $dayOfWeek = date("w", $unixTimestamp);
    switch ($dayOfWeek) {
        case 0:
            return "Minggu";
        case 1:
            return "Senin";
        case 2:
            return "Selasa";
        case 3:
            return "Rabu";
        case 4:
            return "Kamis";
        case 5:
            return "Jum'at";
        case 6:
            return "Sabtu";
        default:
            return "Undefined";
    }
}