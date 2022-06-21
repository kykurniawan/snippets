<?php

function format($format, $string)
{
    $stringSplit = str_split($string);
    $formatSplit = str_split($format);
    $result = '';

    for ($i = 0; $i < sizeof($stringSplit); $i++) {
        if ($formatSplit[0] == '%') {
            $result .= $stringSplit[$i];
        } else {
            $result .= $formatSplit[0];
            $i--;
        }
        array_shift($formatSplit);
    }
    return $result;
}

// Usage Example:

format('%%% %% %', 123456);
// return: 123 45 6

format('%%-%%-%%%', 'ABCDEFG');
// return: AB-CD-EFG
